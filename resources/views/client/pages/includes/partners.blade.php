<section id="partners" class="{{$class}}">
    <div class="wrapper">
        <div id="partners_slider" class="flex">
            @foreach($companies as $company)
                <a href="{{locale_route('client.company.show',$company->slug)}}"
                   class="slide flex center partner_slide_item">
                    @if(count($company->files)>0)
                        <img
                            src="{{url($company->files[0]->path.'/'.$company->files[0]->title)}}"
                            alt=""/>
                    @endif
                    <div>
                        <div class="bold font20 dark-text uppercase">
                            {{$company->title}}
                        </div>
                    <!-- <div class="font14 light-text text-07">
                            {{$company->description}}
                        </div> -->
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
