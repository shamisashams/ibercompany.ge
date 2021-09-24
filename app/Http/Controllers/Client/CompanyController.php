<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * @param string $locale
     * @param string $slug
     * @return Application|Factory|View
     */
    public function show(string $locale, string $slug)
    {
//        $company = Company::where(['slug' => $slug])->firstOrFail();
//        $otherCompanies = Company::where('slug', '!=', $slug)->with(['file', 'translations', 'projects'])->take(6)->orderBy('created_at', 'desc')->get();
//
//        return view('client.pages.company.show', [
//            'company' => $company,
//            'otherCompanies' => $otherCompanies
//        ]);

        $company = Company::where(['slug' => $slug])->with(["files"])->firstOrFail();
//        $otherProjects = Project::where('slug', '!=', $slug)->with(['file', 'translations'])->take(4)->orderBy('created_at', 'desc')->get();

        return view('client.pages.project.show', [
            'company' => $company,
//            'otherProjects' => $otherProjects
        ]);
    }
}
