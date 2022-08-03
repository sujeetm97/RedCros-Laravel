<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Redcross Blood Bank| Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('admin/login/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('admin/login/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin/login/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="#" class=""><img src="admin/assets/images/logo.png" alt="" class="img-fluid" width="50" height="50"><b>Redcross</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login with email and password</p>
            @if (count($errors) > 0)
            <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form action=" {{ url('/admin-login') }}" method="post">
            @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="user name" name="name">
                    <div class="input-group-append">
                    <div class="input-group-text">

                    </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                    <div class="input-group-text">
                    </div>
                    </div>
                </div>

                <div class="social-auth-links text-center mb-3">
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </div>
        </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{  url('admin/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{  url('admin/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{  url('admin/adminlte.min.js') }}"></script>
</body>
</html>
