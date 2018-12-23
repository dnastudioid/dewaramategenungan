<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin | Page </title>
    <link rel="icon" href="{{asset('images/logo.jpeg')}}">
    <link href=" {{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href=" {{asset('backend/vendors/font-awesome/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet">
    <link href=" {{asset('backend/build/css/custom.min.css')}} " rel="stylesheet">
    @yield('css')
  </head>

  <body class="nav-md">
    <div id="loading"></div>
    <div class="container body">
      <div class="main_container">
        @include('backend.layouts.navigation',['activeMenu' => $activeMenu])
        @include('backend.layouts.header')
        @yield('content')
        @include('backend.layouts.footer')
      </div>
      
    </div>
    <script src=" {{asset('backend/vendors/jquery/dist/jquery.min.js')}} "></script>
    <script src=" {{asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}} "></script>
    <script src=" {{asset('backend/build/js/custom.min.js')}} "></script>
    @yield('js')
  </body>
</html>
