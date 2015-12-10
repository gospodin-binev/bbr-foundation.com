<!-- Section - Team -->
    <section id="section08" class="section fullheight bg-red dark padding-v-100" data-header-change="true">
        
        <div class="section-content container v-center">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($headings as $heading)
                        @if ($heading->id == 7)
                            <h1 class="margin-b-60">{!! $heading->heading !!}</h1>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row text-center">
                @foreach ($team as $person)
                    <!-- Member -->
                    <div class="col-sm-3 col-xs-6">
                        <div class="member-box margin-b-30">
                            <div class="member-photo margin-b-10"><img class="square" src="{{ $person->image }}" alt="" /></div>
                            <h6 class="margin-b-0">{{ $person->name }}</h6>
                            <strong class="text-sm text-dark">{{ $person->position }}</strong>
                        </div>
                    </div>
                @endforeach 
            </div>

    </section>
    <!-- Section - Team / End -->