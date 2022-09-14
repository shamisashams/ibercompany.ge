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
            @foreach($professions as $profession)
                <div class="title font50 bold">{{ $profession->title }}</div>
                <div class="font18 light-text text-07"> {!! $profession->description !!}
                </div>
                {{--                @if($profession->team)--}}
                <div class="team_grid">
                    @foreach($profession->team as $member)
                        <div class="team_member">
                            <div class="inner_div">
                                <div class="flip_card_front">
                                    @if(count($member->files)>0)
                                        <div class="img">
                                            <img
                                                src="{{url($member->files[0]->path.'/'.$member->files[0]->title)}}"
                                                alt=""/>
                                        </div>
                                    @endif
                                    <div class="caption">
                                        <div class="blue font20 bold">{{ $member->name }}</div>
                                        <strong>{{ $member->position }}</strong>
                                        <p>{{ $member->content }}</p>
                                    </div>
                                </div>
                                <div class="flip_card_back">
                                    @if(count($member->files)>1)
                                        <div class="img">
                                            <img
                                                src="{{url($member->files[1]->path.'/'.$member->files[1]->title)}}"
                                                alt=""/>
                                        </div>
                                    @elseif(count($member->files)>0)
                                        <div class="img">
                                            <img
                                                src="{{url($member->files[0]->path.'/'.$member->files[0]->title)}}"
                                                alt=""/>
                                        </div>
                                    @endif
                                    <div class="caption">
                                        <div class="flex">
                                            <div class="blue font20 bold">@lang('client.childhood')</div>
                                            <p>{{ $member->childhood }}</p>
                                        </div>
                                        @if($member->hobby)
                                            <div class="flex">
                                                <div class="blue font20 bold">@lang('client.hobby')</div>
                                                <p>{{ $member->hobby }}</p>
                                            </div>
                                        @endif
                                        @if($member->super_power)
                                            <div class="flex">
                                                <div class="blue font20 bold">@lang('client.super_power')</div>
                                                <p>{{ $member->super_power }}</p>
                                            </div>
                                        @endif
                                        @if($member->favorite)
                                            <div class="flex">
                                                <div class="blue font20 bold">@lang('client.favorite')</div>
                                                <p>{{ $member->favorite }}</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--                @endif--}}
            @endforeach
        </div>
    </section>

@endsection
