@extends('client.layout.site')
@section('subhead')
    <title>{{ $projectPage->meta_title }}</title>
    <meta name="description"
          content="{{ $projectPage->meta_description }}">
    <meta name="keywords" content="{{ $projectPage->meta_keyword }}">
@endsection

@section('wrapper')

    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a> <span>|</span> @lang('client.sectors')
            </div>
        </div>
    </section>
    <section class="projects_page">
        <div class="wrapper pad48">
            <div class="sector_head flex dark-text">
                <div class="font20 bold uppercase">@lang('client.current_projects')</div>
{{--                <a href="{{locale_route('client.project-type.index','current')}}"--}}
{{--                   class="font20 bold">@lang('client.view_all')</a>--}}
            </div>
            <div class="project_grid">
                @foreach($currentProjects as $project)
                    <a href="{{locale_route('client.project.show',$project->slug)}}">
                        <div class="project_item">
                            @if($project->file)
                                <img class="bg" src="{{url($project->file->path.'/'.$project->file->title)}}" alt=""/>
                            @endif
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
{{--            <div class="sector_head flex dark-text">--}}
{{--                <div class="font20 bold uppercase">@lang('client.finished_projects')</div>--}}
{{--                <a href="{{locale_route('client.project-type.index','finished')}}"--}}
{{--                   class="font20 bold">@lang('client.view_all')</a>--}}
{{--            </div>--}}
{{--            <div class="project_grid">--}}
{{--                @foreach($finishedProjects as $project)--}}
{{--                    <a href="{{locale_route('client.project.show',$project->slug)}}">--}}
{{--                        <div class="project_item">--}}
{{--                            @if($project->file)--}}
{{--                                <img class="bg"--}}
{{--                                     src="{{url($project->file->path.'/'.$project->file->title)}}"--}}
{{--                                     alt=""/>--}}
{{--                            @endif--}}
{{--                            <div class="caption white transition3">--}}
{{--                                <img src="/img/icons/projects/1.png" alt=""/>--}}
{{--                                <div class="bold font20 uppercase">{{$project->title}}</div>--}}
{{--                                <div class="text-07 font14">--}}
{{--                                    {{$project->description}}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
