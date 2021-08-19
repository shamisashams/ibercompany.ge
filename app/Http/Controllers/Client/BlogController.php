<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    /**
     * @param string $locale
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(string $locale, Request $request)
    {
//        $projectPage = Page::where('key', 'blog')->firstOrFail();
        $categories = Category::whereHas('blogs', function (Builder $query) {
            $query->where('status', true);
        })->get();

        $blogs = Blog::query()->has('category')->with(['file', 'translations', 'category'])->orderBy('created_at', 'desc');


        if ($request->has('category') && $request['category'] !== 'all') {
            $blogs = $blogs->where('category_id', $request['category']);
        }

        if ($request->has('date')) {
            $startDate = substr($request['date'], '0', strpos($request['date'], '-') - 1);
            $endDate = substr($request['date'], strpos($request['date'], '-') + 2, strlen($request['date']));


            if (\DateTime::createFromFormat('d/m/Y', $startDate) !== false && \DateTime::createFromFormat('d/m/Y', $startDate) !== false) {
                $startDate = Carbon::createFromFormat('d/m/Y', $startDate)->format('Y-m-d');
                $endDate = Carbon::createFromFormat('d/m/Y', $endDate)->format('Y-m-d');
            } else {
                return redirect($request->fullUrlWithQuery(['date' => Carbon::now()->format('d/m/Y') . " - " . Carbon::now()->format('d/m/Y')]));
            }

            $blogs = $blogs
                ->where(DB::raw('(DATE_FORMAT(created_at, "%Y-%m-%d"))'), '>=', $startDate)
                ->where(DB::raw('(DATE_FORMAT(created_at, "%Y-%m-%d"))'), '<=', $endDate);
        }


        return view('client.pages.blog.index', [
//            'projectPage' => $projectPage,
            'blogs' => $blogs->paginate(8),
            'categories' => $categories
        ]);
    }


    /**
     * @param string $locale
     * @param string $slug
     * @return Application|Factory|View
     */
    public function show(string $locale, string $id)
    {

        $blog = Blog::where(['id' => $id])->whereHas('category', function (Builder $query) {
            $query->where('status', 1);
        })->firstOrFail();

        $otherBlogs = Blog::where('id', '!=', $id)->has('category')->with(['file', 'translations', 'category'])->take(4)->orderBy('created_at', 'desc')->get();

        return view('client.pages.blog.show', [
            'blog' => $blog,
            'otherBlogs' => $otherBlogs
        ]);
    }
}
