<!DOCTYPE html>
<html lang="en" id="demo">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <!-- Bootstrap css-->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Select2 css-->
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

</head>

<body class="ltr main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->


    <!-- Page -->
    <div class="page">

        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="main-container container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
                    <div class="hor-logo">
                        <a class="main-logo" href="index.html">
                            <img src="{{ asset('assets/img/brand/logo.png') }}" class="header-brand-img desktop-logo"
                                alt="logo">
                            <img src="{{ asset('assets/img/brand/logo-light.png') }}"
                                class="header-brand-img desktop-logo-dark" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="index.html"><img src="{{ asset('assets/img/brand/logo.png') }}" class="mobile-logo"
                                alt="logo"></a>
                        <a href="index.html"><img src="{{ asset('assets/img/brand/logo-light.png') }}"
                                class="mobile-logo-dark" alt="logo"></a>
                    </div>
                  
                </div>
                <div class="main-header-right">
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button><!-- Navresponsive closed -->
                    <div
                        class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ms-auto">
                              
                                <!-- Theme-Layout -->
                                <div class="dropdown d-flex main-header-theme">
                                    <a class="nav-link icon layout-setting">
                                        <span class="dark-layout">
                                            <i class="fe fe-sun header-icons"></i>
                                        </span>
                                        <span class="light-layout">
                                            <i class="fe fe-moon header-icons"></i>
                                        </span>
                                    </a>
                                </div>
                                <!-- Theme-Layout -->
                                
                                <!-- Full screen -->
                                <div class="dropdown ">
                                    <a class="nav-link icon full-screen-link">
                                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                                    </a>
                                </div>
                                <!-- Full screen -->
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Header-->

        <!-- Sidemenu -->
        <div class="sticky">
            <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
                <div class="main-sidebar-header main-container-1 active">
                    <div class="main-sidebar-body main-body-1">
                        <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                        <ul class="menu-nav nav">
                            <li class="nav-header"><span class="nav-label">Students Information</span></li>
                            <li class="nav-item show">
								<a class="nav-link with-sub" href="javascript:void(0)">
									<span class="shape1"></span>
									<span class="shape2"></span>
									<i class="ti-wallet sidemenu-icon menu-icon "></i>
									<span class="sidemenu-label">Information
										
									</span>
									<i class="angle fe fe-chevron-right"></i>
								</a>
								<ul class="nav-sub open" style="display: block;">
									
									<li class="nav-sub-item"> <a class="nav-sub-link" href="{{(route('students.create'))}}">Student Create</a></li>
                                    <li class="nav-sub-item"> <a class="nav-sub-link" href="{{(route('students.index'))}}">Student Information</a></li>
									
									
								</ul>
							</li>
                          
                        </ul>
                        <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidemenu -->

        <!-- Main Content-->
        @yield('contant')
        <!-- End Main Content-->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Internal Chart.Bundle js-->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Peity js-->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Sidemenu js -->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Internal Morris js -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris.js/morris.min.js') }}"></script>

    <!-- Circle Progress js-->
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart-circle.js') }}"></script>

    <!-- Internal Dashboard js-->
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>
