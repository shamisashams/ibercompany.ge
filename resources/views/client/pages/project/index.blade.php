@extends('client.layout.site')
@section('subhead')
    <title>{{ $projectPage->meta_title }}</title>
    <meta name="description"
          content="{{ $projectPage->meta_description }}">
@endsection

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="index.html">@lang('home')</a> <span>|</span> @lang('client.projects')
            </div>
        </div>
    </section>
    <section class="projects_page">
        <div class="wrapper pad48">
            <div class="project_grid">
                @foreach($projects as $project)
                    <a href="single-project.html">
                        <div class="project_item">
                            <img class="bg"
                                 src="{{url(count($project->files)>0? $project->files[0]->path.'/'.$project->files[0]->title : 'noimage.png')}}"
                                 alt=""/>
                            <div class="caption white transition3">
                                <img src="/img/icons/projects/1.png" alt=""/>
                                <div class="bold font20 uppercase">{{$project->title}}</div>
                                <div class="text-07 font14">
                                    {{$project->description}}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
        {{ $projects->appends(request()->input())->links('client.pagination') }}

    </section>
@endsection

