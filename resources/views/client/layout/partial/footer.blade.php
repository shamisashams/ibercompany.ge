<footer id="footer" class="white">
    <div class="wrapper pad80 flex">
        <div class="column">
            <a href="{{locale_route('client.home.index')}}">
                <div class="logo">
                    <img src="/img/logo/2.png" alt=""/>
                </div>
            </a>
            <div class="flex font18">
                <img src="/img/icons/footer/1.png" alt=""/>
                <div>
                    {{$gaddress}}
                </div>
            </div>
            <div class="flex font18">
                <img src="/img/icons/footer/2.png" alt=""/>
                <div>{{$gphone}}</div>
            </div>
            <div class="bold font20">
                {{-- Working hours --}}
                @lang('client.working_hours')
            </div>
            <div class="flex font18">
                <img src="/img/icons/footer/3.png" alt=""/>
                <div>
                   {{$gworkingHours}}
                </div>
            </div>
        </div>
        <div class="column">
            <!-- <div class="title flex">
                <div class="bold">@lang('client.links')</div>
                <span></span>
            </div> -->
            <a href="{{locale_route('client.project.index')}}" class="nav font20 transition3">@lang('client.projects')</a>
            <a href="{{locale_route('client.blog.index')}}" class="nav font20 transition3">@lang('client.news')</a>
            <a href="{{locale_route('client.about.index')}}" class="nav font20 transition3">@lang('client.about_us')</a>
            <a href="{{locale_route('client.team.index')}}" class="nav font20 transition3">@lang('client.team')</a>
            <a href="{{locale_route('client.contact.index')}}" class="nav font20 transition3">@lang('client.contact')</a>
        </div>
        <div class="column">
            <!-- <div class="title flex">
                <div class="bold">@lang('client.newsletter')</div>
                <span></span>
            </div> -->
            <div class="text-07 font20">
                @lang('client.subscribe_to_gel')
            </div>
            <form action="{{ locale_route('client.sendsub')}}" method="post">
            <div class="flex email">
                @csrf

                @method('POST')
                <input
                    class="font20 main-border white transition3"
                    type="email"
                    name="email"
                    required
                    placeholder="@lang('client.enter_email')"
                />

                <button class="send flex center transition3">
                    <img src="/img/icons/footer/4.png" alt=""/>
                </button>
            </div>
        </form>
            <div class="flex sm">
                <a href="{{$gfacebook}}"
                >
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
                </a>
                <a href="{{$ginstagram}}"
                >
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
                </a>
                <a href="{{$gyoutube}}"
                >
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
                </a>
            </div>
        </div>
        <div class="column">
            <!-- <div class="title flex">
                <div class="bold">@lang('client.map')</div>
                <span></span>
            </div> -->
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23819.48446076078!2d44.770252800061066!3d41.732697262578945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sge!4v1628857076363!5m2!1sen!2sge"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                ></iframe>
            </div>
        </div>
    </div>
    <div class="insite flex center">
        <div class="bold font20">Designed by</div>
        <img src="/img/insite/1.png" alt=""/>
    </div>
</footer>
