@if($paginator->hasPages())
    <section id="pagination">
        <div class="wrapper pagination flex center">
            @if ($paginator->onFirstPage())
                <a href="" onclick="return false;">
                    <button class="arrow left-arrow">
                        <img src="/img/icons/news/1.png" alt=""/>
                    </button>
                </a>
            @else

                <a href="{{ $paginator->previousPageUrl() }}">
                    <button class="arrow left-arrow">
                        <img src="/img/icons/news/1.png" alt=""/>
                    </button>
                </a>

            @endif
            {{--             Pagination Elements--}}
            @foreach ($elements as $element)
                {{--                 Array Of Links--}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a onclick="return false">
                                <button class="font20 bold dark-text num active">
                                    {{$page}}
                                </button>
                            </a>

                        @else
                            <a href="{{$url}}">
                                <button class="font20 bold dark-text num">
                                    {{$page}}
                                </button>
                            </a>

                        @endif
                    @endforeach
                @endif
            @endforeach
            {{--             Next Page Link--}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}">
                    <button class="arrow right-arrow">
                        <img src="/img/icons/news/2.png" alt=""/>
                    </button>
                </a>

            @else
                <a href="" onclick="return false;">
                    <button class="arrow right-arrow">
                        <img src="/img/icons/news/2.png" alt=""/>
                    </button>
                </a>
            @endif
        </div>
    </section>
@endif
{{--<div class="pagination flex center">--}}
{{--    <button><img src="/img/icons/arrows/3.png" alt=""/></button>--}}
{{--    <button class="page_num active">1</button>--}}
{{--    <button class="page_num">2</button>--}}
{{--    <button class="page_num">3</button>--}}
{{--    <button class="page_num">4</button>--}}
{{--    <button><img src="/img/icons/arrows/4.png" alt=""/></button>--}}
{{--</div>--}}


