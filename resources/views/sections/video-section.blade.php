<!-- Section - Video  -->
    <section id="section05" class="section fullheight bg-blue-dark dark padding-v-100">

        <!-- BG Image -->
        <div class="bg-image"><img @foreach($images as $image) @if ($image->id == 3) src="{{ $image->image }}" @endif @endforeach alt=""></div>
        
        <div class="section-content container text-center v-center">
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    @foreach ($headings as $heading)
                        @if ($heading->id == 5)
                            <h1 class="margin-b-50">{!! $heading->heading !!}</h1>
                        @endif
                    @endforeach
                    <a href="#" class="icon icon-lg icon-square icon-blue-dark icon-hover animated-hover"  data-hover-animation="shake" data-hover-animation-duration="600" data-toggle="modal" data-target="#videoModal"><i class="fa fa-play"></i></a>
                </div>
            </div>

        </div>

    </section>
    <!-- Section - Video / End -->

    <!-- Section - Default -->
    <section id="section06" class="section fullheight bg-green dark padding-v-100" data-header-change="true">
        
        <div class="section-content container v-center">
            <div class="row v-center-items">
                <div class="col-md-6 margin-b-40">
                    @foreach($headings as $heading)
                        @if ($heading->id == 6)
                            <h1>{!! $heading->heading !!}</h1>
                        @endif
                    @endforeach
                    @foreach($headings as $heading)
                        @if ($heading->id == 14)
                            <p class="lead">{!! $heading->heading !!}</p>
                        @endif
                    @endforeach
                    <span data-target="local-scroll"><a href="#section09" class="btn btn-default"><span>Become a member!</span></a></span>
                </div>
                <div class="col-md-6">
                    <div class="gallery-item">
                        <div class="item-photo"><img @foreach($images as $image) @if ($image->id == 4) src="{{ $image->image }}" @endif @endforeach alt="" /></div>
                        <div class="item-container">
                            <div class="item-content text-center"><a href="#section09" class="icon icon-square icon-hover icon-dark icon-lg animated-hover" data-hover-animation="shake" data-hover-animation-duration="600" data-toggle="modal" data-target="#videoModalGreen"><i class="fa fa-play"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section - Default / End -->