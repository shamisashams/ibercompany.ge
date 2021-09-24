@extends('client.layout.main')

@section('head')
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>


    <link rel="stylesheet" href="{{ asset("client/style.css") }}"/>
    @if(app()->getLocale()=="ge")
        <link rel="stylesheet" href="{{ asset("client/style-ge.css") }}"/>
    @endif
    
    @yield('subhead')
@endsection

@section('content')
    {{--    @yield("div_open")--}}
    @include('client.layout.partial.header')
    {{--    @yield("div_close")--}}

    @yield('wrapper')

    @include('client.layout.partial.footer')
    <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


    <script src="{{ asset("client/general.js") }}"></script>
    <script src="{{ asset("client/slide.js") }}"></script>
@endsection

