<?php 
    $hospital_name = "Adeoyo Hospital";
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Hospital, , , , ">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <meta name="author" content="GLORIOUS EMPIRE TECH">
    <title>{{$hospital_name}}</title>
    <link rel="apple-touch-icon" href="{{asset('website/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/app-assets/images/ico/favicon.ico')}}">
    <script src="{{asset('website/app-assets/js/jquery/jquery-3.3.1.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/fonts/meteocons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/vendors/css/charts/morris.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END VENDOR CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/core/colors/palette-gradient.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/app-assets/css/pages/timeline.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->




    
    

    
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
            <ul class="nav navbar-nav flex-row position-relative">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                    <img class="brand-logo" alt="stack admin logo" 
                    src="{{asset('website/app-assets/images/logo/stack-logo-light.png')}}">
                    <h2 class="brand-text">ADEOYO</h2></a></li>
                <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Your Dashboard...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span></h6>
                            </li>
                            <li class="scrollable-container media-list"><a href="javascript:void(0)">
                                <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                    <div class="media-body">
                                    <h6 class="media-heading">You have new order!</h6>
                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                    </div>
                                </div></a><a href="javascript:void(0)">

                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i><span class="badge badge-pill badge-default badge-warning badge-default badge-up">3</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span></h6>
                            </li>
                            <li class="scrollable-container media-list"><a href="javascript:void(0)">
                                <div class="media">
                                    <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('website/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span></div>
                                    <div class="media-body">
                                    <h6 class="media-heading">Margaret Govan</h6>
                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                    </div>
                                </div></a><a href="javascript:void(0)">
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="{{asset('website/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar"><i></i></span>
                            <span class="user-name"><?php $name = Auth::user()->name; ?> {{ $name }} </span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('admin.logout')}}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>DASHBOARD</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
                </li>
                @if(Auth::user()->is_admin == "Super Admin")
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="">Dashboard</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active"><a href="{{route('superadmin.ward.create')}}"><i class="fa fa-th-large"></i>
                        <span class="menu-title" data-i18n="" style="color:white">
                        Ward</span>
                        <span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
                        
                    </li>
                    <li class="active"><a href="index.html"><i class="fa fa-list-alt"></i>
                        <span class="menu-title" data-i18n="" style="color:white">
                        Unit</span>
                        <span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
                        
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-users"></i>
                            <span class="menu-title" data-i18n=""style="color:white">Staff</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="fa fa-road"></i>
                            <span class="menu-title" data-i18n=""style="color:white">Staff Transfer</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-user"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Patient</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="fa fa-sign-out"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Dischared Patient</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="fa fa-flask"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Laboratory</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="fa fa-money"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Payment</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="fa fa-briefcase"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Casenote</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="fa fa-magic"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Pharmacy</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-list"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Test Result</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-cloud"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Activity Log</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="fa fa-cloud"></i>
                            <span class="menu-title" data-i18n="" style="color:white">My Log</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                @elseif(Auth::user()->is_admin == "Doctor")
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Casenote</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Recommend Test</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white"> Test Result</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-bell"></i>
                            <span class="menu-title" data-i18n="" style="color:white"> Appointment</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                @elseif(Auth::user()->is_admin == "Nurse")
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Hospital Card</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Casenote</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Test Result</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Discharged Patient</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                @elseif(Auth::user()->is_admin == "Laboratory")
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Laboratory</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Hospital Test</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Conduct Test</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Test Result</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Hospital Test</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                @elseif(Auth::user()->is_admin == "Pharmacy")
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Pharmacy</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Drug Type</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Drug Categories</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Add Drug</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Drug Stock</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Prescription</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                @else
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="">Dashboard</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active"><a href="index.html"><i class="ft-home"></i>
                        <span class="menu-title" data-i18n="" style="color:white">
                        Ward</span>
                        <span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
                        
                    </li>
                    <li class="active"><a href="index.html"><i class="ft-home"></i>
                        <span class="menu-title" data-i18n="" style="color:white">
                        Unit</span>
                        <span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
                        
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n=""style="color:white">Staff</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n=""style="color:white">Staff Transfer</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Patient</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Dischared Patient</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Laboratory</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Payment</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Casenote</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Pharmacy</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Test Result</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">Activity Log</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{route('superadmin.dashboard')}}"><i class="ft-home"></i>
                            <span class="menu-title" data-i18n="" style="color:white">My Log</span>
                            <span class="badge badge badge-primary badge-pill float-right mr-2"></span>
                        </a>
                    </li>
                @endif
                    
            </ul>
        </div>
    </div>
    <div class="">
        @yield('content')  
    </div>

    <footer class="footer footer-static footer-light navbar-border">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">
            Copyright  &copy; <?php echo date("Y") ?> <a class="text-bold-800 grey darken-2" 
            href="https:gloriousempiretech.com" 
            target="_blank">Powered By Glorious Empire Tech </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-block d-none d-lg-block"> Adeoyo Hospital <i class="fa fa-building"></i></span></p>
    </footer>
    
    <script src="{{asset('website/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/charts/morris.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
    {{-- <script src="{{asset('website/app-assets/vendors/js/timeline/horizontal-timeline.min.js')}}"></script> --}}
    <script src="{{asset('website/app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('website/app-assets/js/core/app.min.js')}}"></script>
    <script src="{{asset('website/app-assets/js/scripts/customizer.min.js')}}"></script>
    <script src="{{asset('website/app-assets/js/scripts/pages/dashboard-ecommerce.min.js')}}"></script>

    <script src="{{asset('website/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/tables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/tables/jszip.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/tables/pdfmake.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/tables/vfs_fonts.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/tables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('website/app-assets/vendors/js/tables/buttons.print.min.js')}}"></script>
    <script src="{{asset('website/app-assets/js/scripts/tables/datatables/datatable-advanced.min.js')}}"></script>
    {{-- <script src="{{asset('website/app-assets/jQuery.js')}}"></script> --}}
    
    
    
</body>
</html>