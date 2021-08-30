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
            <div class="team_grid">
                @foreach($members as $member)
                    <a href="{{locale_route('client.team.show',$member->id)}}">
                        <div class="team_member img">
                            @if($member->file)
                                <img
                                    src="{{url($member->file->path.'/'.$member->file->title)}}"
                                    alt=""/>
                            @endif
                            <div class="caption white transition5">
                                <div class="font20 bold transition5 uppercase name">
                                    {{$member->name}}
                                </div>
                                <div class="text-07 font14">{{$member->position}}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
