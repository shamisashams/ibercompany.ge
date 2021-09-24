@extends('client.layout.site')
@section('subhead')
    <title>{{ $page->meta_title }}</title>
    <meta name="description"
          content="{{ $page->meta_description }}">
    <meta name="keywords" content="{{ $page->meta_keyword }}">
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
            <div class="main-title uppercase bold ">Be in touch</div>
            <div class="title uppercase bold font25">Contact info</div>
            <div class="font18 para">Satisfied conveying an dependent contented he gentleman agreeable do be. Warrant private blushes removed an in equally totally if. Delivered dejection </div>
            <div class="info flex center">
                <div class="info_item">
                    <img src="/img/icons/contact/1.png" alt="">
                    <div class="font18">Call us</div>
                    <div class="font20">+995 0 32 2 444 777</div>
                </div>
                <div class="border"></div>
                <div class="info_item">
                    <img src="/img/icons/contact/2.png" alt="">
                    <div class="font18">Chat with us</div>
                    <div class="font20">info@ibercompany.com</div>
                </div>
                <div class="border"></div>
                <div class="info_item">
                    <img src="/img/icons/contact/3.png" alt="">
                    <div class="font18">Visit us</div>
                    <div class="font20">30 Commercial Road. <br>
                        Tbilisi, Georgia</div>
                </div>
                <div class="border"></div>
                <div class="info_item">
                    <img src="/img/icons/contact/4.png" alt="">
                    <div class="font18">Working Hours</div>
                    <div class="font20">Mon - Fri: 09:00 - 18:00 <br>
                        Sat, Sun: closed</div>
                </div>
            </div>
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
                
                <form method="POST" action="{{locale_route('client.contact.mail')}}" class="form">
                    @csrf
                    <div class="font25 uppercase bold title">Send us a message</div>
                    <div class="font18 para">We are always happy to talk with you. Be sure to write to us if you have any questions or need help and support.</div>
                    <div class="grid">
                        <input
                        class=" font18"
                        type="text"
                        name="name"
                        required
                        placeholder="@lang('client.enter_name')"
                    />
                        <input
                        class=" font18"
                        type="text"
                        name="name"
                        required
                        placeholder="@lang('client.enter_name')"
                    />

                    <input
                        class=" font18"
                        type="email"
                        required
                        placeholder="@lang('client.enter_email')"
                        name="mail"
                    />
                    <input
                        class=" font18"
                        type="text"
                        required
                        placeholder="@lang('client.enter_number')"
                        name="phone"
                    />
                    </div>
                    
                    <textarea
                        class=" font18"
                        type="text"
                        placeholder="@lang('client.enter_message')"
                        name="message"
                        required
                    ></textarea>
                    <button class="main-button  bold">@lang('client.send_message')</button>
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

