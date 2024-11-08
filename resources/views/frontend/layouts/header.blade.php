<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="Keywords" content="@yield('keywords')">

        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        
        <!-- fontawesome css link -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/fontawesome-all.min.css">
        
        <!-- bootstrap css link -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/bootstrap.min.css">
        
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('theme') }}/assets/images/fav.png" type="image/x-icon">
        
        <!-- swipper css link -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/swiper.min.css">
        
        <!-- lightcase css links -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/lightcase.css">
        
        <!-- odometer css link -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/odometer.css">
        
        <!-- line-awesome-icon css -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/icomoon.css">
        
        <!-- line-awesome-icon css -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/line-awesome.min.css">
        
        <!-- animate.css -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/animate.css">
        
        <!-- aos.css -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/aos.css">
        
        <!-- nice select css -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/nice-select.css">
        
        <!-- main style css link -->
        <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/style.css">

        <!-- Template Stylesheet -->
        <link href="{{ asset('theme') }}/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start 
        <div class="preloader">
            <div class="drawing" id="loading">
                <div class="loading-dot"></div>
            </div>
        </div>
         Spinner End -->


         <header class="header-section two">
            <div class="header">
                <div class="header-bottom-area">
                    <div class="container custom-container">
                        <div class="header-menu-content">
                            <nav class="navbar navbar-expand-xl p-0">
                                <a class="site-logo site-title" href="index.html"><img src="{{ asset('theme') }}/assets/images/logo-three.png" alt="site-logo"></a>
                                <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggle-bar"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                    <ul class="navbar-nav main-menu">
                                        <li><a href="/">Home</a></li>
                                        <li class="menu_has_children">
                                            <a href="/services">Services <i class="las la-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Salesforce consulting</a></li>
                                                <li><a href="#">Salesforce Implementation</a></li>
                                                <li><a href="#">Community Cloud Implementation</a></li>
                                                <li><a href="#">Salesforce Field Service Lightning Implementation</a></li>
                                                <li><a href="#">Salesforce Integration</a></li>
                                                <li><a href="#">Salesforce Lightning Migration</a></li>
                                                <li><a href="#">Data Migration</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/about-us">About Us</a></li>
                                        <li><a href="https://www.kitaracloud.com/blog/">Blog</a></li>
                                    </ul>
                                    <div class="header-right">
                                        <div class="header-action-area">
                                            <div class="header-action">
                                                <a href="/contactus" class="btn--base">CONTACT US</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- main content --}}
        <div class="main-content">
            @yield('content')
        </div>
        {{-- end main content --}}

        @include('frontend.layouts.footer')

        <a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
    </body>
</html>