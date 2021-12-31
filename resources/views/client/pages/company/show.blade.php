@extends('client.layout.site')
@section('subhead')
    <title>{{$company->meta_title}}</title>
    <meta name="description"
          content="{{ $company->meta_description }}">
    <meta name="keywords" content="{{ $company->meta_keyword }}">
@endsection

@section('wrapper')
    <section id="page_path">
        <div class="wrapper flex pp_wrapper pad48 font20">
            <div class="light-text">
                <a href="{{locale_route('client.home.index')}}">@lang('client.home')</a>
                <span>|</span> @lang('client.companies')
            </div>
        </div>
    </section>
    <section class="single_news single_project">
        <div class="wrapper pad48 flex">
            <div class="single_news_content">
                <div class="font25 bold dark-text uppercase">
                    {{$company->title}}
                </div>
                <div class="flex font18 light-text">
                    <p>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$company->created_at)->format('d.m.Y')}}</p>
                </div>
                <div class="light-text paragraph">
                    {!! $company->content_1 !!}
                </div>
                <section class="social_media companies">
                    <div class="wrapper pad48 flex">
                        @if($company->facebook_link)
                            <a href="{{$company->facebook_link}}">
                                <svg id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f"
                                     xmlns="http://www.w3.org/2000/svg" width="9.238" height="17.248" viewBox="0 0 9.238 17.248">
                                    <path id="Icon_awesome-facebook-f-2" data-name="Icon awesome-facebook-f"
                                          d="M10.242,9.7l.479-3.121h-3V4.555a1.561,1.561,0,0,1,1.76-1.686h1.362V.211A16.606,16.606,0,0,0,8.43,0C5.964,0,4.351,1.5,4.351,4.2V6.58H1.609V9.7H4.351v7.546H7.726V9.7Z"
                                          transform="translate(-1.609)" fill="#231f20"/>
                                </svg>
                            </a>
                        @endif

                        @if($company->linkedin_link)

                            <a href="{{$company->linkedin_link}}">
                                <svg id="Icon_ionic-logo-linkedin" data-name="Icon ionic-logo-linkedin"
                                     xmlns="http://www.w3.org/2000/svg" width="17.248" height="17.248" viewBox="0 0 17.248 17.248">
                                    <path id="Icon_ionic-logo-linkedin-2" data-name="Icon ionic-logo-linkedin"
                                          d="M20.369,4.5H5.974A1.407,1.407,0,0,0,4.5,5.843V20.27a1.518,1.518,0,0,0,1.474,1.478H20.365a1.441,1.441,0,0,0,1.384-1.478V5.843A1.323,1.323,0,0,0,20.369,4.5ZM9.847,18.877H7.375V11.194H9.847ZM8.7,10.026H8.678A1.268,1.268,0,0,1,7.375,8.7,1.276,1.276,0,0,1,8.71,7.375,1.273,1.273,0,0,1,10.031,8.7,1.276,1.276,0,0,1,8.7,10.026Zm10.181,8.851H16.406v-4.2c0-1.006-.359-1.694-1.254-1.694a1.352,1.352,0,0,0-1.267.912,1.664,1.664,0,0,0-.085.607v4.376H11.329V11.194H13.8v1.069a2.5,2.5,0,0,1,2.229-1.249c1.622,0,2.849,1.069,2.849,3.374v4.488Z"
                                          transform="translate(-4.5 -4.5)" fill="#231f20"/>
                                </svg>
                            </a>
                        @endif
                        @if($company->instagram_link)

                            <a href="{{$company->instagram_link}}">
                                <svg id="Icon_metro-instagram" data-name="Icon metro-instagram" xmlns="http://www.w3.org/2000/svg"
                                     width="16.414" height="16.413" viewBox="0 0 16.414 16.413">
                                    <path id="Icon_metro-instagram-2" data-name="Icon metro-instagram"
                                          d="M16.259,1.928H5.3A2.733,2.733,0,0,0,2.571,4.653V15.616A2.733,2.733,0,0,0,5.3,18.341H16.259a2.733,2.733,0,0,0,2.725-2.725V4.653A2.733,2.733,0,0,0,16.259,1.928ZM7.825,9.109H13.73a3.126,3.126,0,1,1-5.905,0Zm9.108,0v6.154a1.029,1.029,0,0,1-1.026,1.026H5.648a1.029,1.029,0,0,1-1.026-1.026V9.109h1.6a4.664,4.664,0,1,0,9.1,0h1.6Zm0-3.591a.514.514,0,0,1-.513.513H15.394a.514.514,0,0,1-.513-.513V4.493a.514.514,0,0,1,.513-.513H16.42a.514.514,0,0,1,.513.513Z"
                                          transform="translate(-2.571 -1.928)" fill="#231f20"/>
                                </svg>

                            </a>
                        @endif
                        @if($company->twitter_link)

                            <a href="{{$company->twitter_link}}">
                                <svg id="Icon_awesome-twitter" data-name="Icon awesome-twitter" xmlns="http://www.w3.org/2000/svg"
                                     width="20.21" height="16.413" viewBox="0 0 20.21 16.413">
                                    <path id="Icon_awesome-twitter-2" data-name="Icon awesome-twitter"
                                          d="M18.132,7.471c.013.18.013.359.013.539A11.7,11.7,0,0,1,6.36,19.794,11.7,11.7,0,0,1,0,17.935a8.569,8.569,0,0,0,1,.051,8.3,8.3,0,0,0,5.142-1.77A4.149,4.149,0,0,1,2.27,13.344a5.223,5.223,0,0,0,.782.064,4.381,4.381,0,0,0,1.09-.141A4.142,4.142,0,0,1,.821,9.2V9.151a4.171,4.171,0,0,0,1.872.526,4.148,4.148,0,0,1-1.282-5.54,11.773,11.773,0,0,0,8.54,4.334,4.675,4.675,0,0,1-.1-.949,4.146,4.146,0,0,1,7.168-2.834,8.155,8.155,0,0,0,2.629-1,4.131,4.131,0,0,1-1.821,2.282,8.3,8.3,0,0,0,2.385-.641,8.9,8.9,0,0,1-2.077,2.141Z"
                                          transform="translate(0 -3.381)" fill="#231f20"/>
                                </svg>

                            </a>
                        @endif
                        @if($company->pinterest_link)

                            <a href="{{$company->pinterest_link}}">
                                <svg id="Icon_awesome-pinterest-square" data-name="Icon awesome-pinterest-square"
                                     xmlns="http://www.w3.org/2000/svg" width="16.414" height="16.413" viewBox="0 0 16.414 16.413">
                                    <path id="Icon_awesome-pinterest-square-2" data-name="Icon awesome-pinterest-square"
                                          d="M16.414,4.009V16.9a1.759,1.759,0,0,1-1.759,1.759h-9a9.387,9.387,0,0,0,1-2.173c.11-.421.561-2.14.561-2.14a2.4,2.4,0,0,0,2.063,1.033c2.715,0,4.668-2.495,4.668-5.594A5.28,5.28,0,0,0,8.4,4.595c-3.884,0-5.943,2.6-5.943,5.444a4.037,4.037,0,0,0,1.825,3.484c.172.081.26.044.3-.121.029-.125.183-.736.249-1.019a.265.265,0,0,0-.062-.256,3.507,3.507,0,0,1-.67-2.052A3.894,3.894,0,0,1,8.167,6.17a3.553,3.553,0,0,1,3.759,3.66c0,2.433-1.227,4.118-2.828,4.118a1.308,1.308,0,0,1-1.334-1.627,18.18,18.18,0,0,0,.744-3c0-1.942-2.766-1.674-2.766.916a3.287,3.287,0,0,0,.267,1.337c-1.15,4.865-1.323,4.928-1.084,7.056L5,18.663H1.759A1.759,1.759,0,0,1,0,16.9V4.009A1.759,1.759,0,0,1,1.759,2.25h12.9A1.759,1.759,0,0,1,16.414,4.009Z"
                                          transform="translate(0 -2.25)" fill="#231f20"/>
                                </svg>

                            </a>
                        @endif

                        @if($company->youtube)
                            <a href="{{$company->youtube}}">
                                <svg id="Icon_simple-youtube" data-name="Icon simple-youtube" xmlns="http://www.w3.org/2000/svg"
                                     width="23.486" height="16.414" viewBox="0 0 23.486 16.414">
                                    <path id="Icon_simple-youtube-2" data-name="Icon simple-youtube"
                                          d="M23,7.958a2.944,2.944,0,0,0-2.044-2.044c-1.831-.49-9.2-.49-9.2-.49s-7.349-.01-9.2.49A2.944,2.944,0,0,0,.518,7.958a30.587,30.587,0,0,0-.511,5.683A30.587,30.587,0,0,0,.518,19.3a2.944,2.944,0,0,0,2.044,2.044c1.829.491,9.2.491,9.2.491s7.348,0,9.2-.491A2.944,2.944,0,0,0,23,19.3a30.587,30.587,0,0,0,.489-5.661A30.587,30.587,0,0,0,23,7.958Zm-13.594,9.2V10.115l6.132,3.526Z"
                                          transform="translate(-0.007 -5.424)" fill="#231f20"/>
                                </svg>
                            </a>
                        @endif
                    </div>
                </section>

                <a
                    href="{{locale_route('client.company.index')}}"
                    class="flex uppercase back"
                    style="color: #015aaa"
                >
                    <img class="transition3" src="/img/icons/news/3.png" alt=""/>
                    <div class="bold">@lang('client.back_to_companies')</div>
                </a>
            </div>
            <div class="other_news">
                <div class="font25 bold dark-text uppercase">@lang('client.company_photos')</div>
                <div class="project_grid">
                    @foreach($company->files as $file)
                        @if($file)
                            <div class="project_item">
                                <img class="bg"
                                     style="object-fit: contain"
                                     src="{{url($file->path.'/'.$file->title)}}"
                                     alt=""/>
                            </div>

                        @endif
                    @endforeach
{{--                    @foreach($otherProjects as $project)--}}
{{--                        <a href="{{locale_route('client.project.show',$project->slug)}}">--}}
{{--                            <div class="project_item">--}}
{{--                                @if($project->file)--}}
{{--                                    <img class="bg"--}}
{{--                                         src="{{url($project->file->path.'/'.$project->file->title)}}"--}}
{{--                                         alt=""/>--}}
{{--                                @endif--}}
{{--                                <div class="caption white transition3">--}}
{{--                                    <img src="/img/icons/projects/1.png" alt=""/>--}}
{{--                                    <div class="bold font20 uppercase">{{$project->title}}</div>--}}
{{--                                    <div class="text-07 font14">--}}
{{--                                        {{$project->description}}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
                        @if($company->youtube_link)
                            <div class="img video project_item_video bg">
                                <iframe
                                    src="https://www.youtube.com/embed/{{$company->youtube_link}}"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        @endif
                </div>
            </div>
        </div>

    </section>

@endsection

