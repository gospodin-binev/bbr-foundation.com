<!DOCTYPE html>
<html lang="en">

<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>{{ $lookEvent->title }} | BBR Foundation</title>

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

<div class="ajax-body bg-orange dark">
	
	<div class="container">
		<div style="margin-top: 50px;" class="row margin-b-50">
			<div class="col-lg-8 col-lg-offset-1">
				<h1>{{ $lookEvent->title }}</h1>

				<div class="margin-b-80">
					<img src="{{ $lookEvent->image }}" class="img-responsive margin-b-10" alt="">
				</div>

				<span class="lead">{!! $lookEvent->content !!}</span>
			</div>
		</div>
	</div>
	
	<!-- Close -->
	<a href="/" class="ajax-close x-close" data-dismiss="close"></a>
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