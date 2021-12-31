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
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span> @lang('client.sectors')
                <span>|</span>@lang('client.'.$type)
            </div>
        </div>
    </section>
    <section class="projects_page">
        <div class="wrapper pad48">
            <div class="sector_head flex dark-text">
                <div class="font20 bold uppercase">@lang('client.'.$type)</div>
            </div>
            <div class="project_grid">
                @foreach($projects as $project)
                    <a href="{{locale_route('client.project.show',$project->slug)}}">
                        <div class="project_item">
                            @if($project->file)
                                <img class="bg"
                                     src="{{url($project->file->path.'/'.$project->file->title)}}"
                                     alt=""/>
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
        </div>
        {{ $projects->appends(request()->input())->links('client.pagination') }}

    </section>
@endsection
