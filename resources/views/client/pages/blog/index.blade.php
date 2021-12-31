@extends('client.layout.site')
@section('subhead')
    <title>{{ $blogPage->meta_title }}</title>
    <meta name="description"
          content="{{ $blogPage->meta_description }}">
    <meta name="keywords" content="{{ $blogPage->meta_keyword }}">
@endsection

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span> @lang('client.news')
            </div>
            <form action="{{locale_route('client.blog.index')}}" id="news-filter-form"
                  class="filter dark-text flex center">

                <div style="opacity: 0.3">@lang('client.filter_by'):</div>
                <div class="font20">
                    <input name="date" style="font-size: 19px" type='text' id="date-range-picker"
                           class="form-control"/>
                </div>
                <select onchange="this.form.submit()" class="font20" name="category" id="">
                    <option value="all" selected>@lang('client.all')</option>
                    @foreach($categories as $category)
                        <option {{request()->get('category')==$category->id?"selected":""}} value="{{$category->id}}">
                            {{$category->title}}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </section>
    <section class="news_grid news_page">
        <div class="wrapper pad48 grid">
            @foreach($blogs as $blog)
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
                                    class="light-text font18">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$blog->created_at)->format('d.m.Y')}}</div>
                                <div class="light-text font18">{{$blog->category->title}}</div>
                            </div>
                            <a href="{{locale_route('client.blog.show',$blog->id)}}"
                               class="dark-text uppercase font18 transition3 see_more">
                                @lang('client.see_more')
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{ $blogs->appends(request()->input())->links('client.pagination') }}

@endsection

