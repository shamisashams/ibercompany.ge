<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
{{--    <title>@yield("meta_title", "Glass Service")</title>--}}
{{--    <meta name="description"--}}
{{--          content="@yield("meta_description", "glass service description")">--}}
{{--    <meta name="keywords" content="@yield("meta_keywords", "glass service keywords")">--}}
    @yield('head')

</head>
<body>
<!-- <div class="cssload-preloader">
  <div class="cssload-preloader-box">
    <div>L</div>
    <div>o</div>
    <div>a</div>
    <div>d</div>
    <div>i</div>
    <div>n</div>
    <div>g</div>
  </div>
</div> -->

@yield('body')



<script>
    window.addEventListener("load", function(){
	var loader = document.querySelector(".cssload-preloader")
	loader.className += " hidden";
    loader.style.pointerEvents = 'none';
	// changecolor.style.display = "none";
	// loader.style.display = "none";
	// loader.style.display = "none";
});
</script>
</body>
</html>
