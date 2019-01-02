<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DNA Studio">
    <meta name="description" content="Warung Dewa Rama Tegenungan">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Admin | Page </title>
    <link href="{{asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<body class="login">
  <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ url('/login')}}">
              {{ csrf_field() }}
              <h1>Login Admin</h1>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required />
              </div>
              <div>
                <button type="submit" class="btn btn-lg btn-primary" style="text-decoration: none"><b>SIGN IN</b></button>
              </div>
              <div class="clearfix"></div>
                <div class="clearfix"></div>
                <br />
                <div>
                  <p></p>
                  <p>©2018 All Rights Reserved. Warung Dewa Rama Tegenungan</p>
                </div>
            </form>
          </section>
        </div>
      </div>
    <script src="{{ url('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ url('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('backend/build/js/custom.min.js')}}"></script>
</body>
</html>