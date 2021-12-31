<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index(string $locale, Request $request)
    {
        $companyPage = Page::where('key', 'company')->firstOrFail();
        $companies = Company::with(['file', 'translations'])->orderBy('created_at', 'desc')->get();

        return view('client.pages.company.sectors ', [
            'companyPage' => $companyPage,
            'companies' => $companies
        ]);
    }

    /**
     * @param string $locale
     * @param string $slug
     * @return Application|Factory|View
     */

    public function show(string $locale, string $slug)
    {
        $company = Company::where(['slug' => $slug])->with(["files"])->firstOrFail();

        return view('client.pages.company.show', [
            'company' => $company,
        ]);
    }

}
