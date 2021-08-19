<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    /**
     * @param string $locale
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(string $locale, Request $request)
    {
        $teamPage = Page::where('key', 'team')->firstOrFail();

        $members = Team::query()->orderBy('created_at', 'desc')->with(['file', 'translations'])->take(6);


        return view('client.pages.team.index ', [
            'teamPage' => $teamPage,
            'members' => $members->get()
        ]);
    }

    /**
     * @param string $locale
     * @param string $slug
     * @return Application|Factory|View
     */
    public function show(string $locale, string $id)
    {
        $team = Team::where(['id' => $id])->firstOrFail();


        return view('client.pages.team.show', [
            'team' => $team,
        ]);
    }
}
