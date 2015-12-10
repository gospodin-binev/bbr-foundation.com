<!DOCTYPE html>
<html lang="en">

<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>BBR Foundation</title>

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
<header id="header" class="header-horizontal dark">

    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('email-status'))
                <div class="alert alert-success">Your membership request was mailed. Please check your mail for instructions.</div>
            @endif
        </div>
    </div>

    <!-- Logo -->
    <a href="/" class="logo pull-left margin-r-40"><img src="assets/img/logo-white.svg" alt=""></a>
    
    <!-- Navigation -->
    <nav id="main-menu">
        <ul class="nav nav-main pull-left">
            <li class="has-megamenu">
                <a href="#section01">
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#section02"><span>About BBR</span></a>
            </li>
            <li>
                <a href="#section04"><span>Services</span></a>
            </li>
            <li>
                <a href="#section07"><span>Events</span></a>
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

    <!-- Menu Trigger -->
    <a href="#" class="pull-right margin-l-30" data-target="mobile-nav"><i class="fa fa-bars"></i></a>
    
    <!-- Social Icons -->
    <ul class="social-icons pull-right margin-b-0 hidden-xs">
        <li><a target="_blank" href="https://www.facebook.com/bbrfdn" class="icon icon-xs"><i class="fa fa-facebook"></i></a></li>
        
    </ul>

</header>
<!-- Header / End -->