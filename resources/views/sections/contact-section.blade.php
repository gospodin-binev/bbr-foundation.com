<!-- Section - Contact -->

    <section id="section09" class="section fullheight bg-blue-dark dark padding-v-100" data-header-change="true">

        

        <div class="section-content container v-center">

            <div class="row">

                <div class="col-lg-8">

                    <img class="square margin-b-20" src="assets/img/members/member01.jpg" alt="" />

                    @foreach ($headings as $heading)

                        @if ($heading->id == 8)

                            <h1 class="margin-b-60">{!! $heading->heading !!}</h1>

                        @endif

                    @endforeach

                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="text-center">Choose your package:</h1>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-3" style="border-right: 1px solid #FFF;">

                    <h3>Basic:</h3>



                    <ul>

                        <li>Participation in the forum</li>

                        <li>Right to participate in the activities of the Foundation and media</li>

                    </ul>



                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated" data-animation="bounceIn" data-animation-delay="100" data-toggle="modal" data-target="#basicPackage"><i class="ti-plus"></i></a>

                    <div class="margin-b-30">

                    </div>

                </div>

                <div class="col-lg-3" style="border-right: 1px solid #FFF;">

                    <h3>Silver £ 10 per month:</h3>



                    <ul>

                        <li>Participation in the forum</li>

                        <li>Right to participate in the activities of the Foundation and media</li>

                        <li>10% discount on BBR events</li>

                    </ul>



                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated" data-animation="bounceIn" data-animation-delay="100" data-toggle="modal" data-target="#silverPackage"><i class="ti-plus"></i></a>

                    <div class="margin-b-30">

                    </div>

                </div>

                <div class="col-lg-3" style="border-right: 1px solid #FFF;">

                    <h3>Gold £ 15 per month:</h3>



                    <ul>

                        <li>Participation in the forum</li>

                        <li>Right to participate in the activities of the Foundation and media</li>

                        <li>15% discount on BBR events</li>

                        <li>Participate  in BBR TV media</li>

                        <li>The right to own  your own show within the BBR TV media</li>

                    </ul>



                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated" data-animation="bounceIn" data-animation-delay="100" data-toggle="modal" data-target="#goldPackage"><i class="ti-plus"></i></a>

                    <div class="margin-b-30">

                    </div>

                </div>

                <div class="col-lg-3">

                    <h3>Platinum £ 20 per month:</h3>



                    <ul>

                        <li>Participation in the forum</li>

                        <li>Right to participate in the activities of the Foundation and media</li>

                        <li>15% discount on BBR events</li>

                        <li>Participate  in BBR TV media</li>

                        <li>The right to own  your own show within the BBR TV media</li>

                        <li>One free advertising online and television when purchasing package</li>

                        <li>Invitation to the annual VIP party</li>

                    </ul>



                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated" data-animation="bounceIn" data-animation-delay="100" data-toggle="modal" data-target="#platiniumPackage"><i class="ti-plus"></i></a>

                    <div class="margin-b-30">

                    </div>

                </div>

            </div>



            <hr>



            <div class="row">

                <div class="col-md-3 col-sm-6">

                    <a href="#" class="icon icon-sm icon-square icon-blue-dark icon-hover animated" data-animation="bounceIn" data-toggle="modal" data-target="#mapModal"><i class="fa fa-map-marker"></i></a>

                    <address>

                        {!! $firstContact->heading !!}

                    </address>

                </div>

                

                <div class="col-md-3 col-sm-6">

                    <span class="icon icon-sm icon-square icon-blue-dark"><i class="fa fa-phone"></i></span>

                    <div class="margin-b-30">

                        {!! $thirdContact->heading !!}

                    </div>

                </div>

            </div>



        </div>



    </section>

    <!-- Section - Contact / End -->