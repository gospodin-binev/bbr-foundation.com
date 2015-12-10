<footer id="footer" class="bg-blue-dark padding-v-40 dark text-center">
        <div class="section-content copyright margin-b-20">
           ©<strong>BBR Foundation</strong> 2015. This website is made possible by <a target="_blank" href="http://www.drago.me"><strong>Drago.me</strong> </a> & <a target="_blank" href="http://www.binev.eu"><strong>Binev.eu</strong> </a>
        </div>
        <span data-target="local-scroll"><a href="#section01" class="back-to-top"><i class="fa fa-chevron-up"></i></a></span>
    </footer>

</div>
<!-- Page Wrapper / End -->

<!-- Mobile Navigation -->
<nav id="mobile-nav" class="bg-blue-dark dark">
    <div class="mobile-nav-wrapper">
        <nav>
            <ul class="nav nav-side">
                <li>
                    <a href="#section01"><span>Home</span></a>
                </li>
                <li>
                    <a href="#section02"><span>About BBR</span></a>
                </li>
                <li>
                    <a href="#section04"><span>Services</span></a>
                </li>
                <li>
                    <a href="#section07"><span>Еvents</span></a>
                </li>
                <li>
                    <a href="#section08"><span>Team</span></a>
                </li>
                <li>
                    <a href="/blog"><span>News</span></a>
                </li>
                <li>
                    <a href="#section09"><span>Join us</span></a>
                </li>
            </ul>
        </nav>
    </div>
    <a href="#" class="mobile-nav-close" data-target="mobile-nav"><i class="fa fa-times"></i></a>
</nav>

<!-- Ajax Wrapper -->
<div id="ajax-modal"></div>
<!-- Ajax Loader -->
<div id="ajax-loader"><i class="fa fa-circle-o-notch fa-spin"></i></div>

<!-- Modal - Video -->
<div class="modal fade modal-green" id="videoModalGreen" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog" role="document">
    <iframe height="400" src="{{ $last_activity_video->heading }}" style="width: 100%" allowfullscreen></iframe>
  </div>
</div>

<!-- Modal - Video -->
<div class="modal fade modal-blue-dark" id="videoModal" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog" role="document">
    <iframe height="400" src="{{ $presentative_video->heading }}" style="width: 100%" allowfullscreen></iframe>
  </div>
</div>

<!-- Modal - example Package -->
<div class="modal fade modal-blue-dark" id="examplePackage" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">Become a part of us! I will response as soon as possible!</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <form id="contact-form">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Surname:</label>
                    <input id="surname" class="form-control" type="text" name="surname">
                </div>
                <div class="col-md-6 form-group">
                    <label>Forename:</label>
                    <input id="forename" class="form-control" type="text" name="forename">
                </div>
            </div>
            <div class="form-group">
                <label>E-mail address:</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input id="phone" class="form-control" type="text" name="phone">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input id="address" class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input id="birthday" class="form-control" type="text" name="birthday">
            </div>
            <div class="form-group">
                <label>Where did you hear about us?</label>
                <input id="hearaboutus" class="form-control" type="text" name="hearaboutus">
            </div>
            <div class="form-group">
                <label>Why did you want to become a member of the association?</label>
                <input id="becomemember" class="form-control" type="text" name="becomemember">
            </div>
            <label>What will make you feel useful?</label>
            <select class="form-control" id="feeluseful" name="feeluseful">
              <option value="Morally, by disseminating ideas of the association">Morally, by disseminating ideas of the association</option>
              <option value="Practice by participating in events and initiatives">Practice by participating in events and initiatives</option>
              <option value="Professional, particularly through education and experience">Professional, particularly through education and experience</option>
              <option value="Financial by providing or collecting funds">Financial by providing or collecting funds</option>
              <option value="In another way (describe in the comments box)">In another way (describe in the comments box)</option>
            </select>

            <br>

            <label>I agree with the information from this form to be considered and processed in connection with my application for membership</label>
            <select class="form-control" id="agreeornot" name="agreeornot">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <br>

            <label>I want to subscribe to my email address</label>
            <select class="form-control" id="subscribe" name="subscribe">
                <option value="Regular newsletter of the association (once a month)">Regular newsletter of the association (once a month)</option>
                <option value="Exceptional newsletters of the Association">Exceptional newsletters of the Association</option>
                <option value="Information about new publications on the site">Information about new publications on the site</option>
            </select>

            <br>

            <label>Selected package</label>
            <select class="form-control" id="package" name="package">
                <option value="Basic">Basic</option>
                <option selected value="Silver £ 10 per month">Silver £ 10 per month</option>
                <option value="Gold £ 15 per month">Gold £ 15 per month</option>
                <option value="Platinum £ 20 per month">Platinum £ 20 per month</option>
            </select>

            <br>

            <label>Method of payment</label>
            <select class="form-control" id="payment" name="payment">
                <option value="Monthly / standing order /">Monthly / standing order /</option>
                <option value="Annual 5% discount">Annual 5% discount</option>
            </select>

            <br>

            <div class="text-right">
                <button type="submit" class="btn btn-orange btn-filled"><span>Send a message!</span></button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal - Basic Package -->
