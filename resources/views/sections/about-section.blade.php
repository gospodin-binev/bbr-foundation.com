<!-- Section - About -->
    <section id="section02" class="section fullheight bg-green dark padding-v-100" data-header-change="true">
        
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($headings as $heading)
                        @if ($heading->id == 2)
                            <h1 class="margin-b-50">{!! $heading->heading !!}</h1>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- Carousel -->
            <div class="carousel pagination-center animated" data-items="3" data-items-desktop="[1199,3]" data-items-tablet="[979,2]" data-items-mobile="[400,1]" data-animation="fadeInUp" >
                @foreach($about_slider_objects as $about_slider_object)
                    <div class="icon-box">
                        <div class="icon icon-lg icon-square icon-green"><i class="{{ $about_slider_object->icon_type }}"></i></div>
                        <h3><strong>@if ($about_slider_object->number != 0) {{ $about_slider_object->number }} @endif</strong> {{ $about_slider_object->text }}</h3>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- Section - About / End -->