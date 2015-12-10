<!-- Page Wrapper -->
<div id="page-wrapper" data-scroll-easing="easeOutBack">

    <!-- Section - Home -->
    <section id="section01" class="section fullheight bg-blue-dark dark padding-v-100">

        <!-- BG Image -->
        <div class="bg-image"><img @foreach($images as $image) @if ($image->id == 1) src="{{ $image->image }}" @endif @endforeach alt=""></div>

        <div class="container v-center">
            @foreach ($headings as $heading)
                @if ($heading->id == 1)
                    <h1 class="margin-b-20">{!! $heading->heading !!}</h1>
                @endif
            @endforeach
            <!-- Roll Down -->
            <span data-target="local-scroll"><a href="#section02"><span class="roll-down"></span></a></span>
        </div>
        
    </section>
    <!-- Section - Home / End -->