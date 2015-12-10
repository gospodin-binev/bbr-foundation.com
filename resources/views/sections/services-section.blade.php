<!-- Section - Double -->
    <section id="section03" class="section section-double left fullheight bg-orange dark" data-header-change="true">
        
        <div class="col-md-6 image">
            <div class="bg-image"><img @foreach($images as $image) @if ($image->id == 2) src="{{ $image->image }}" @endif @endforeach alt=""></div>
        </div>
        <div class="col-md-6 content margin-b-50">
            @foreach ($headings as $heading)
                @if ($heading->id == 3)
                    <h1 class="margin-b-20">{!! $heading->heading !!}</h1>
                @endif
            @endforeach
            <ul class="list-check padding-l-0">
                @foreach ($solutions as $solution)
                    <li class="animated" data-animation="fadeInRight" data-animation-delay="100">{{$solution->text}}</li>
                @endforeach 
            </ul>
            <span data-target="local-scroll"><a href="#section04" class="btn btn-default"><span>Check the services!</span></a></span>
        </div>

    </section>
    <!-- Section - Double / End -->

    <!-- Section - Services -->
    <section id="section04" class="section fullheight bg-red dark padding-v-100" data-header-change="true">
        
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($headings as $heading)
                        @if ($heading->id == 4)
                            <h1 class="margin-b-60">{!! $heading->heading !!}</h1>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- Services -->
            <div class="row">
            
                @foreach ($services as $service)
                    <div class="col-lg-2 col-md-4 col-sm-6 service-box animated" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="icon icon-sm"><i class="{{ $service->icon_type }}"></i></div>
                        <h3>{!! $service->title !!}</h3>
                        <ul class="list-check padding-l-0">
                            {!! $service->content !!}
                        </ul>
                    </div>
                @endforeach
                
            </div>
        </div>

    </section>
    <!-- Section - Services / End -->