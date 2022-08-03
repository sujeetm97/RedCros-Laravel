<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Redcross</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="{{ url('frontend/assets/img/favicon.png') }}" rel="icon"> --}}
  <link href="{{ url('assets/img/apple-touch-icon.png')  }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  {{-- css  --}}
  <link href="{{ url('frontend/css/animate.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/css/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/css/tooplate-style.css') }}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto" style="color:red;"><a href="{{ url('/') }}">+Redcross</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo
      <a href="{{ url('/') }}" class="logo me-auto"><img src="frontend/assets/img/logo.jpeg" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <h1 style="margin-right:50px"><a href="{{ url('/') }}" class="logo me-auto"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid">Redcross</a></h1>
     <!--logo-->
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
          {{-- <li><a class="nav-link scrollto" href="{{ url('/service') }}">Services</a></li> --}}
          <li><a class="nav-link scrollto" href="{{ url('/contact') }}">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/about') }}">About</a></li>

           {{-- <li class="dropdown"><a href="#"><span>Donor</span> <i class="bi bi-chevron-bottom"></i></a>
                <ul>
                    <li><a class="nav-link scrollto" href="#">Add Donors</a></li>
                    <li><a class="nav-link scrollto" href="#">Find Blood</a></li>
                    <li><a class="nav-link scrollto" href="#">Gallery</a></li>
                 </ul>
          </li> --}}


             @if (session()->has('login_sucess'))
                <script>
                    window.onload=function()
                    {
                        alert("Login Successfully!");
                        // window.location="index.php";
                    }
                </script>
                 {{-- {{ session()->get('login_sucess')}} --}}
             @endif


             @if (session()->has('user_email'))
                <li><a class="nav-link scrollto" href="{{ url('/needblood') }}">Need Blood</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/donor')}}">Become donor</a></li>
                <li><a class="nav-link scrollto active" href="{{ url('/logout'); }}">Logout</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/profile') }}">Profile</a></li>
             @else
                <li><a class="nav-link scrollto active" href="{{ url('/login'); }}">login</a></li>
                <li><a class="nav-link scrollto active" href="{{ url('/signup'); }}">signup</a></li>
             @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

   <!-- ======= Top Bar ======= -->
   {{-- <br>
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">

      </div>

      <div style="margin-left:500px;" class="nav-link">
        @if (session()->has('user_email'))
            <a href="{{ url('/logout'); }}"> Logout </a> &nbsp;&nbsp;
            <a href="#">profile</a>
        @else
            <a href="{{ url('/login'); }}"> Login </a> &nbsp;&nbsp;
            <a href="{{ url('/signup'); }}">Sign Up</a>
        @endif


     </div>
     </div>
  </div> --}}
