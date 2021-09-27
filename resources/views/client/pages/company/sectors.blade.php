@extends('client.layout.site')
@section('subhead')
    <title>{{ $companyPage->meta_title }}</title>
    <meta name="description"
          content="{{ $companyPage->meta_description }}">
    <meta name="keywords" content="{{ $companyPage->meta_keyword }}">
@endsection

@section('wrapper')

    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a> <span>|</span> @lang('client.sectors')
            </div>
        </div>
    </section>
    <section class="projects_page">
        <div class="wrapper pad48">
            <div class="project_grid">
                @foreach($companies as $company)
                    <a href="{{locale_route('client.company.show',$company->slug)}}">
                        <div class="project_item">
                            @if($company->file)
                                <img class="bg" style="object-fit: contain" src="{{url($company->file->path.'/'.$company->file->title)}}" alt=""/>
                            @endif
                            <div class="caption white transition3">
                                <img src="/img/icons/projects/1.png" alt=""/>
                                <div class="bold font20 uppercase">{{$company->title}}</div>
                                <div class="text-07 font14">
                                    {{$company->description}}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            </div>
        </div>
    </section>
@endsection
