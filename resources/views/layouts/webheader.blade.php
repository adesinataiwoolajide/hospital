<?php 
    $web_name = "Dr. First Aid";
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>{{$web_name}} </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="First Aid Treatment" />
    <meta name="keywords" content="Hospotal, Wound, Treatment, Medical" />
    <meta name="author" content="Glorious Empire Tech" />
    <meta name="MobileOptimized" content="320" />
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/flaticon_3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/before_after.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/style_4.css')}}" />
    <link href='api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />

    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="{{asset('first-aid.jpg')}}" />
</head>

<body>
    
    <div class="md_header_wrapper">
        <div class="top_header_section hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="top_header_add">
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Address :</span> UCH, Ibadan Oyo State Nigeria</li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span>Email :</span> services@drfirstaid.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="right_side_main_warpper">
                            <div class="md_right_side_warpper">
                                <ul>
                                    <li>follow us :</li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle_header_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="md_logo hidden-xs hidden-sm">
                            <a href="{{route('index')}}" class="hidden-xs">
                                <img src="{{asset('first-aid.jpg')}}" style="height: 50px; margin-top: -15px;" alt="{{$web_name}}" title="Doctor First Aid" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="md_share_info_wrapper">
                            <ul>
                                <li>
                                    <div class="lv_header_icon">
                                        <img src="{{asset('website/images/Icon_clock_4.png')}}" alt="Icon" title="Icon">
                                    </div>
                                    <p><span>opening hours</span>
                                        <br>24/7 Support</p>
                                </li>
                                <li>
                                    <div class="lv_header_icon">
                                        <img src="{{asset('website/images/icon_cll_4.png')}}" alt="Icon" title="Icon">
                                    </div>
                                    <p> <span>call us</span>
                                        <br>+ 234 813 813 9333
                                    </p>
                                </li>
                                <li>
                                    <div class="lv_header_icon">
                                        <img src="{{asset('website/images/mison_1.png')}}" alt="Icon" title="Icon">
                                    </div>
                                    <p> <span>canll us</span>
                                        <br>+ 234 813 813 9333
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="appointmnt_wrapper hidden-xs">
                            <div class="appoint_btn">
                                <ul>
                                    <li><a href="appointment.html"><span class="hidden-xs hidden-sm"><i class="fa fa-calendar"></i>Make a </span>Appointment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--top header end-->
    <!--header menu wrapper-->
    <div class="menu_wrapper header-area hidden-menu-bar stick">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav class="navbar hidden-xs">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav_response" id="bs-example-navbar-collapse-1">
                            <div class="et_navbar_search_wrapper hidden-xs">
                                <div class="et_search_bar" id="search_button"> <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                                <div id="search_open" class="et_search_box">
                                    <input type="text" placeholder="Search here">
                                    <button><i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <ul class="nav navbar-nav" id="nav_filter">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('aboutus.website')}}">About Us</a></li>
                                <li><a href="{{route('treatment.website')}}">Treatment</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle first_menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wound</a>
                                    <ul class="dropdown-menu hovr_nav_tab">
                                        <li><a href="event.html">events</a></li>
                                        <li><a href="pricing.html">pricing</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="{{route('services.website')}}">Services</a></li>
                                <li><a href="{{route('events.website')}}">Events</a></li>
                                
                                <li><a href="{{route('tips.website')}}">Health Tips</a></li>
                                <li><a href="{{route('gallery.website')}}">Gallery</a></li>
                                <li><a href="{{route('gallery.website')}}">Partners</a></li>
                            </ul>
                            
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    <div class="rp_mobail_menu_main_wrapper visible-xs">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="gc_logo logo_hidn">
                                    <img src="{{asset('website/images/response_logo.png')}}" class="img-responsive" alt="logo">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div id="toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="white" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="white" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="white" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="white" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="white" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar">
                            <h1><a href="#">DR, FIRST<span>AID</span></a></h1>
                            <div id="toggle_close">&times;</div>
                            <div id='cssmenu' class="wd_single_index_menu">
                                    
                                <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('aboutus.website')}}">About Us</a></li>
                                    <li><a href="{{route('treatment.website')}}">Treatment</a></li>
                                    <li class='has-sub'>
                                        <a href="#" class="dropdown-toggle first_menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wound</a>
                                        <ul class="dropdown-menu hovr_nav_tab">
                                            <li><a href="event.html">events</a></li>
                                            <li><a href="pricing.html">pricing</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="{{route('services.website')}}">Services</a></li>
                                    <li><a href="{{route('events.website')}}">Events</a></li>
                                    
                                    <li><a href="{{route('tips.website')}}">Health Tips</a></li>
                                    <li><a href="{{route('gallery.website')}}">Gallery</a></li>
                                    <li><a href="{{route('gallery.website')}}">Partners</a></li>
                                    
                                    <li>
                                        <a href=""><span class="hidden-xs hidden-sm">
                                            <i class="fa fa-calendar"></i>Make a </span>Appointment
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header wrapper end-->
    <!-- hs Slider Start -->
    
            
    <div class="">
        @yield('content')  
    </div>

    <div class="partner_wrapper med_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="partner_slider_img">
                        <div class="owl-carousel owl-theme">
                            @foreach ($partner as $las)
                                <div class="item">
                                    <img src="{{asset('partner-logo/'.$las->partner_logo)}}" 
                                        class="img-responsive" alt="{{$las->partner_name}}" 
                                        style="width: 50px; height: 50px">
                                    
                                </div>
                            @endforeach
                            
                            <div class="item">
                                <img src="{{asset('website/images/partner_1.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('website/images/partner_2.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('website/images/partner_3.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('website/images/partner_4.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('website/images/partner_5.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                            <div class="item">
                                <img src="{{asset('website/images/partner_6.png')}}" class="img-responsive" alt="story_img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--partner wrapper end-->
        <!--news wrapper start-->

        
    {{-- <div class="newsletter_wrapper med_toppadder80 med_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="newsletter_text wow fadeOut" data-wow-delay="0.5s">
                        <h3>Your First Step Towards Oral Health For Life Starts Here :</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="contect_btn_news">
                        <ul>
                            <li><a href="#">Enquiry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!--news wrapper end-->
    <!-- footer wrapper start-->
    <div class="footer_wrapper">
        <div class="container">
            <div class="box_1_wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="address_main">
                            <div class="footer_widget_add">
                                <a href="#">
                                    <img src="{{asset('first-aid.jpg')}}" class="img-responsive"
                                     width="100px; height=100px" alt="footer_logo" /></a>
                                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="footer_box_add">
                                <ul>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Address : </span>-512/fonia,canada</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><span>Call us : </span>+61 5001444-122</li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span>Email :</span> dummy@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer_1-->
            <div class="booking_box_div">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer_main_wrapper">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallary_response hidden-sm">
                                <div class="footer_heading">
                                    <h1 class="med_bottompadder10">Instagram</h1>
                                    <img src="{{asset('website/images/line.png')}}" class="img-responsive" alt="img" />
                                </div>
                                <div class="footer_gallary">
                                    <div class="row">
                                        <ul>
                                            <li><img src="{{asset('website/images/footer_1.jpg')}}" alt="img" class="img-responsive"></li>
                                            <li><img src="{{asset('website/images/footer_2.jpg')}}" alt="img" class="img-responsive"></li>
                                            <li><img src="{{asset('website/images/footer_3.jpg')}}" alt="img" class="img-responsive"></li>
                                            <li><img src="{{asset('website/images/footer_4.jpg')}}" alt="img" class="img-responsive"> </li>
                                            <li> <img src="{{asset('website/images/footer_5.jpg')}}" alt="img" class="img-responsive"> </li>
                                            <li> <img src="{{asset('website/images/footer_6.jpg')}}" alt="img" class="img-responsive"> </li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                            <!--footer_2-->
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 respons_footer_nav hidden-xs">
                                <div class="footer_heading footer_menu">
                                    <h1 class="med_bottompadder10">Userful</h1>
                                    <img src="{{asset('website/images/line.png')}}" class="img-responsive" alt="img" />
                                </div>
                                <div class="footer_ul_wrapper">
                                    <ul>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a href="#">home</a></li>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">about us</a></li>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">services</a></li>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">doctors</a></li>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">blog</a></li>
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="#">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--footer_3-->
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 contact_last_div">
                                <div class="footer_heading">
                                    <h1 class="med_bottompadder10">Opening Hours</h1>
                                    <img src="{{asset('website/images/line.png')}}" class="img-responsive" alt="img" />
                                </div>
                                <div class="footer_cnct">
                                    <p>Monday – Friday ------<span>09:00-17:00</span></p>
                                    <p>Saturday -----------------<span>09:30-17:00</span></p>
                                    <p>Sunday -------------------<span>10:30-18:00</span></p>
                                </div>
                            </div>
                            <!--footer_4-->
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer_botm_wrapper">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="bottom_footer_copy_wrapper">
                                    <span>Copyright © 2018- <a href="#">IMEDICO</a>Design by <a href="#">Webstrot.</a></span>
                                </div>
                                <div class="footer_btm_icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer_5-->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="up_wrapper">
                <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    

        <script src="{{asset('website/js/jquery_min.js')}}"></script>
        <script src="{{asset('website/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('website/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('website/js/jquery.inview.min.js')}}"></script>
        <script src="{{asset('website/js/jquery.countTo.js')}}"></script>
        <script src="{{asset('website/js/wow.min.js')}}"></script>
        <script src="{{asset('website/js/owl.carousel.js')}}"></script>
        <script src="{{asset('website/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('website/js/custom_4.js')}}"></script>
        <script src='../../../../api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
        <!--js code-->
        <script>
            var divisor = document.getElementById("divisor"),
                slider = document.getElementById("slider");
    
            function moveDivisor() {
                divisor.style.width = slider.value + "%";
            }
        </script>
    
        <script>
            function colorize() {
                var hue = Math.random() * 360;
                return "HSL(" + hue + ",100%,50%)";
            }
        </script>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiYWtzaGF5aGFuZGdlIiwiYSI6InI2bzhEcUUifQ.8r-lNnjAuIZUk8pjhtxlFw';
            var map = new mapboxgl.Map({
                container: 'map', // container id
                style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
                center: [-74.50, 40], // starting position [lng, lat]
                zoom: 10 // starting zoom
    
            });
            map.scrollZoom.disable();
            map.dragPan.disable();
        </script>
    </body>
</html>