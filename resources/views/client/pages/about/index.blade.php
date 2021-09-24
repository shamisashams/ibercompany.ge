@extends('client.layout.site')
@section('subhead')
    <title>{{ $about->meta_title }}</title>
    <meta name="description"
          content="{{ $about->meta_description }}">
    <meta name="keywords" content="{{ $about->meta_keyword }}">
@endsection

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span> @lang('client.about')
            </div>
        </div>
    </section>
    <section class="about_holding">
        <div class="wrapper pad48 flex">
            <div class="content">
                <div class="main-title short bold">{{$about->title_1}}</div>
                <div class="light-text text-07">
                    {!! $about->content_1 !!}
                </div>
            </div>
            @if(count($about->files)>0)
                <div class="img">
                    <img
                        src="{{url($about->files[0]->path.'/'.$about->files[0]->title)}}"
                        alt=""/>
                </div>
            @endif
        </div>
    </section>
    @if($about->video_link)
        <section class="video_placeholder about">
            <div class="wrapper video pad48">
                <iframe
                    src="https://www.youtube.com/embed/{{$about->video_link}}"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>
        </section>
    @endif
    <section class="about_holding our_companies">
        <div class="wrapper pad48 flex">
            <div class="content">
                <div class="main-title short bold">{{$about->title_2}}</div>
                <div class="light-text text-07">
                    {!!$about->content_2!!}
                </div>
            </div>
            <div class="img">
                @if(count($about->files)>1)
                    <img src="{{url($about->files[1]->path.'/'.$about->files[1]->title)}}" alt=""/>
                @endif
            </div>
        </div>
    </section>

    @include('client.pages.includes.partners',['companies'=>$companies,'class'=>'about'])

    <section class="gap about"></section>

@endsection

