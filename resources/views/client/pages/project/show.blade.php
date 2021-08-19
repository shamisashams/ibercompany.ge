@extends('client.layout.site')
@section('subhead')
    <title>{{$project->meta_title}}</title>
    <meta name="description"
          content="{{ $project->meta_description }}">
    <meta name="keywords" content="{{ $project->meta_keyword }}">
@endsection

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a> <span>|</span> @lang('client.projects')
            </div>
        </div>
    </section>
    <section class="single_news single_project">
        <div class="wrapper pad48 flex">
            <div class="single_news_content">
                <div class="font25 bold dark-text uppercase">
                    {{$project->title}}
                </div>
                <div class="flex font18 light-text">
                    <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$project->created_at)->format('d.m.Y')}}</p>
                </div>
                <div class="light-text paragraph">
                    {!! $project->content !!}
                </div>
                <a
                    href="{{locale_route('client.project.index')}}"
                    class="flex uppercase back"
                    style="color: #015aaa"
                >
                    <img class="transition3" src="/img/icons/news/3.png" alt=""/>
                    <div class="bold">@lang('client.back_to_projects')</div>
                </a>
            </div>
            <div class="other_news">
                <div class="font25 bold dark-text uppercase">@lang('client.other_projects')</div>
                <div class="project_grid">
                    @foreach($otherProjects as $project)
                        <a href="{{locale_route('client.project.show',$project->slug)}}">
                            <div class="project_item">
                                <img class="bg"
                                     src="{{url($project->file? $project->file->path.'/'.$project->file->title : 'noimage.png')}}"
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
        </div>
    </section>

@endsection

