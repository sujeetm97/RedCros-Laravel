<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/png" href="{{ url('admin/assets/images/icon/favicon.ico') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/themify-icons.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/metisMenu.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/slicknav.min.css') }}" />
  <!-- amchart css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- Start datatable css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
  <!-- others css -->
  <link rel="stylesheet" href="{{ url('admin/assets/css/typography.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/default-css.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/styles.css') }}" />
  <link rel="stylesheet" href="{{ url('admin/assets/css/responsive.css') }}" />
  <!-- modernizr css -->
  <script src="{{ url('admin/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
  <div class="page-container">
    <!-- sidebar menu area start -->
    <div class="sidebar-menu">
      <div class="sidebar-header">
        <div class="header-logo">
		</div>
      </div>
      <div class="main-menu">
        <div class="menu-inner">
          <nav>
            <ul class="metismenu" id="menu">
             <!-- <li>
                <a href="index.php" aria-expanded="true">
                  <i class="ti-dashboard"></i>
                  <span>dashboard</span>
                </a>
              </li>-->
              <li>
                <a href="javascript:void(0)" aria-expanded="true">
                  <i class="ti-pie-chart"></i>
                  <span>add form data</span>
                </a>
                <ul class="collapse">
                  <li><a href="{{ url('/admin/index/add_age') }}">Add Age</a></li>
                  <li><a href="#">Manage Department</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript:void(0)" aria-expanded="true">
                  <i class="ti-pie-chart"></i>
                  <span>Appointment</span>
                </a>
                <ul class="collapse">
                  <li><a href="#">Manage Appointment</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript:void(0)" aria-expanded="true">
                  <i class="ti-pie-chart"></i>
                  <span>User</span>
                </a>
                <ul class="collapse">
                  <li><a href="#">Manage User</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript:void(0)" aria-expanded="true">
                  <i class="ti-pie-chart"></i>
                  <span>Blood donare</span>
                </a>
                <ul class="collapse">
                  <li><a href="#">Manage Blood donare</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript:void(0)" aria-expanded="true">
                  <i class="ti-pie-chart"></i>
                  <span>Contact Us</span>
                </a>
                <ul class="collapse">
                  <li><a href="#">Manage Contact Us</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- sidebar menu area end -->

    <!-- main content area start -->
    <div class="main-content">
      <!-- header area start -->
      <div class="header-area">
        <div class="row align-items-center">
          <!-- nav and search button -->
          <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <!-- profile info & task notification -->
          <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
              <li id="full-view"><i class="ti-fullscreen"></i></li>
              <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- header area end -->
      <!-- page title area start -->
      <div class="page-title-area">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
              <h4 class="page-title pull-left">Welcome</h4>
            </div>
          </div>
          <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
              <img class="avatar user-thumb" src="{{ url('admin/assets/images/author/avatar.png') }}" alt="avatar" />
              <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-angle-down"></i>
              </h4>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Log Out</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- page title area end -->
