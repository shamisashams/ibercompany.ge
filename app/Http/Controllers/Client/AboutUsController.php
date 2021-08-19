<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Page;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = Page::where('key', 'about')->firstOrFail();
        $companies = Company::with(['file', 'translations', 'projects'])->take(6)->orderBy('created_at', 'desc')->get();

        return view('client.pages.about.index', [
            "about" => $about,
            'companies' => $companies
        ]);
    }
}
