<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- TinyMCE -->
    <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: "#home-heading"
        });

        tinymce.init({
            selector: "#about-heading"
        });

        tinymce.init({
            selector: "#solution-heading"
        });

        tinymce.init({
            selector: "#services-heading"
        });

        tinymce.init({
            selector: "#video-heading"
        });

        tinymce.init({
            selector: "#s-video-heading"
        });

        tinymce.init({
            selector: "#team-heading"
        });

        tinymce.init({
            selector: "#contact-heading"
        });

        tinymce.init({
            selector: ".serv-title"
        });

        tinymce.init({
            selector: "#firstContact"
        });

        tinymce.init({
            selector: "#thirdContact"
        });

        tinymce.init({
            selector: "#content"
        });

        tinymce.init({
            selector: "#video_text"
        });
    </script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/admin/home') }}">Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->getMail() }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('admin/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{url('admin/home')}}"><i class="fa fa-fw fa-dashboard"></i> Headings</a>
                    </li>
                    <li>
                        <a href="{{url('admin/about-slider')}}"><i class="fa fa-fw fa-bar-chart-o"></i> About Slider</a>
                    </li>
                    <li>
                        <a href="{{url('admin/solutions')}}"><i class="fa fa-fw fa-table"></i> Solutions</a>
                    </li>
                    <li>
                        <a href="{{url('admin/services')}}"><i class="fa fa-fw fa-edit"></i> Services</a>
                    </li>
                    <li>
                        <a href="{{url('admin/events')}}"><i class="fa fa-fw fa-desktop"></i> Events</a>
                    </li>
                    <li>
                        <a href="{{url('admin/past-events')}}"><i class="fa fa-fw fa-desktop"></i> Past events</a>
                    </li>
                    <li>
                        <a href="{{url('admin/videos')}}"><i class="fa fa-fw fa-desktop"></i> Videos</a>
                    </li>
                    <li>
                        <a href="{{url('admin/team')}}"><i class="fa fa-fw fa-wrench"></i> Team</a>
                    </li>
                    <li>
                        <a href="{{url('admin/images')}}"><i class="fa fa-fw fa-wrench"></i> Images</a>
                    </li>
                    <li>
                        <a href="{{url('admin/contacts')}}"><i class="fa fa-fw fa-wrench"></i> Contacts</a>
                    </li>
                    <li>
                        <a href="{{url('admin/blog')}}"><i class="fa fa-fw fa-wrench"></i> Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            @yield('page-title')
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('slider-status'))
                            <div class="alert alert-success">{{Session::get('slider-status')}}</div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('heading-status'))
                            <div class="alert alert-success">{{Session::get('heading-status')}}</div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('upSlider-status'))
                            <div class="alert alert-success">{{Session::get('upSlider-status')}}</div>
                        @endif
                    </div>
                </div>

                @yield('content') 

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/js/plugins/morris/raphael.min.js"></script>
    <script src="/js/plugins/morris/morris.min.js"></script>
    <script src="/js/plugins/morris/morris-data.js"></script>

</body>

</html>