 <!-- Section - Portfolio -->
<section id="section07" class="section bg-orange dark" data-header-change="true">

    <div class="masonry-grid no-padding">

        <!-- Masonry Sizer -->
        <div class="masonry-sizer"></div>

        @foreach($events as $event)
            <!-- Masonry Element -->
            <div class="masonry-item wide">
                <div class="gallery-item">
                    <div class="item-photo"><a href="projects/project-orange.html" data-target="ajax-modal"><img src="{{ $event->image }}" alt="" /></a></div>
                    <div class="item-hover bg-dark dark">
                        <div class="item-hover-content">
                            <h1>{{ $event->title }}</h1>
                            <a href="{{ url('/events/view') }}/{{ $event->id }}" class="btn btn-orange"><span>View Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <a href="{{ url('/past-events') }}"><h3 style="margin-top: 5px;" class="text-center">Past events <i class="fa fa-share"></i></h3></a>
</section>
<!-- Section - Portfolio / End -->