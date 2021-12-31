<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Certificate;
use App\Models\Company;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {

//        $productPage = Page::where('key', 'product')->firstOrFail();
//        $servicePage = Page::where('key', 'service')->firstOrFail();
//        $aboutPage = Page::where('key', 'about')->firstOrFail();
//        $projectPage = Page::where('key', 'project')->firstOrFail();
//

        $sliders = Slider::with(['file', 'translations'])->orderBy('created_at', 'desc')->get();
        $companies = Company::with(['file', 'translations'])->orderBy('created_at', 'desc')->get();
        $projects = Project::with(['file', 'translations'])->orderBy('created_at', 'desc')->take(4)->get();
        $blogs = Blog::with(['file', 'translations'])->take(3)->orderBy('created_at', 'desc')->get();
        $teamMembers = Team::with(['files', 'translations'])->take(6)->orderBy('created_at', 'desc')->get();

        return view('client.pages.home.index', [
            'sliders' => $sliders,
            'companies' => $companies,
            'projects' => $projects,
            'blogs' => $blogs,
            'teamMembers' => $teamMembers
        ]);
    }
}
