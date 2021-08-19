@extends('client.layout.site')
@section('subhead')
    <title>{{ $page->meta_title }}</title>
    <meta name="description"
          content="{{ $page->meta_description }}">
@endsection

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a> <span>|</span> @lang('client.contact')
            </div>
        </div>
    </section>
    <section class="contact_page">
        <div class="wrapper">
            <div class="main-title uppercase bold">@lang('client.find_us_on_map')</div>
            <div class="map video">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23819.48446076078!2d44.770252800061066!3d41.732697262578945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sge!4v1628857076363!5m2!1sen!2sge"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                ></iframe>
            </div>
            <div class="flex center">
                <div class="info">
                    <a href="#" class="each_info">
                        <div class="flex center main-border cube transition3">
                            <svg
                                class="main transition3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="10.963"
                                height="15.661"
                                viewBox="0 0 10.963 15.661"
                            >
                                <path
                                    id="Icon_material-location-on"
                                    data-name="Icon material-location-on"
                                    d="M12.981,3A5.477,5.477,0,0,0,7.5,8.481c0,4.111,5.481,10.18,5.481,10.18s5.481-6.069,5.481-10.18A5.477,5.477,0,0,0,12.981,3Zm0,7.439a1.958,1.958,0,1,1,1.958-1.958A1.958,1.958,0,0,1,12.981,10.439Z"
                                    transform="translate(-7.5 -3)"
                                />
                            </svg>
                            <svg
                                class="second transition3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="10.963"
                                height="15.661"
                                viewBox="0 0 10.963 15.661"
                            >
                                <path
                                    id="Icon_material-location-on"
                                    data-name="Icon material-location-on"
                                    d="M12.981,3A5.477,5.477,0,0,0,7.5,8.481c0,4.111,5.481,10.18,5.481,10.18s5.481-6.069,5.481-10.18A5.477,5.477,0,0,0,12.981,3Zm0,7.439a1.958,1.958,0,1,1,1.958-1.958A1.958,1.958,0,0,1,12.981,10.439Z"
                                    transform="translate(-7.5 -3)"
                                />
                            </svg>
                        </div>
                        <div class="dark-text">@lang('client.head_office_address'):</div>
                        <div class="light-text font20 transition3">
                            {{$gaddress}}
                        </div>
                    </a>

                    <a href="#" class="each_info">
                        <div class="flex center main-border cube transition3">
                            <svg
                                class="main transition3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="15.297"
                                height="15.297"
                                viewBox="0 0 15.297 15.297"
                            >
                                <path
                                    id="Icon_awesome-phone-alt"
                                    data-name="Icon awesome-phone-alt"
                                    d="M14.861,10.81,11.514,9.376a.717.717,0,0,0-.837.206L9.2,11.392A11.074,11.074,0,0,1,3.9,6.1L5.712,4.617a.715.715,0,0,0,.206-.837L4.485.434A.722.722,0,0,0,3.663.018L.556.736a.717.717,0,0,0-.556.7A13.861,13.861,0,0,0,13.863,15.3a.717.717,0,0,0,.7-.556l.717-3.107A.726.726,0,0,0,14.861,10.81Z"
                                    transform="translate(0 0)"
                                />
                            </svg>
                            <svg
                                class="second transition3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="15.297"
                                height="15.297"
                                viewBox="0 0 15.297 15.297"
                            >
                                <path
                                    id="Icon_awesome-phone-alt"
                                    data-name="Icon awesome-phone-alt"
                                    d="M14.861,10.81,11.514,9.376a.717.717,0,0,0-.837.206L9.2,11.392A11.074,11.074,0,0,1,3.9,6.1L5.712,4.617a.715.715,0,0,0,.206-.837L4.485.434A.722.722,0,0,0,3.663.018L.556.736a.717.717,0,0,0-.556.7A13.861,13.861,0,0,0,13.863,15.3a.717.717,0,0,0,.7-.556l.717-3.107A.726.726,0,0,0,14.861,10.81Z"
                                    transform="translate(0 0)"
                                />
                            </svg>
                        </div>
                        <div class="dark-text">@lang('client.call_for_help'):</div>
                        <div class="light-text font20 transition3">{{$gphone}}</div>
                    </a
                    >

                    <a href="#" class="each_info">
                        <div class="flex center main-border cube transition3">
                            <svg
                                class="main transition3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="19.163"
                                height="15.331"
                                viewBox="0 0 19.163 15.331"
                            >
                                <path
                                    id="Icon_material-email"
                                    data-name="Icon material-email"
                                    d="M20.247,6H4.916A1.914,1.914,0,0,0,3.01,7.916L3,19.414a1.922,1.922,0,0,0,1.916,1.916H20.247a1.922,1.922,0,0,0,1.916-1.916V7.916A1.922,1.922,0,0,0,20.247,6Zm0,3.833-7.665,4.791L4.916,9.833V7.916l7.665,4.791,7.665-4.791Z"
                                    transform="translate(-3 -6)"
                                />
                            </svg>
                            <svg
                                class="second transition3"
                                xmlns="http://www.w3.org/2000/svg"
                                width="19.163"
                                height="15.331"
                                viewBox="0 0 19.163 15.331"
                            >
                                <path
                                    id="Icon_material-email"
                                    data-name="Icon material-email"
                                    d="M20.247,6H4.916A1.914,1.914,0,0,0,3.01,7.916L3,19.414a1.922,1.922,0,0,0,1.916,1.916H20.247a1.922,1.922,0,0,0,1.916-1.916V7.916A1.922,1.922,0,0,0,20.247,6Zm0,3.833-7.665,4.791L4.916,9.833V7.916l7.665,4.791,7.665-4.791Z"
                                    transform="translate(-3 -6)"
                                />
                            </svg>
                        </div>
                        <div class="dark-text">@lang('client.mail_for_information'):</div>
                        <div class="light-text font20 transition3">
                            {{$gemail}}
                        </div>
                    </a
                    >
                </div>
                <form method="POST" action="{{locale_route('client.contact.mail')}}" class="form">
                    @csrf
                    <div class="main-title uppercase bold">@lang('client.write_to_us')</div>
                    <input
                        class="main-border font20"
                        type="text"
                        name="name"
                        required
                        placeholder="@lang('client.enter_name')"
                    />

                    <input
                        class="main-border font20"
                        type="email"
                        required
                        placeholder="@lang('client.enter_email')"
                        name="mail"
                    />
                    <input
                        class="main-border font20"
                        type="text"
                        required
                        placeholder="@lang('client.enter_number')"
                        name="phone"
                    />
                    <textarea
                        class="main-border font20"
                        type="text"
                        placeholder="@lang('client.enter_message')"
                        name="message"
                        required
                    ></textarea>
                    <button class="main-button main-border bold">@lang('client.send_message')</button>
                </form>
            </div>
        </div>
    </section>
    {{--            <form method="POST" action="{{locale_route('client.contact.mail')}}" class="column form">--}}
    {{--                @csrf--}}
    {{--                <div class="title">@lang("client.message_us")</div>--}}
    {{--                <input type="text" name="name" placeholder=@lang("client.name") />--}}
    {{--                <input type="text" name="mail" placeholder=@lang("client.mail") />--}}
    {{--                <input type="text" name="phone" placeholder=@lang("client.phone") />--}}
    {{--                <textarea name="message" placeholder=@lang("client.message")></textarea>--}}
    {{--                <button class="main_button send">@lang("client.send")</button>--}}
    {{--            </form>--}}
    {{--            <div class="column">--}}
    {{--                <div class="title">@lang("client.find_us_on_map")</div>--}}
    {{--                <div class="map">--}}
    {{--                    <iframe--}}
    {{--                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.6381332197816!2d44.77072996844081!3d41.728326822196486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472ddadc78fb3%3A0x9f529d5044be3023!2sZhiuli%20Shartava%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1627476895632!5m2!1sen!2sge"--}}
    {{--                        width="600"--}}
    {{--                        height="450"--}}
    {{--                        style="border: 0"--}}
    {{--                        allowfullscreen=""--}}
    {{--                        loading="lazy"--}}
    {{--                    ></iframe>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection

