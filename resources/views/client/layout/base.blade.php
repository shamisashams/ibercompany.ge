<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <title>@yield("meta_title", "Glass Service")</title>--}}
{{--    <meta name="description"--}}
{{--          content="@yield("meta_description", "glass service description")">--}}
{{--    <meta name="keywords" content="@yield("meta_keywords", "glass service keywords")">--}}
    @yield('head')

</head>
<body>
@yield('body')
</body>
</html>