<div class="modal fade modal-blue-dark" id="basicPackage" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">Become a member and be part of us! Together we are stronger!</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <form method="post" action="{{ url('/email-send') }}" id="contact-form" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @if ($errors)
                <span style="color: red;" class="help-block">All fields required.</span>
            @endif

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Surname:</label>
                    <input id="surname" class="form-control" type="text" name="surname">
                </div>

                <div class="col-md-6 form-group">
                    <label>Forename:</label>
                    <input id="forename" class="form-control" type="text" name="forename">
                </div>
            </div>
            <div class="form-group">
                <label>E-mail address:</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input id="phone" class="form-control" type="text" name="phone">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input id="address" class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input id="birthday" class="form-control" type="text" name="birthday">
            </div>
            <div class="form-group">
                <label>Where did you hear about us?</label>
                <input id="hearaboutus" class="form-control" type="text" name="hearaboutus">
            </div>
            <div class="form-group">
                <label>Why did you want to become a member of the association?</label>
                <input id="becomemember" class="form-control" type="text" name="becomemember">
            </div>
            <label>What will make you feel useful?</label>
            <select class="form-control" id="feeluseful" name="feeluseful">
              <option value="Morally, by disseminating ideas of the association">Morally, by disseminating ideas of the association</option>
              <option value="Practice by participating in events and initiatives">Practice by participating in events and initiatives</option>
              <option value="Professional, particularly through education and experience">Professional, particularly through education and experience</option>
              <option value="Financial by providing or collecting funds">Financial by providing or collecting funds</option>
              <option value="In another way (describe in the comments box)">In another way (describe in the comments box)</option>
            </select>

            <br>

            <label>I agree with the information from this form to be considered and processed in connection with my application for membership</label>
            <select class="form-control" id="agreeornot" name="agreeornot">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <br>

            <label>I want to subscribe to my email address</label>
            <select class="form-control" id="subscribe" name="subscribe">
                <option value="Regular newsletter of the association (once a month)">Regular newsletter of the association (once a month)</option>
                <option value="Exceptional newsletters of the Association">Exceptional newsletters of the Association</option>
                <option value="Information about new publications on the site">Information about new publications on the site</option>
            </select>

            <br>

            <label>Selected package</label>
            <select class="form-control" id="package" name="package">
                <option selected value="Basic">Basic</option>
                <option value="Silver £ 10 per month">Silver £ 10 per month</option>
                <option value="Gold £ 15 per month">Gold £ 15 per month</option>
                <option value="Platinum £ 20 per month">Platinum £ 20 per month</option>
            </select>

            <br>

            <label>Method of payment</label>
            <select class="form-control" id="payment" name="payment">
                <option value="Monthly / standing order /">Monthly / standing order /</option>
                <option value="Annual 5% discount">Annual 5% discount</option>
            </select>

            <br>

            <div class="text-right">
                <button type="submit" class="btn btn-orange btn-filled"><span>Send a message!</span></button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal - Silver Package -->
