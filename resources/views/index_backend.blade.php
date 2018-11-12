<!DOCTYPE html>
<html oncontextmenu="return false" dir="ltr" lang="en">
    {{-- oncontextmenu="return false" for disable inspect element with mouse --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="address" id="address" content="">
    <meta name="phone" id="phone" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <title class="tittle"></title>
    @include('master_backend.css_index_backend')

    @yield('css')
</head>

<body >
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <header class="topbar" data-navbarbg="skin5">
            @include('master_backend.topnav_index')
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">
            @include('master_backend.sidebar')
        </aside>

        <div class="page-wrapper">
             @yield('content')
            @include('master_backend.footer')
        </div>
    </div>

    @include('master_backend.js_index_backend')
    @yield('js')
  <script type="text/javascript">
  $(document).ready(function () {
    $.ajax({
      type: 'GET',
      url: '{{ URL::route("settingweb") }}',
      data: {
        _method: 'GET'
      },
    }).done(function (data) {

      $(".tittle").text(data.tittle);
      $("meta[name='address']").attr("content", data.address);
      $("meta[name='phone']").attr("content", data.phone);
      $("#title").text(data.tittle);
      $("link[rel=icon]").attr("href","{{asset('backend/img')}}/"+ data.logo);
    }).fail(function (data) {
    
    })
  });
  </script>
</body>
@extends('master_backend.topnav_user_profile')
</html>
