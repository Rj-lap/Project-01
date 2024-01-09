<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>COSMOS COSMATIC'S</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('pomato/')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('pomato/')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('pomato/')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="{{url('pomato/')}}/icon" href="{{url('pomato/')}}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('pomato/')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('pomato/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('pomato/')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>COSMOS COSMATIC'S</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('UserAssets/')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('UserAssets/')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{url('UserAssets/')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('UserAssets/')}}/css/custom.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{url('pomato/')}}/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{url('pomato/')}}/images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="{{route('home')}}">Home</a> </li>
                                        <li> <a href="{{route('about')}}">About</a> </li>
                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        <li><a href="{{route('OurService')}}">Our Service</a></li>
                                         @if(Session::has('buyer'))
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                        <li><a href="{{route('cart')}}">Cart</a></li>
                                        <li><a href="{{route('myprofile')}}">My-Profile</a></li>
                                         @else
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('signup')}}">Signup</a></li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
