<!DOCTYPE html>
<html lang="en">

 
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>{{ $blog_post->title }} | BBR Foundation</title>

<!-- Favicons -->
<link rel="shortcut icon" href="/images/favicon.html">
<link rel="apple-touch-icon" href="/images/favicon_60x60.html">
<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon_76x76.html">
<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon_120x120.html">
<link rel="apple-touch-icon" sizes="152x152" href="/images/favicon_152x152.html">

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300,100,900' rel='stylesheet' type='text/css'>

<!-- CSS Styles -->
<link rel="stylesheet" href="/assets/css/styles.css" />

<!-- CSS Animations -->
<link rel="stylesheet" href="/assets/css/animate.css" />

<!-- CSS Template -->
<link rel="stylesheet" href="/assets/css/theme.css" />


</head>

<body>


<!-- Loader -->
<div id="page-loader"></div>
<!-- Loader / End -->

<!-- Header -->
<header id="header" class="header-horizontal bg-blue-dark dark">

    <!-- Logo -->
    <a href="/" class="logo pull-left margin-r-40"><img src="/assets/img/logo-white.svg" alt=""></a>
    
    <!-- Navigation -->
    <nav id="main-menu">
        <ul class="nav nav-main pull-left">
            <li>
                <a href="/blog"><span>Back to Blog</span></a>
            </li>
        </ul>
    </nav>

    <!-- Menu Trigger -->
    <a href="#" class="pull-right margin-l-30" data-target="mobile-nav"><i class="fa fa-bars"></i></a>
    
    <!-- Social Icons -->
    <ul class="social-icons pull-right margin-b-0 hidden-xs">
        <li><a href="https://www.facebook.com/bbrfdn" class="icon icon-xs"><i class="fa fa-facebook"></i></a></li>
    </ul>

</header>
<!-- Header / End -->

<!-- Page Wrapper -->
<div id="page-wrapper" class="bg-blue-dark dark padding-t-130" data-scroll-easing="easeOutBack">

    <!-- Post -->
    <div class="post container">
        <div class="row margin-b-40">
            <div class="col-md-8 col-sm-10">
                <img src="{{ $blog_post->image }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-9 col-sm-offset-1">
                <div class="meta"> 
                    <span><i class="fa fa-clock-o"></i><?php echo date('d.m.Y', strtotime($blog_post->created_at)); ?></span>
                    <span><i class="fa fa-user"></i>{{ $blog_post->author }}</span>
                </div>
                <div class="post-content margin-b-80">
                    <h1>{{ $blog_post->title }}</h1>
                    <p class="lead">{!! $blog_post->content !!}</p>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer" class="bg-blue-dark padding-v-40 dark text-center">
        <div class="section-content copyright margin-b-20">
            ©<strong>BBR Foundation</strong> 2015. This website is made possible by <a target="_blank" href="http://www.drago.me"><strong>Drago.me</strong> </a> & <a target="_blank" href="http://www.binev.eu"><strong>Binev.eu</strong> </a>
        </div>
        <span data-target="local-scroll"><a href="#page-wrapper" class="back-to-top"><i class="fa fa-chevron-up"></i></a></span>
    </footer>
    <!-- Footer / End -->

</div>
<!-- Page Wrapper / End -->

<!-- Mobile Navigation -->
<nav id="mobile-nav" class="bg-blue-dark dark" data-nav-changeable="true">
    <div class="mobile-nav-wrapper">
        <nav>
            <ul class="nav nav-side">
                <li class="has-megamenu">
                    <a href="/blog"><span>Back to Blog</span></a>
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