<div class="modal fade modal-blue-dark"  id="silverPackage" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">Become a member and be part of us! Together we are stronger!</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <form method="post" action="{{ url('/email-send') }}" enctype="multipart/form-data" id="contact-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Surname:</label>
                    <input id="surname" class="form-control" type="text" name="surname">
                </div>
                <div class="col-md-6 form-group">
                    <label>Forename:</label>
                    <input id="forename" class="form-control" type="text" name="forename">
                </div>
            </div>
            <div class="form-group">
                <label>E-mail address:</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input id="phone" class="form-control" type="text" name="phone">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input id="address" class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input id="birthday" class="form-control" type="text" name="birthday">
            </div>
            <div class="form-group">
                <label>Where did you hear about us?</label>
                <input id="hearaboutus" class="form-control" type="text" name="hearaboutus">
            </div>
            <div class="form-group">
                <label>Why did you want to become a member of the association?</label>
                <input id="becomemember" class="form-control" type="text" name="becomemember">
            </div>
            <label>What will make you feel useful?</label>
            <select class="form-control" id="feeluseful" name="feeluseful">
              <option value="Morally, by disseminating ideas of the association">Morally, by disseminating ideas of the association</option>
              <option value="Practice by participating in events and initiatives">Practice by participating in events and initiatives</option>
              <option value="Professional, particularly through education and experience">Professional, particularly through education and experience</option>
              <option value="Financial by providing or collecting funds">Financial by providing or collecting funds</option>
              <option value="In another way (describe in the comments box)">In another way (describe in the comments box)</option>
            </select>

            <br>

            <label>I agree with the information from this form to be considered and processed in connection with my application for membership</label>
            <select class="form-control" id="agreeornot" name="agreeornot">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <br>

            <label>I want to subscribe to my email address</label>
            <select class="form-control" id="subscribe" name="subscribe">
                <option value="Regular newsletter of the association (once a month)">Regular newsletter of the association (once a month)</option>
                <option value="Exceptional newsletters of the Association">Exceptional newsletters of the Association</option>
                <option value="Information about new publications on the site">Information about new publications on the site</option>
            </select>

            <br>

            <label>Selected package</label>
            <select class="form-control" id="package" name="package">
                <option value="Basic">Basic</option>
                <option selected value="Silver £ 10 per month">Silver £ 10 per month</option>
                <option value="Gold £ 15 per month">Gold £ 15 per month</option>
                <option value="Platinum £ 20 per month">Platinum £ 20 per month</option>
            </select>

            <br>

            <label>Method of payment</label>
            <select class="form-control" id="payment" name="payment">
                <option value="Monthly / standing order /">Monthly / standing order /</option>
                <option value="Annual 5% discount">Annual 5% discount</option>
            </select>

            <br>

            <div class="text-right">
                <button type="submit" class="btn btn-orange btn-filled"><span>Send a message!</span></button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal - Gold Package -->
<div class="modal fade modal-blue-dark" id="goldPackage" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">Become a member and be part of us! Together we are stronger!</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <form method="post" action="{{ url('/email-send') }}" enctype="multipart/form-data" id="contact-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Surname:</label>
                    <input id="surname" class="form-control" type="text" name="surname">
                </div>
                <div class="col-md-6 form-group">
                    <label>Forename:</label>
                    <input id="forename" class="form-control" type="text" name="forename">
                </div>
            </div>
            <div class="form-group">
                <label>E-mail address:</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input id="phone" class="form-control" type="text" name="phone">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input id="address" class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input id="birthday" class="form-control" type="text" name="birthday">
            </div>
            <div class="form-group">
                <label>Where did you hear about us?</label>
                <input id="hearaboutus" class="form-control" type="text" name="hearaboutus">
            </div>
            <div class="form-group">
                <label>Why did you want to become a member of the association?</label>
                <input id="becomemember" class="form-control" type="text" name="becomemember">
            </div>
            <label>What will make you feel useful?</label>
            <select class="form-control" id="feeluseful" name="feeluseful">
              <option value="Morally, by disseminating ideas of the association">Morally, by disseminating ideas of the association</option>
              <option value="Practice by participating in events and initiatives">Practice by participating in events and initiatives</option>
              <option value="Professional, particularly through education and experience">Professional, particularly through education and experience</option>
              <option value="Financial by providing or collecting funds">Financial by providing or collecting funds</option>
              <option value="In another way (describe in the comments box)">In another way (describe in the comments box)</option>
            </select>

            <br>

            <label>I agree with the information from this form to be considered and processed in connection with my application for membership</label>
            <select class="form-control" id="agreeornot" name="agreeornot">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <br>

            <label>I want to subscribe to my email address</label>
            <select class="form-control" id="subscribe" name="subscribe">
                <option value="Regular newsletter of the association (once a month)">Regular newsletter of the association (once a month)</option>
                <option value="Exceptional newsletters of the Association">Exceptional newsletters of the Association</option>
                <option value="Information about new publications on the site">Information about new publications on the site</option>
            </select>

            <br>

            <label>Selected package</label>
            <select class="form-control" id="package" name="package">
                <option value="Basic">Basic</option>
                <option value="Silver £ 10 per month">Silver £ 10 per month</option>
                <option selected value="Gold £ 15 per month">Gold £ 15 per month</option>
                <option value="Platinum £ 20 per month">Platinum £ 20 per month</option>
            </select>

            <br>

            <label>Method of payment</label>
            <select class="form-control" id="payment" name="payment">
                <option value="Monthly / standing order /">Monthly / standing order /</option>
                <option value="Annual 5% discount">Annual 5% discount</option>
            </select>

            <br>

            <div class="text-right">
                <button type="submit" class="btn btn-orange btn-filled"><span>Send a message!</span></button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal - Platinium Package -->
