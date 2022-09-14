<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Profession;
use App\Models\Team;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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
        //        return Profession::with(['translations', 'team' => function ($query) {
        //            $query->orderBy('created_at', 'desc')->with(['file', 'translations']);
        //        }])->get();
        $teamPage = Page::where('key', 'team')->firstOrFail();
        //        $members = Team::query()->orderBy('created_at', 'desc')->with(['file', 'translations'])->take(6);
        $professions = Profession::with(['translations', 'team' => function ($query) {
            $query->orderBy('created_at', 'desc')->with(['file', 'translations']);
        }])->where("status", 1);
        return view('client.pages.team.index ', [
            'teamPage' => $teamPage,
            'professions' => $professions->get()
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
