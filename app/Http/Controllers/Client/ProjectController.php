<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * @param string $locale
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(string $locale, Request $request)
    {
        $projectPage = Page::where('key', 'project')->firstOrFail();

        $currentProjects = Project::query()->where(['type' => 'current'])->orderBy('created_at', 'desc')->with(['file', 'translations'])->take(5);
        $finishedProjects = Project::query()->where(['type' => 'finished'])->orderBy('created_at', 'desc')->with(['file', 'translations'])->take(5);

        return view('client.pages.project.sectors ', [
            'projectPage' => $projectPage,
            'currentProjects' => $currentProjects->get(),
            'finishedProjects' => $finishedProjects->get(),
        ]);
    }

    public function projectsByType(string $locale, string $type)
    {
        $projectPage = Page::where('key', 'project')->firstOrFail();

        $projects = Project::query()->where(['type' => $type])
            ->orderBy('created_at', 'desc')
            ->with(['file', 'translations'])
            ->paginate(5);


        return view('client.pages.project.index', [
            'projectPage' => $projectPage,
            'projects' => $projects,
            'type' => $type == 'current' ? 'current_projects' : ($type == 'finished' ? 'finished_projects' : "")
        ]);

    }


    /**
     * @param string $locale
     * @param string $slug
     * @return Application|Factory|View
     */
    public function show(string $locale, string $slug)
    {
        $project = Project::where(['slug' => $slug])->with(["files"])->firstOrFail();
//        $otherProjects = Project::where('slug', '!=', $slug)->with(['file', 'translations'])->take(4)->orderBy('created_at', 'desc')->get();

        return view('client.pages.project.show', [
            'project' => $project,
//            'otherProjects' => $otherProjects
        ]);
    }
}
