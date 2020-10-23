<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Admin | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('public/assets/star_rate/jquery.raty.css') }}">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('public/images/logo.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/waves.min.css') }}" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/icon/feather/css/feather.css') }}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/font-awesome-n.min.css') }}">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="{{ asset('public/assets/bower_components/chartist/css/chartist.css') }}" type="text/css" media="all">

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/data-table/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/widget.css') }}">

    <link rel="stylesheet" href="{{ asset('public/assets/sweetalert/dist/sweetalert.css') }}">
    <style type="text/css">
        .label-bold{
                font-weight: 500;
                font-size: 15px;
                padding: 5px;
                padding-left: 22px;
        }
        .active_collapse{
                background: lightblue !important;
        }
        .panel-heading{
            background: aliceblue;
            border-radius: 5px;
            padding: 1px 10px;
            margin: 10px;
            border: solid transparent;
        }
        .accordion-toggle:hover{
            background: aliceblue !important;
            color: blue !important;
        }
        .accordion-toggle{
            background: aliceblue !important;
            color: black !important;
        }
        .loader1{
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: rgba(0,0,0,0.5);
        }
    </style>
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="{{url('/welcome')}}">
                            <b><h6>Blog Admin</h6></b>
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="full-screen feather icon-maximize"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('public/assets/images/admin.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                        <span>Blog Admin</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="{{ url('admin/change_password') }}">
                                                <i class="feather icon-lock"></i> Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('admin/logout') }}">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="{{ $menu_name == 'welcome' ? 'active' : '' }}">
                                        <a href="{{url('/admin/welcome')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="{{ $menu_name == 'blog' ? 'active' : '' }}">
                                        <a href="{{url('/admin/blog')}}" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-clone"></i></span>
                                            <span class="pcoded-mtext">Blogs</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="loader1" style="display:none;">
                        <div style="position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);transform: -webkit-translate(-50%, -50%);transform: -moz-translate(-50%, -50%);    transform: -ms-translate(-50%, -50%);color: darkred;">
                            <img src="{{ asset("/public/images/loader_logo_1.gif") }}" style="height: 70px;width: 70px;"/>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    

    <!-- <footer class="main-footer">
        Copyright &copy; {{date("Y")}} All rights reserved By Admin.
    </footer> -->
    
    <script src="{{ asset('public/assets/sweetalert/dist/sweetalert.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('public/assets/star_rate/jquery.raty.js') }}"></script>
    <!-- waves js -->
    <script src="{{ asset('public/assets/js/waves.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('public/assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!-- Chartlist charts -->
    <script src="{{ asset('public/assets/bower_components/chartist/js/chartist.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    
    <!-- Accordian js -->
    <script src="{{ asset('public/assets/js/accordion.js') }}"></script>
    
    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/pcoded.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/script.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/data-table/data-table-custom.js') }}"></script>
    <script src="{{ asset('public/assets/js/vertical/vertical-layout.min.js') }}"></script>

    <!-- data-table js -->
    <script src="{{ asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/assets/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> -->
<script>
    
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
@yield('script')
</body>


<!-- Mirrored from colorlib.com//polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Nov 2018 06:08:22 GMT -->
</html>
