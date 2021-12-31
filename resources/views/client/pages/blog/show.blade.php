@extends('client.layout.site')
{{--@section('subhead')--}}
{{--    <title>{{ $projectPage->meta_title }}</title>--}}
{{--    <meta name="description"--}}
{{--          content="{{ $projectPage->meta_description }}">--}}
{{--@endsection--}}

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span>@lang('client.news')
            </div>
        </div>
    </section>
    <section class="single_news">
        <div class="wrapper pad48 flex">
            <div class="single_news_content">
                <div class="font25 bold dark-text uppercase">
                    {{$blog->title}}
                </div>
                <div class="flex font18 light-text">
                    <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$blog->created_at)->format('d.m.Y')}}</p>
                    <p>{{$blog->category->title}}</p>
                </div>
                <div class="light-text paragraph">
                    {!! $blog->content !!}
                </div>
                <a
                    href="{{locale_route('client.blog.index')}}"
                    class="flex uppercase back"
                    style="color: #015aaa"
                >
                    <img class="transition3" src="/img/icons/news/3.png" alt=""/>
                    <div class="bold">@lang('client.back_to_news')</div>
                </a>
            </div>
            <div class="other_news">
                <div class="font25 bold dark-text uppercase">@lang('client.other_news')</div>
                @foreach($otherBlogs as $blog)
                    <div class="news_item flex center">
                        @if($blog->file)
                            <div class="img">
                                <img
                                    src="{{url($blog->file->path.'/'.$blog->file->title)}}"
                                    alt=""/>
                            </div>
                        @endif
                        <div class="text">
                            <div class="title dark-text bold uppercase font18">
                                {{$blog->title}}
                            </div>
                            <div class="light-text">
                                {{$blog->description}}
                            </div>
                            <div class="flex">
                                <div>
                                    <div
                                        class="light-text font18">{{\Carbon\Carbon::createFromFormat('Y-m-d h:i:s',$blog->created_at)->format('d.m.Y')}}</div>
                                    <div class="light-text font18">{{$blog->category->title}}</div>
                                </div>
                                <a href="{{locale_route('client.blog.show',$blog->id)}}"
                                   class="font18 transition3 click_to_see_more"
                                >@lang('client.click_to_see_more')</a
                                >
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
