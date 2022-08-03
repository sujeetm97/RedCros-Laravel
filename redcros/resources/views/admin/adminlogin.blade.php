<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ url('admin/assets/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ url('admin/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ url('admin/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST">
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Hello there, Sign in and start managing your Admin</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" id="exampleInputEmail1" name="unm">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="pwd">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" value="Login" name="login">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ url('admin/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ url('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- others plugins -->
    <script src="{{ url('admin/assets/js/plugins.js') }}"></script>
    <script src="{{ url('admin/assets/js/scripts.js') }}"></script>
</body>

</html>
