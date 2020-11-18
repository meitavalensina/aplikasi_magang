<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="admin/img/MAGNG LOGO.png">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/normalize.css')}}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/meanmenu.min.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/calendar/fullcalendar.print.min.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/data-table/bootstrap-editable.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header" style="background-color: #006DF0; padding: 5px">
                <a href="#"><img style="height: 50px;" class="main-logo" src="admin/img/MAGNG LOGO.png" alt="" /></a>
                <strong><a href="#"><img style="height: 50px;" src="admin/img/MAGNG LOGO.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#">
                                   <span class="educate-icon educate-apps icon-wrap"></span>
                                   <span class="mini-click-non">Industri</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                                <li><a title="Dashboard v.2" href="index-1.html"><span class="mini-sub-pro">Dashboard v.2</span></a></li>
                                <li><a title="Dashboard v.3" href="index-2.html"><span class="mini-sub-pro">Dashboard v.3</span></a></li>
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="234-semuakelas.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Kost</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Kelas" href="234-semuakelas.html"><span class="mini-sub-pro">Semua Kelas</span></a></li>
                                <li><a title="Semua Pengajar" href="234-pengajar.html"><span class="mini-sub-pro">Semua Pengajar</span></a></li>
                                <li><a title="Semua Siswa" href="234-siswa.html"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <!-- <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Semua Pengguna</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="234-semuakelas.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Transport</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Kelas" href="234-semuakelas.html"><span class="mini-sub-pro">Semua Kelas</span></a></li>
                                <li><a title="Semua Pengajar" href="234-pengajar.html"><span class="mini-sub-pro">Semua Pengajar</span></a></li>
                                <li><a title="Semua Siswa" href="234-siswa.html"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <!-- <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Semua Pengguna</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="234-semuakelas.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Wisata</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Kelas" href="234-semuakelas.html"><span class="mini-sub-pro">Semua Kelas</span></a></li>
                                <li><a title="Semua Pengajar" href="234-pengajar.html"><span class="mini-sub-pro">Semua Pengajar</span></a></li>
                                <li><a title="Semua Siswa" href="234-siswa.html"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <!-- <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Semua Pengguna</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="234-semuakelas.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Kuliner</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Kelas" href="234-semuakelas.html"><span class="mini-sub-pro">Semua Kelas</span></a></li>
                                <li><a title="Semua Pengajar" href="234-pengajar.html"><span class="mini-sub-pro">Semua Pengajar</span></a></li>
                                <li><a title="Semua Siswa" href="234-siswa.html"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <!-- <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Semua Pengguna</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="234-semuakelas.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Laundry</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Kelas" href="234-semuakelas.html"><span class="mini-sub-pro">Semua Kelas</span></a></li>
                                <li><a title="Semua Pengajar" href="234-pengajar.html"><span class="mini-sub-pro">Semua Pengajar</span></a></li>
                                <li><a title="Semua Siswa" href="234-siswa.html"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <!-- <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Semua Pengguna</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="234-semuakelas.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Minimarket</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Kelas" href="234-semuakelas.html"><span class="mini-sub-pro">Semua Kelas</span></a></li>
                                <li><a title="Semua Pengajar" href="234-pengajar.html"><span class="mini-sub-pro">Semua Pengajar</span></a></li>
                                <li><a title="Semua Siswa" href="234-siswa.html"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <!-- <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Semua Pengguna</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="234-semuakelas.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Tips dan Trik</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Semua Kelas" href="234-semuakelas.html"><span class="mini-sub-pro">Semua Kelas</span></a></li>
                                <li><a title="Semua Pengajar" href="234-pengajar.html"><span class="mini-sub-pro">Semua Pengajar</span></a></li>
                                <li><a title="Semua Siswa" href="234-siswa.html"><span class="mini-sub-pro">Semua Siswa</span></a></li>
                                <!-- <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Semua Pengguna</span></a></li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro" style="padding: 5px">
                        <a href="#"><img style="height: 50px" class="main-logo" src="admin/img/logo/logo-image.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <!-- <i class="educate-icon educate-nav"></i> -->
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <!-- <li class="nav-item"><a href="#" class="nav-link">Home</a> -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="admin/img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">Prof.Anderson</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Mobile Menu start -->
             <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Profile<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Data Master<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Semua Kelas</a></li>
                                                <li><a href="index-3.html">Semua Pengajar</a></li>
                                                <li><a href="index-1.html">Semua Siswa</a></li>
                                                <li><a href="analytics.html">Semua Pengguna</a></li>\
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- HEADER END -->

@yield('content')

<!-- FOOTER START -->

<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                   <p>Copyright © 2020. MAGANG.IT</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- jquery
============================================ -->
<script src="{{asset('admin/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!-- wow JS
============================================ -->
<script src="{{asset('admin/js/wow.min.js')}}"></script>
<!-- price-slider JS
============================================ -->
<script src="{{asset('admin/js/jquery-price-slider.js')}}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{asset('admin/js/jquery.meanmenu.js')}}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
<!-- sticky JS
============================================ -->
<script src="{{asset('admin/js/jquery.sticky.js')}}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{asset('admin/js/jquery.scrollUp.min.js')}}"></script>
<!-- counterup JS
============================================ -->
<script src="{{asset('admin/js/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/js/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('admin/js/counterup/counterup-active.js')}}"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="{{asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('admin/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
<!-- metisMenu JS
============================================ -->
<script src="{{asset('js/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('js/metisMenu/metisMenu-active.js')}}"></script>
<!-- data table JS
============================================ -->
<script src="{{asset('admin/js/data-table/bootstrap-table.js')}}"></script>
<script src="{{asset('admin/js/data-table/tableExport.js')}}"></script>
<script src="{{asset('admin/js/data-table/data-table-active.js')}}"></script>
<script src="{{asset('admin/js/data-table/bootstrap-table-editable.js')}}"></script>
<script src="{{asset('admin/js/data-table/bootstrap-editable.js')}}"></script>
<script src="{{asset('admin/js/data-table/bootstrap-table-resizable.js')}}"></script>
<script src="{{asset('admin/js/data-table/colResizable-1.5.source.js')}}"></script>
<script src="{{asset('admin/js/data-table/bootstrap-table-export.js')}}"></script>
<!-- morrisjs JS
============================================ -->
<script src="{{asset('admin/js/morrisjs/raphael-min.js')}}"></script>
<script src="{{asset('admin/js/morrisjs/morris.js')}}"></script>
<script src="{{asset('admin/js/morrisjs/morris-active.js')}}"></script>
<!-- morrisjs JS
============================================ -->
<script src="{{asset('admin/js/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/js/sparkline/jquery.charts-sparkline.js')}}"></script>
<script src="{{asset('admin/js/sparkline/sparkline-active.js')}}"></script>
<!-- calendar JS
============================================ -->
<script src="{{asset('admin/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('admin/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin/js/calendar/fullcalendar-active.js')}}"></script>
<!-- plugins JS
============================================ -->
<script src="{{asset('admin/js/plugins.js')}}"></script>
<!-- main JS
============================================ -->
<script src="{{asset('admin/js/main.js')}}"></script>
<!-- tawk chat JS
============================================ -->
<script src="{{asset('admin/js/tawk-chat.js')}}"></script>
</body>

</html>