<div class="modal fade modal-blue-dark" id="platiniumPackage" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">Become a member and be part of us! Together we are stronger!</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <form method="post" action="{{ url('/email-send') }}" enctype="multipart/form-data" id="contact-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">            

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Surname:</label>
                    <input id="surname" class="form-control" type="text" name="surname">
                </div>
                <div class="col-md-6 form-group">
                    <label>Forename:</label>
                    <input id="forename" class="form-control" type="text" name="forename">
                </div>
            </div>
            <div class="form-group">
                <label>E-mail address:</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input id="phone" class="form-control" type="text" name="phone">
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input id="address" class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label>Date of Birth:</label>
                <input id="birthday" class="form-control" type="text" name="birthday">
            </div>
            <div class="form-group">
                <label>Where did you hear about us?</label>
                <input id="hearaboutus" class="form-control" type="text" name="hearaboutus">
            </div>
            <div class="form-group">
                <label>Why did you want to become a member of the association?</label>
                <input id="becomemember" class="form-control" type="text" name="becomemember">
            </div>
            <label>What will make you feel useful?</label>
            <select class="form-control" id="feeluseful" name="feeluseful">
              <option value="Morally, by disseminating ideas of the association">Morally, by disseminating ideas of the association</option>
              <option value="Practice by participating in events and initiatives">Practice by participating in events and initiatives</option>
              <option value="Professional, particularly through education and experience">Professional, particularly through education and experience</option>
              <option value="Financial by providing or collecting funds">Financial by providing or collecting funds</option>
              <option value="In another way (describe in the comments box)">In another way (describe in the comments box)</option>
            </select>

            <br>

            <label>I agree with the information from this form to be considered and processed in connection with my application for membership</label>
            <select class="form-control" id="agreeornot" name="agreeornot">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <br>

            <label>I want to subscribe to my email address</label>
            <select class="form-control" id="subscribe" name="subscribe">
                <option value="Regular newsletter of the association (once a month)">Regular newsletter of the association (once a month)</option>
                <option value="Exceptional newsletters of the Association">Exceptional newsletters of the Association</option>
                <option value="Information about new publications on the site">Information about new publications on the site</option>
            </select>

            <br>

            <label>Selected package</label>
            <select class="form-control" id="package" name="package">
                <option value="Basic">Basic</option>
                <option value="Silver £ 10 per month">Silver £ 10 per month</option>
                <option value="Gold £ 15 per month">Gold £ 15 per month</option>
                <option selected value="Platinum £ 20 per month">Platinum £ 20 per month</option>
            </select>

            <br>

            <label>Method of payment</label>
            <select class="form-control" id="payment" name="payment">
                <option value="Monthly / standing order /">Monthly / standing order /</option>
                <option value="Annual 5% discount">Annual 5% discount</option>
            </select>

            <br>

            <div class="text-right">
                <button type="submit" class="btn btn-orange btn-filled"><span>Send a message!</span></button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal - Map -->
<div class="modal fade modal-blue-dark" id="mapModal" tabindex="-1" role="dialog">
  <button type="button" class="modal-close x-close" data-dismiss="modal"><span class="sr-only">Close</span></button>
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-intro">
        <h1 class="margin-b-60">You can meet Us here on Wall Street in <strong>New York</strong> - the best city on the whole World!</h1>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <!-- Change "data-latitude" & "data-longitude" attributes to your locations - use site like http://itouchmap.com/latlong.html -->
        <div id="google-map" class="h-400" data-latitude="40.758895" data-longitude="-73.985131"></div>
      </div>
    </div>
  </div>
</div>

<!-- Scroll Progress -->
<div id="scroll-progress" class="bg-white"></div>

<!-- JS Libraries -->
<script src="/assets/js/jquery-1.11.1.min.js"></script>

<!-- JS Plugins -->
<script src="/assets/js/plugins.js"></script>

<!-- JS Core -->
<script src="/assets/js/core.js"></script>

<!-- Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


</body>
</html>