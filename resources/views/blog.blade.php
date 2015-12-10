<!DOCTYPE html>
<html lang="en">

<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>News | BBR Foundation</title>

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.html">
<link rel="apple-touch-icon" href="images/favicon_60x60.html">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon_76x76.html">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon_120x120.html">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon_152x152.html">

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
<header id="header" class="header-horizontal dark">

    <!-- Logo -->
    <a href="/" class="logo pull-left margin-r-40"><img src="assets/img/logo-white.svg" alt=""></a>
    
    <!-- Navigation -->
    <nav id="main-menu">
        <ul class="nav nav-main pull-left">
            <li>
                <a href="/"><span>Back to Home page</span></a>
            </li>
        </ul>
    </nav>

    <!-- Menu Trigger -->
    <a href="#" class="pull-right margin-l-30" data-target="mobile-nav"><i class="fa fa-bars"></i></a>

    <!-- Social Icons -->
    <ul class="social-icons pull-right margin-b-0 hidden-xs">
        <li><a target="_blank" href="https://www.facebook.com/bbrfdn" class="icon icon-xs"><i class="fa fa-facebook"></i></a></li>
    </ul>

</header>
<!-- Header / End -->

<!-- Page Wrapper -->
<div id="page-wrapper" class="bg-blue-dark dark" data-scroll-easing="easeOutBack">

    <div class="posts-list">

        @foreach ($blog_posts as $blog_post)
            <!-- Post - Section -->
            <div class="post section bg-blue-dark dark" data-header-change="true">

                <div class="image">
                    <div class="bg-image"><img src="{{ $blog_post->image }}" alt=""></div>
                </div>

                <div class="content">
                    <div class="meta"> 
                        <span><i class="fa fa-clock-o"></i><?php echo date('d.m.Y', strtotime($blog_post->created_at)); ?></span>
                        <span><i class="fa fa-user"></i>{{ $blog_post->author }}</span>
                    </div>
                    <h1><a href="{{ url('/admin/blog/post') }}/{{ $blog_post->id }}">{{ $blog_post->title }} </a></h1>
                    <a href="{{ url('/admin/blog/post') }}/{{ $blog_post->id }}" class="link-default">Read more</a>
                </div>

            </div>
            <!-- Post - Section / End -->
        @endforeach

    </div>

    <center>{!! $blog_posts->render() !!}</center>

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
                    <a href="/"><span>Back to Home page</span></a>
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