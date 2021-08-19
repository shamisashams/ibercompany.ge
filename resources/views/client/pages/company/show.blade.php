@extends('client.layout.site')
@section('subhead')
    <title>{{$company->meta_title}}</title>
    <meta name="description"
          content="{{ $company->meta_description }}">
    <meta name="keywords" content="{{ $company->meta_keyword }}">
@endsection

@section('wrapper')

    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span> @lang('client.our_companies')
            </div>
        </div>
    </section>
    <section class="company_page">
        <div class="wrapper pad48">
            <div class="flex heading">
                <img
                    src="{{url(count($company->files)>0? $company->files[0]->path.'/'.$company->files[0]->title : 'noimage.png')}}"
                    alt=""/>
                <div class="bold dark-text font25 uppercase">{{$company->title}}</div>
                <a
                    href="{{$company->website_link?:"#"}}"
                    class="flex uppercase back"
                    style="color: #015aaa"
                >
                    <div class="bold">@lang('client.go_to_website')</div>
                    <img class="transition3" src="/img/icons/news/3.png" alt=""/>
                </a>
            </div>
            <div class="flex content">
                <div class="light-text">
                    {!! $company->content_1 !!}
                </div>
                <div class="img">
                    <img
                        src="{{url(count($company->files)>1? $company->files[1]->path.'/'.$company->files[1]->title : 'noimage.png')}} "
                        alt=""/>
                </div>
            </div>
            @if(count($company->projects)>0)
                <div class="company_projects">
                    <div class="font25 bold dark-text uppercase">@lang('client.company_projects')</div>
                    <div id="company_projects_slider">
                        @foreach($company->projects as $project)
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
                    <button class="arrow flex center transition3" id="company_arrow_next">
                        <svg
                            class="transition3"
                            xmlns="http://www.w3.org/2000/svg"
                            width="13.385"
                            height="23.603"
                            viewBox="0 0 13.385 23.603"
                        >
                            <path
                                id="Path_55"
                                data-name="Path 55"
                                d="M8365.011,384.853l10.218,11-10.218,10.534"
                                transform="translate(-8363.911 -383.832)"
                                fill="none"
                                stroke-width="3"
                            />
                        </svg>
                    </button>
                </div>
            @endif
            <div class="flex content">
                <div class="light-text">
                    {!! $company->content_2 !!}
                </div>
                @if($company->youtube_link)
                    <div class="img video">
                        <iframe
                            src="https://www.youtube.com/embed/{{$company->youtube_link}}"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section id="partners" class="company">
        <div class="title font25 bold dark-text wrapper uppercase pad48">
            @lang('client.other_companies')
        </div>
        <div class="wrapper">
            <div id="partners_slider" class="flex">
                @foreach($otherCompanies as $company)
                    <a href="{{locale_route('client.company.show',$company->slug)}}" class="slide flex center">
                        <img
                            src="{{url($company->file? $company->file->path.'/'.$company->file->title : 'noimage.png')}}"
                            alt=""/>
                        <div>
                            <div class="bold font20 dark-text uppercase">
                                {{$company->title}}
                            </div>
                            <div class="font14 light-text text-07">
                                {{$company->description}}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <div class="gap about"></div>
@endsection
