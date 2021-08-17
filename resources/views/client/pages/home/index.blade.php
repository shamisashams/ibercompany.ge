@extends('client.layout.site')
@section('subhead')
    <title>Home</title>
    <meta name="description"
          content="home">
@endsection
@section('wrapper')
    <section id="hero">
        <div class="wrapper">
            <div id="hero_slider">
                @foreach($sliders as $slider)
                    <div class="slide">
                        <img
                            src="{{url(count($slider->files)>0? $slider->files[0]->path.'/'.$slider->files[0]->title : 'noimage.png')}}"
                            alt="" class="bg"/>
                        <div class="overlay">
                            <div class="content transition5 white flex center">
                                <div class="font50 bold">{{$slider->title}}</div>
                                <div class="font18">
                                    {!!$slider->description!!}
                                </div>
                                <button onclick="window.location.href='https://{{$slider->redirect_url}}'"
                                        class="main-button main-border white bold">
                                    @lang('client.learn_more')
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button
                class="arrow arrow_scale prev main-border flex center transition3"
                id="hero_arrow_prev"
            >
                <img class="transition3" src="/img/icons/hero/1.png" alt=""/>
            </button>
            <button
                class="arrow arrow_scale next main-border flex center transition3"
                id="hero_arrow_next"
            >
                <img class="transition3" src="/img/icons/hero/2.png" alt=""/>
            </button>
            <div id="languages" class="white font18 transition3">
                <div class="main">En</div>
                <div class="dropdown transition3">
                    <a href="#">Ge</a>
                    <a href="#">Ru</a>
                </div>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="wrapper">
            <div id="partners_slider" class="flex">
                @foreach($companies as $company)
                    <a href="companies.html" class="slide flex center">
                        <img
                            src="{{url(count($company->files)>0? $company->files[0]->path.'/'.$company->files[0]->title : 'noimage.png')}}"
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
            <!-- <button class="arrow flex center transition3" id="partners_arrow_next">
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
            </button> -->
        </div>
    </section>

    <section class="projects_home">

        <div class="wrapper pad80 flex center">
            <div class="content">
                <div class="main-title bold" style="text-align: left">
                    @lang('client.our_projects')
                </div>
                <div class="dark-text font18 bold uppercase" style="text-align: left">
                    @lang('client.project_title')
                    {{--                    Satisfied conveying an dependent contented he gentleman agreeable do--}}
                    {{--                    be.--}}
                </div>
                <div class="light-text text-07" style="text-align: left">
                    @lang('client.project_description')
                </div>
                <button class="main-button dark-text main-border bold">
                    @lang('client.see_all_projects')
                </button>
            </div>

            <div class="grid">
                @foreach($projects as $project)
                    <a href="#">
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
    </section>
    <section class="news_home glass">
        <div class="wrapper pad80">
            <div class="content white">
                <div class="main-title white bold">@lang('client.news')</div>
                <div class="font18 uppercase bold">
                    @lang('client.news_title')
                </div>
                <div class="light-text">
                    @lang('client.news_description')
                </div>
                <div class="flex font18 uppercase">
                    {{--                    <div>--}}
                    {{--                        <p class="bold">01.01.2021</p>--}}
                    {{--                        <p class="bold">Category</p>--}}
                    {{--                    </div>--}}
                    {{--                    <a class="bold" href="#">See more</a>--}}
                </div>
                <a href="news.html" class="view_all light-text bold font20"
                >@lang('client.view_all_news')</a
                >
                <div class="abs_img"><img src="/img/other/1.png" alt=""/></div>
            </div>
        </div>
    </section>
    <section class="news_home det">
        <div class="wrapper pad80">
            <div class="content">
                @foreach($blogs as $blog)
                    <div class="news_item flex center">
                        <div class="img">
                            <img
                                src="{{url(count($blog->files)>0? $blog->files[0]->path.'/'.$blog->files[0]->title : 'noimage.png')}}"
                                alt=""/>
                        </div>
                        <div class="text">
                            <div class="title dark-text bold uppercase font18">
                                {{$blog->title}}
                            </div>
                            <div class="light-text">
                                {{$blog->description}}
                            </div>
                            <div class="flex">
                                <div>
                                    <div class="light-text font18">
                                        {{\Carbon\Carbon::parse($blog->created_at)->format('d.m.Y')}}
                                    </div>
                                    <div class="light-text font18">{{$blog->category->title}}</div>
                                </div>
                                <a href="#" class="dark-text uppercase font18 transition3 see_more">
                                    @lang('client.see_more')
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about_home projects_home">
        <div class="wrapper pad80 flex center">
            <div class="content">
                <div class="main-title bold" style="text-align: left">@lang('client.about_us')</div>
                <div class="blue font18 bold" style="text-align: left">
                    @lang('client.who_we_are')
                </div>
                <div class="dark-text text-07" style="text-align: left">
                    @lang('about_us_text')
                </div>
                <button class="main-button dark-text main-border bold">
                    @lang('more_about_us')
                </button>
            </div>
            <div class="img"><img src="/img/other/2.png" alt=""/></div>
        </div>
    </section>
    <section class="team_home">
        <div class="wrapper pad80">
            <div class="flex">
                <div class="main-title bold">@lang('client.out_team')</div>
                <a href="team.html" class="view font20 dark-text bold">@lang('client.view_team')</a>
            </div>
            <div id="team_slider" class="flex">
                @foreach($teamMembers as $member)
                    <a href="#">
                        <div class="team_member img">
                            <img src="{{url(count($member->files)>0? $member->files[0]->path.'/'.$member->files[0]->title : 'noimage.png')}}" alt=""/>
                            <div class="caption white transition5">
                                <div class="font20 bold transition5 uppercase name">
                                    {{$member->name}}
                                </div>
                                <div class="text-07 font14">{{$member->position}}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <button
                class="arrow arrow_scale prev main-border flex center transition3"
                id="team_arrow_prev"
            >
                <img class="transition3" src="/img/icons/team/1.png" alt=""/>
            </button>
            <button
                class="arrow arrow_scale next main-border flex center transition3"
                id="team_arrow_next"
            >
                <img class="transition3" src="/img/icons/team/2.png" alt=""/>
            </button>
        </div>
    </section>
@endsection
