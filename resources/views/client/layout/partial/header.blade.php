<div id="navigation" class="flex center">
    <button id="open_navigation">
        <div></div>
    </button>
    <a href="{{locale_route('client.home.index')}}" class="logo">
        <img src="/img/logo/1.png" alt=""/>
    </a>
    <div class="navbar">

        <a class="dark-text font18 {{request()->routeIs('client.home.index')?"active":""}}"
           href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
        <a class="dark-text font18 {{str_contains(request()->path(),'about')?"active":""}}"
           href="{{locale_route('client.about.index')}}">@lang('client.about')</a>
        <a class="dark-text font18 {{str_contains(request()->path(),'blog')?"active":""}}"
           href="{{locale_route('client.blog.index')}}">@lang('client.news')</a>
        <a class="dark-text font18 {{str_contains(request()->path(),'company')?"active":""}}"
           href="{{locale_route('client.company.index')}}">@lang('client.sectors')</a>
        <a class="dark-text font18 {{str_contains(request()->path(),'team')?"active":""}}"
           href="{{locale_route('client.team.index')}}">@lang('client.team')</a>
        <a class="dark-text font18 {{str_contains(request()->path(),'contact')?"active":""}}"
           href="{{locale_route('client.contact.index')}}">@lang('client.contact')</a>
    </div>
    <div class="social_media">
        <a href="{{$gfacebook}}"
        >
            <div class="flex center sm transition3">
                <svg
                    class="transition3"
                    xmlns="http://www.w3.org/2000/svg"
                    width="14.382"
                    height="26.852"
                    viewBox="0 0 14.382 26.852"
                >
                    <path
                        id="Icon_awesome-facebook-f"
                        data-name="Icon awesome-facebook-f"
                        d="M15.049,15.1l.746-4.86H11.131V7.091a2.43,2.43,0,0,1,2.74-2.625h2.12V.328A25.851,25.851,0,0,0,12.228,0c-3.84,0-6.35,2.328-6.35,6.541v3.7H1.609V15.1H5.878V26.852h5.253V15.1Z"
                        transform="translate(-1.609)"
                    />
                </svg>
            </div
            >
        </a>
        <a href="{{$ginstagram}}"
        >
            <div class="flex center sm transition3">
                <svg
                    class="transition3"
                    xmlns="http://www.w3.org/2000/svg"
                    width="21.24"
                    height="21.24"
                    viewBox="0 0 21.24 21.24"
                >
                    <path
                        id="Icon_ionic-logo-linkedin"
                        data-name="Icon ionic-logo-linkedin"
                        d="M24.041,4.5H6.315A1.733,1.733,0,0,0,4.5,6.154V23.919a1.869,1.869,0,0,0,1.815,1.82H24.036a1.774,1.774,0,0,0,1.7-1.82V6.154A1.629,1.629,0,0,0,24.041,4.5ZM11.084,22.2H8.041V12.744h3.043Zm-1.416-10.9H9.645a1.562,1.562,0,0,1-1.6-1.632A1.571,1.571,0,0,1,9.684,8.041a1.567,1.567,0,0,1,1.627,1.632A1.571,1.571,0,0,1,9.667,11.305ZM22.2,22.2H19.161V17.031c0-1.239-.443-2.086-1.544-2.086a1.665,1.665,0,0,0-1.56,1.123,2.049,2.049,0,0,0-.105.747V22.2H12.91V12.744h3.043V14.06A3.08,3.08,0,0,1,18.7,12.522c2,0,3.508,1.317,3.508,4.155V22.2Z"
                        transform="translate(-4.5 -4.5)"
                    />
                </svg>
            </div
            >
        </a>
        <a href="{{$gyoutube}}"
        >
            <div class="flex center sm transition3">
                <svg
                    class="transition3"
                    xmlns="http://www.w3.org/2000/svg"
                    width="22.635"
                    height="15.819"
                    viewBox="0 0 22.635 15.819"
                >
                    <path
                        id="Icon_simple-youtube"
                        data-name="Icon simple-youtube"
                        d="M22.17,7.867A2.837,2.837,0,0,0,20.2,5.9c-1.764-.473-8.865-.473-8.865-.473S4.252,5.415,2.47,5.9A2.837,2.837,0,0,0,.5,7.867a29.481,29.481,0,0,0-.493,5.477A29.481,29.481,0,0,0,.5,18.8a2.837,2.837,0,0,0,1.97,1.97c1.762.474,8.865.474,8.865.474s7.082,0,8.865-.474a2.837,2.837,0,0,0,1.97-1.97,29.481,29.481,0,0,0,.472-5.456A29.48,29.48,0,0,0,22.17,7.867Zm-13.1,8.865V9.945l5.91,3.4Z"
                        transform="translate(-0.007 -5.424)"
                    />
                </svg>
            </div
            >
        </a>
    </div>
</div>
@if(!request()->routeIs("client.home.index"))
    <section class="main_showcase">
        <div class="wrapper">
            <div class="overlay pad48">
                <div class="font50 white bold">
                    @if(str_contains(request()->path(),'blog'))
                        <p>@lang('client.news')</p>
                    @elseif(str_contains(request()->path(),'about'))
                        <p>@lang('client.about_us')</p>
                    @elseif(request()->routeIs('client.project.index'))
                        <p>@lang('client.sectors')</p>
                    @elseif(str_contains(request()->path(),'project'))
                        <p>@lang('client.projects')</p>
                    @elseif(str_contains(request()->path(),'team'))
                        <p>@lang('client.team')</p>
                    @elseif(str_contains(request()->path(),'contact'))
                        <p>@lang('client.contact')</p>
                    @endif
                </div>

                <div id="languages" class="white font18 transition3">
                    <div class="main transition3">{{app()->getLocale()}}</div>

                    <div class="dropdown transition3">
                        @foreach(config('translatable.locales') as $locale)
                            @if(app()->getLocale() != $locale)
                                <a href="{{ get_url($locale) }}">{{$locale}}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
