<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="Keywords" content="@yield('keywords')">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('theme') }}/assets/images/fav.png"/>
        
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/bootstrap.min.css" type="text/css" media="all"/>
        
        <!-- carousel CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/owl.carousel.min.css" type="text/css" media="all"/>

        <!-- responsive CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/responsive.css" type="text/css" media="all"/>
        
        <!-- nivo-slider CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/nivo-slider.css" type="text/css" media="all" />
        
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/animate.css" type="text/css" media="all" />
        
        <!-- animated-text CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/animated-text.css" type="text/css" media="all"/>

        <!-- font-awesome CSS -->
        <link type="text/css" rel="stylesheet" href="{{ asset('theme') }}/assets/fonts/font-awesome/css/font-awesome.min.css"/>
        
        <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />
        
        <!-- font-flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/flaticon.css" type="text/css" media="all"/>

        <!-- theme-default CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/theme-default.css" type="text/css" media="all"/>
        
        <!-- meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/meanmenu.min.css" type="text/css" media="all"/>
        
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/style.css" type="text/css" media="all" />

        <!-- transitions CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/owl.transitions.css" type="text/css" media="all"/>
        
        <!-- venobox CSS -->
        <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all"/>
        
        <!-- widget CSS -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/widget.css" type="text/css" media="all"/>
        
        <!-- modernizr js -->
        <script type="text/javascript" src="{{ asset('theme') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.11.3/font/bootstrap-icons.min.css"/>

        <!-- Calendly badge widget begin -->
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/salesforceservice/help', text: 'Let&rsquo;s Connect Today', color: '#0069ff', textColor: '#ffffff' }); }</script>
        <!-- Calendly badge widget end -->
    </head>

    <body>
        <!-- Loder Start-->
        <div class="loader-wrapper">
            <div class="loader"></div>
            <div class="loder-section left-section"></div>
            <div class="loder-section right-section"></div>
        </div>
        <!-- Loder End -->

        <!--==================================================-->
        <!----- Start Techno Header Top Menu Area Css ----->
        <!--==================================================-->
        <div class="header_top_menu pt-2 pb-2 bg_color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-8">
                        <div class="header_top_menu_address">
                            <div class="header_top_menu_address_inner">
                                <ul>
                                    <li><a href="tel:919033648701"><i class="fal fa-mobile-android"></i>+91 90336-48701</a></li>
                                    <li><a href="mailto:info@kitaracloud.com"><i class="fal fa-envelope"></i>info@kitaracloud.com</a></li>
                                    <li><a><i class="fal fa-map-marker-alt"></i>310, Arth Business Center, Ahmedabad</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="header_top_menu_icon">
                            <div class="header_top_menu_icon_inner">
                                <ul>
                                    <li><a href="https://www.linkedin.com/in/kitaracloud-techlabs-7762aa229/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/kitaracloud"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100076460610424"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/kitaracloud/"><i class="fab fa-instagram"></i></a></li>
                                </ul>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================================================-->
        <!----- End Techno Header Top Menu Area Css ----->
        <!--===================================================-->

        <!--==================================================-->
        <!----- Start Techno Main Menu Area ----->
        <!--==================================================-->
        <div id="sticky-header" class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="menu">
                        <a href="{{ url('/') }}" class="logo">
                            <img class="down" src="{{ asset('theme') }}/assets/images/logo-n.svg" alt=""/>
                            <img class="main_sticky" src="{{ asset('theme') }}/assets/images/logo-w.png" alt=""/>
                        </a>
                        <ul class="clearfix">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li>
                                <a href="{{ url('/services') }}">Services</a>
                                <ul>
                                    <li><a href="{{ url('/salesforce-development') }}">Salesforce Development</a></li>
                                    <li><a href="{{ url('/integration') }}">Salesforce Integration</a></li>
                                    <li><a href="{{ url('/salesforce-support') }}">Salesforce Support</a></li>
                                    <li><a href="{{ url('/community-cloud-implementation') }}">Community Cloud Implementation</a></li>
                                    <li><a href="{{ url('/implementation-services') }}">Salesforce Implementation</a></li>
                                    <li><a href="{{ url('/field-service-lightning-implementation') }}">Salesforce Field Service Lightning Implementation</a></li>
                                    <li><a href="{{ url('/data-migration') }}">Data Migration</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/products') }}">Products</a></li>
                            <li><a href="{{ url('/blog') }}">Blogs</a></li>
                            <div class="donate-btn-header">
                                <a class="dtbtn" href="{{ url('/contactus') }}">Let's Connect</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Techno Mobile Menu Area -->
        <div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
            <div class="mobile-menu">
                <nav class="techno_menu">
                    <ul class="clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li>
                            <a href="{{ url('/services') }}">Services</a>
                            <ul>
                                <li><a href="{{ url('/salesforce-development') }}">Salesforce Development</a></li>
                                <li><a href="{{ url('/integration') }}">Salesforce Integration</a></li>
                                <li><a href="{{ url('/salesforce-support') }}">Salesforce Support</a></li>
                                <li><a href="{{ url('/community-cloud-implementation') }}">Community Cloud Implementation</a></li>
                                <li><a href="{{ url('/implementation-services') }}">Salesforce Implementation</a></li>
                                <li><a href="{{ url('/field-service-lightning-implementation') }}">Salesforce Field Service Lightning Implementation</a></li>
                                <li><a href="{{ url('/data-migration') }}">Data Migration</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/products') }}">Products</a></li>
                        <li><a href="https://www.kitaracloud.com/blog/">Blogs</a></li>
                        <div class="donate-btn-header">
                            <a class="dtbtn" href="{{ url('/contactus') }}">Let's Connect</a>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
        <!--==================================================-->
        <!----- End Techno Main Menu Area ----->
        <!--==================================================-->

        {{-- main content --}}
        <div class="main-content">
            @yield('content')
        </div>
        {{-- end main content --}}

        @include('layouts.footer')
        <a href="https://api.whatsapp.com/send?phone=919033648701&text=Hello,%20I%27m%20looking%20for" target="_blank" class="whatsapp-icon">
            <img src="{{ asset('theme') }}/assets/images/wa.png" alt="WhatsApp">
        </a>
    </body>
</html>