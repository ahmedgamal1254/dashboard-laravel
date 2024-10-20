<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ __("title.dashboard_title") }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    @include("admin.layouts.css")
    @yield("css")
  </head>
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <audio id="success" src="{{ asset("assets/admin/success.mp3") }}" style="display: none;"></audio>

    <!-- BEGIN: Header-->
    @include("admin.layouts.header")
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include("admin.layouts.sidebar")
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield("content")
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2025<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>

    @include("admin.layouts.script")
    @yield("script")
  </body>
</html>
