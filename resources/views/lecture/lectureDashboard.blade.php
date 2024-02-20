    
@include('notification')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cashe-control" content="no-cashe, no-store, must-revalidate">
  <meta http-equiv="expires" content="0">
  <meta http-equiv="pragma" content="no-cashe">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2\bootstrap-5.3.2\dist\css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons-1.11.3\bootstrap-icons-1.11.3\font\bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web\fontawesome-free-6.4.2-web\css\fontawesome.min.css') }}">    
    <!-- C:\xampp\htdocs\LARAVEL PROJECTS\prms-app\public\AdminLTE-3.2.0\AdminLTE-3.2.0\plugins\fontawesome-free\css\all.min.css -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css\index.css') }}">

    <title>Lecture | Dashboard</title>
</head>
<body>

<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="lectureDashboard" class="brand-link">
      <img src="{{ asset('img\soma-high-resolution-logo-white-transparent.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SOMA - APP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ $lecture->avatar ? asset('storage/' . $lecture->avatar) : asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image" style="object-fit: cover; width:40px; height:40px;">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ $lecture->username }} </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="lectureDashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               SOMA APP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lectureDashboard" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOMA Dashboard</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="lectureAllResults" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Results
                <i class="right fas fa-angle-left"></i>
                <span class="right badge badge-primary">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="lectureAllResults" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Results</p>
                  <span class="right badge badge-success"></span>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="lectureAllStudents" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Students
                <span class="right badge badge-primary">{{ $students->count() }}</span>
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="lectureProfile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="lectureLogout" class="nav-link">
              <i class="nav-icon bi bi-box-arrow-right" style="margin-left: 7px;"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> {{ $lecture->username }} Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="lectureDashboard">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>{{ $students->count() }}</h3>
        
                        <p>All Students</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="lectureAllStudents" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{ $lecture->module->result->count() }} ({{ $students->count()}})</h3>
        
                        <p>All Results</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="lectureAllResults" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

  
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023-2026 <span class="text-primary">SOMA - APP</span> .</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

{{-- index - js --}}
<script src="{{ asset('js\index.js') }}"></script>
          <!-- jQuery -->
<script src="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>

<script>
  $(document).ready(function() {
    setTimeout(() => {
        $('.alert-notification').fadeOut();
    }, 5000);
  });
</script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    {{-- bootstrap js --}}
<script src="{{ asset('bootstrap-5.3.2/bootstrap-5.3.2/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap-5.3.2/bootstrap-5.3.2/dist/js/bootstrap.bundle.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="AdminLTE-3.2.0/AdminLTE-3.2.0/dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.2.0/AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="AdminLTE-3.2.0/AdminLTE-3.2.0/dist/js/pages/dashboard3.js"></script>

</body>
</html>
