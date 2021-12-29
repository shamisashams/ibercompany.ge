@extends('client.layout.site')
@section('subhead')
    <title>{{ $teamPage->meta_title }}</title>
    <meta name="description"
          content="{{ $teamPage->meta_description }}">
    <meta name="keywords" content="{{ $teamPage->meta_keyword }}">
@endsection

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span> @lang('client.team')
            </div>
        </div>
    </section>
    <section class="our_team_page">
        <div class="wrapper pad48">
            <div class="heading">
                <div class="main-title short bold">@lang('client.out_team')</div>
                <div class="font18 light-text text-07">
                    @lang('client.team_description')
                </div>
            </div>
            <div class="title font50 bold dark-text">CEOS</div>
            <div class="font18 light-text text-07">Satisfied conveying an dependent contented he gentleman agreeable do be.</div>
            <div class="team_grid">
                <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/4.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/other/1.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/hero/2.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title font50 bold dark-text">Management</div>
            <div class="font18 light-text text-07">Satisfied conveying an dependent contented he gentleman agreeable do be.</div>
            <div class="team_grid">
            <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title font50 bold dark-text">Engineers</div>
            <div class="font18 light-text text-07">Satisfied conveying an dependent contented he gentleman agreeable do be.</div>
            <div class="team_grid">
            <div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><div class="team_member">
                    <div class="inner_div">
                        <div class="flip_card_front">
                            <div class="img">
                                <img
                                    src="/img/team/aa.png"
                                    alt=""/>
                            </div>
                            <div class="caption">
                                <div class="blue font20 bold">name surname</div>
                                <strong>position</strong>
                                <p>competition, color, camp</p>
                            </div>
                        </div>
                        <div class="flip_card_back">
                            <div class="img">
                                  <img
                                src="/img/team/ab.png"
                                alt=""/>
                            </div>
                            <div class="caption">
                                <div class="flex">
                                    <div class="blue font20 bold">name surname</div>
                                    <p>fishing, hiking</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">As a child he wanted to come out</div>
                                    <p>pilot</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Desired super power</div>
                                    <p>unlimited lifes</p>
                                </div>
                                <div class="flex">
                                    <div class="blue font20 bold">Favorite book / movie</div>
                                    <p>Dune</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
