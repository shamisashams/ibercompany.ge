@extends('client.layout.site')
@section('subhead')
    <title>IberCompany</title>
    <meta name="description"
          content="iber-company">
@endsection
@section('wrapper')
<div class="homePage">
    <section id="hero">
        <div class="wrapper">
            <div id="hero_slider">
                @foreach($sliders as $slider)
                    <div class="slide">
                        @if(count($slider->files)>0)
                            <img
                                src="{{url($slider->files[0]->path.'/'.$slider->files[0]->title)}}"
                                alt="" class="bg"/>
                        @endif
                        <div class="overlay">
                            <div class="content transition5 white flex center">
                                <div class="font50 bold">{{$slider->title}}</div>
                                <div class="font18">
                                    {!!$slider->description!!}
                                </div>
                                <button
                                onclick="window.location.href='{{locale_route('client.about.index')}}'"
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
            <div id="languages" class="white font18 transition3" style="z-index:100000000000">
                <div class="main">{{app()->getLocale()}}</div>
                <div class="dropdown transition3">
                    @foreach(config('translatable.locales') as $locale)
                        @if(app()->getLocale() != $locale)
                            <a href="{{ get_url($locale) }}">{{$locale}}</a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('client.pages.includes.partners',['companies'=>$companies,'class'=>null])

    <section class="projects_home">

        <div class="wrapper pad80 flex center">
            <div class="content">
                <div class="main-title bold" style="text-align: left">
                    @lang('client.our_projects')
                </div>
                <div class=" font18 bold uppercase" style="text-align: left">
                    @lang('client.project_title')
                </div>
                <div class="light-text text-07" style="text-align: left">
                    @lang('client.project_description')
                </div>
                <a href="{{locale_route('client.project.index')}}">
                    <button class="main-button  main-border bold">
                        @lang('client.see_all_projects')
                    </button>
                </a>
            </div>

            <div class="grid">
                @foreach($projects as $project)
                    <a href="{{locale_route('client.project.show',$project->slug)}}">
                        <div class="project_item">
                            @if(count($project->files)>0)
                                <img class="bg"
                                     src="{{url($project->files[0]->path.'/'.$project->files[0]->title)}}"
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
    </section>
    <section class="news_home glass">
        <div class="wrapper pad80">
            <div class="content white">
                <div class="abs_img img"><img src="/img/other/1.png" alt=""/></div>
                <div>
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
                    <a href="{{locale_route('client.blog.index')}}" class="view_all light-text bold font20"
                    >@lang('client.view_all_news')</a
                    >

                </div>
            </div>
        </div>
    </section>
    <section class="news_home det">
        <div class="wrapper pad80">
            <div class="content">
                @foreach($blogs as $blog)
                    <div class="news_item flex center">
                        @if(count($blog->files)>0)
                            <div class="img">
                                <img
                                    src="{{url($blog->files[0]->path.'/'.$blog->files[0]->title)}}"
                                    alt=""/>
                            </div>
                        @endif
                        <div class="text">
                            <div class="title  bold uppercase font18">
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
                                <a href="{{locale_route('client.blog.show',$blog->id)}}"
                                   class=" uppercase font18 transition3 see_more">
                                    @lang('client.see_more')
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="about_home projects_home dark-text">
        <div class="wrapper pad80 flex center">
            <div class="content">
                {{-- <div class="main-title bold" style="text-align: left">@lang('client.home.about_us')</div> --}}
                <div class="blue font18 bold" style="text-align: left">
                    @lang('client.who_we_are')
                </div>
                <div class="dark-text text-07" style="text-align: left">@lang('client.about_us_text')</div>
                <a href="{{locale_route('client.about.index')}}">
                    <button class="main-button dark-text main-border bold">@lang('client.more_about_us')</button>
                </a>
            </div>
            <div class="img"><img src="/img/other/2.png" alt=""/></div>
        </div>
    </section>
    <section class="team_home">
        <div class="wrapper pad80">
            <div class="flex">
                {{-- <div class="main-title bold">@lang('client.out_team')</div> --}}
                <div class="main-title bold" style="color:black">@lang('client.out_team')</div>
                <a href="{{locale_route('client.team.index')}}"
                   class="view font20 dark-text bold">@lang('client.view_team')</a>
            </div>
            <div id="team_slider" class="flex">
                @foreach($teamMembers as $teamMember)
                    <div class="team_member">
                        <div class="inner_div">
                            <div class="flip_card_front">
                                @if(count($teamMember->files)>0)
                                    <div class="img">
                                        <img
                                            src="{{url($teamMember->files[0]->path.'/'.$teamMember->files[0]->title)}}"
                                            alt=""/>
                                    </div>
                                @endif
                                <div class="caption">
                                    <div class="blue font20 bold">{{$teamMember->name}}</div>
                                    <strong>{{ $teamMember->position }}</strong>
                                    <p>{{ $teamMember->content }}</p>
                                </div>
                            </div>
                            <div class="flip_card_back">
                                @if(count($teamMember->files)>1)
                                    <div class="img">
                                        <img
                                            src="{{url($teamMember->files[1]->path.'/'.$teamMember->files[1]->title)}}"
                                            alt=""/>
                                    </div>
                                @elseif(count($teamMember->files)>0)
                                    <div class="img">
                                        <img
                                            src="{{url($teamMember->files[0]->path.'/'.$teamMember->files[0]->title)}}"
                                            alt=""/>
                                    </div>
                                @endif
                                <div class="caption">
                                    <div class="flex">
                                        <div class="blue font20 bold">@lang('client.name')</div>
                                        <p>{{$teamMember->name}}</p>
                                    </div>
                                    @if($teamMember->childhood)
                                        <div class="flex">
                                            <div class="blue font20 bold">@lang('client.childhood')</div>
                                            <p>{{$teamMember->childhood}}</p>
                                        </div>
                                    @endif

                                    @if($teamMember->hobby)
                                        <div class="flex">
                                            <div class="blue font20 bold">@lang('client.hobby')</div>
                                            <p>{{$teamMember->hobby}}</p>
                                        </div>
                                    @endif

                                    @if($teamMember->super_power)
                                        <div class="flex">
                                            <div class="blue font20 bold">@lang('client.super_power')</div>
                                            <p>{{$teamMember->super_power}}</p>
                                        </div>
                                    @endif
                                    @if($teamMember->favorite)
                                        <div class="flex">
                                            <div class="blue font20 bold">@lang('client.favorite')</div>
                                            <p>{{$teamMember->favorite}}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
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
</div>
 {{-- @if ($subsuccess) --}}
 @if (Session::get('subsuccess'))
  <script>
    Swal.fire({
  title: @lang('client.subscriberEmail'),
  text: @lang('client.subscriberEmailText'),
  icon: 'success',
  confirmButtonText: 'Cool'
})
  </script>
 @endif
@endsection
