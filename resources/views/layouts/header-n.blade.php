<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('theme') }}/dist-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap">

    <!-- Custom styles for this template-->
    <link href="{{ asset('theme') }}/dist-assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('theme') }}/frontend//img/favicon.png">   


    @yield('style')

    <style>
        .navbar .collapse {
            visibility: hidden;
            display: block;
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    <img width="100%" height="50px" src="{{ asset('theme') }}/assets/images/logo-w.png" alt="Logo White">
                </div>
                <!-- <div class="sidebar-brand-text mx-3">{{ Session::get('username')}}</div> -->
            </a>

            <!-- <?php
            $role_id = session()->get('role_id');
            if ($role_id == 4) {
            ?>
                <li class="nav-item {{ Request::segment(1) == 'admin' && Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt custom-icon"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            <?php 
            }
            ?> -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
              
        <?php    if($role_id == 4) { ?>
           <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                        aria-expanded="true" aria-controls="collapseLeads">
                        <i class="fas fa-fw fa-newspaper custom-icon"></i>
                        <span>Blog Management</span>
                    </a>
                    <div id="collapseBlog" class="collapse" aria-labelledby="headingLoan" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Blog Management:</h6>
                            <a class="collapse-item" href="{{ route('admin.blogs.index') }}">Blogs</a>
                            <a class="collapse-item" href="{{ route('admin.blogs.create') }}">Add Blog</a>
                            <a class="collapse-item" href="{{ route('admin.blog-comments') }}">Blog Comments</a>
                        </div>
                    </div>
                </li>
            <?php } ?> 
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
    <nav class="navbar navbar-expand topbar mb-4 static-top">
                    <!-- <h2><b>Dashboard</b></h2> -->

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

    <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            
    <!-- Notification Icon -->
            
    
            <?php    if($role_id == 4) { ?>
        <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Session::get('username') }}</span>
                    <img class="img-profile rounded-circle" src="{{ asset('theme') }}/dist-assets/img/undraw_profile_2.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-600"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                        Logout
                    </a>
                </div>
            </li>
            <?php } ?> 
            <?php    if($role_id == env('partnerRole_id')) { ?>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Session::get('username') }}</span>
                    <img class="img-profile rounded-circle" src="{{ asset('theme') }}/dist-assets/img/undraw_profile_2.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-600"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                        Logout
                    </a>
                </div>
            </li>
            <?php } ?>
            <?php    if($role_id == 2) { ?>
        <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Session::get('username') }}</span>
                    <img class="img-profile rounded-circle" src="{{ asset('theme') }}/dist-assets/img/undraw_profile_2.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-600"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                        Logout
                    </a>
                </div>
            </li>
            <?php } ?>
        </ul>
    </nav>
                <!-- End of Topbar -->

                {{-- main content --}}
                <div class="main-content">
                    @yield('content')

                </div>
                {{-- end main content --}}

            </div>
            <!-- End of Content Wrapper -->
    </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('theme') }}/dist-assets/vendor/jquery/jquery.min.js"></script>
        <script src="{{ asset('theme') }}/dist-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('theme') }}/dist-assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('theme') }}/dist-assets/js/sb-admin-2.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone.min.js"></script>
        <script>
        $("document").ready(function(){

            var zone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            console.log(zone);
            // $("#currentTimezone").val(zone);
        });
        </script>
      
        @yield('script')
</body>
