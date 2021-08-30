@extends('client.layout.site')
{{--@section('subhead')--}}
{{--    <title>{{$team->meta_title}}</title>--}}
{{--    <meta name="description"--}}
{{--          content="{{ $team->meta_description }}">--}}
{{--    <meta name="keywords" content="{{ $team->meta_keyword }}">--}}
{{--@endsection--}}

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span> @lang('client.team')
            </div>
        </div>
    </section>

    <section class="single_teammember">
        <div class="wrapper">
            <div class="content">
                <div class="person">
                    <div class="main-title bold short uppercase">{{$team->name}}</div>
                    <div class="font14 text-07">{{$team->position}}</div>
                    @if($team->file)
                        <div class="img"><img
                                src="{{url($team->file->path.'/'.$team->file->title)}}"
                                alt=""/></div>
                    @endif
                </div>
                <div class="font18 light-text text-07">
                    {!!$team->content!!}
                </div>
            </div>
            <a
                href="{{locale_route('client.team.index')}}"
                class="flex center uppercase back"
                style="color: #015aaa"
            >
                <img class="transition3" src="/img/icons/news/3.png" alt=""/>
                <div class="bold">@lang('client.back_to_team')</div>
            </a>
        </div>
    </section>

@endsection
