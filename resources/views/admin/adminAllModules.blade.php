    
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

    <title>Admin | Modules</title>
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
  {{-- 
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> 
  --}}
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
    <a href="adminDashboard" class="brand-link">
      <img src="{{ asset('img\soma-high-resolution-logo-white-transparent.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SOMA - APP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ $admin->avatar ? asset('storage/' . $admin->avatar) : asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ $admin->username }} </a>
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
               with font-awesome or any other icon font library 
          -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                SOMA APP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adminDashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOMA Dashboard</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="adminAllStudents" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                All Essentials
                <i class="right fas fa-angle-left"></i>
                <span class="right badge badge-primary">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="adminAllStudents" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
              <p>
                All Students
                <span class="right badge badge-success">{{ $students->count() }}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="adminAllLectures" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
              <p>
                All Lectures
                <span class="right badge badge-success">{{ $lectures->count() }}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="adminAllResults" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
              <p>
                All Results
                <span class="right badge badge-success">{{ $results->count() }}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="adminAllModules" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
              <p>
                All Modules
                <span class="right badge badge-success">{{ $modules->count() }}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="adminAllCourses" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
              <p>
                All Courses
                <span class="right badge badge-success">{{ $courses->count() }}</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="adminAllDepartments" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
              <p>
                All Departments
                <span class="right badge badge-success">{{ $departments->count() }}</span>
              </p>
            </a>
          </li>

        </ul>
    </li> 


          <li class="nav-item">
            <a href="adminProfile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="adminLogout" class="nav-link">
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
            <h1 class="m-0"> {{ $admin->username }} | All Modules</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminDashboard">Home</a></li>
              <li class="breadcrumb-item">All-Modules</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row py-4">
            <div class="col-md-12">
                <div class="card p-3">
                    <p>
                        This are modules from different years semester
                    </p>
                    
                    <div class="table-responsive">
                        <div class="d-flex" style="display: flex; align-items:center; justify-content:space-between;">
                            <div class="h3 py-2">
                                List of All Modules
                            </div>
                           <div class="float-right d-flex">
                              <button type="submit" class="btn btn-primary m-2 btn-sm" data-bs-toggle="modal" data-bs-target="#AdminAddStudent">+Add Module</button>
                              
                              <div class="options m-2">
                                <select name="filter" id="filter" width="10px" class="form-control">
                                  <option value="all" selected>All</option>
                                  <option value="1S1">1yr Sem1</option>
                                  <option value="1S2">1yr Sem2</option>
                                  <option value="2S1">2yr Sem1</option>
                                  <option value="2S2">2yr Sem2</option>
                                  <option value="3S1">3yr Sem1</option>
                                  <option value="3S2">3yr Sem2</option>
                                </select>
                              </div>
                            </div>
                        </div>

                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <th>#</th>
                                <th>Module Name</th>
                                <th>Module Code</th>
                                <th>Module Credit</th>
                                <th>Module Department</th>
                                <th>Semester Year</th>
                                <th>Actions</th>
                            </thead>
                            <tbody id="tbody">
                                <?php 
                                    $id = 0;
                                    $id++;
                                ?>

                                @foreach ($modules as $module)
                                    <tr>
                                        <th rowspan="1"> <?=$id++;?> </th>
                                        <td>{{ $module->name }}</td>
                                        <td>{{ $module->module_code }}</td>
                                        <td>{{ $module->credit }}</td>
                                        <td>{{ $module->department->name }}</td>
                                        <td>
                                            @if ($module->semister_year = '1S1')
                                                {{ '1year Sem 1' }}
                                            @elseif($module->semister_year = '1S2')
                                                {{ '1year Sem 2' }}
                                            @elseif($module->semister_year = '2S1')
                                                {{ '2year Sem 1' }}
                                            @elseif($module->semister_year = '2S2')
                                                {{ '2year Sem 2' }}
                                            @elseif($module->semister_year = '3S1')
                                                {{ '3year Sem 1' }}
                                            @elseif($module->semister_year = '3S2')
                                                {{ '3year Sem 2' }}
                                            @elseif($module->semister_year = '4S1')
                                                {{ '4year Sem 1' }}
                                            @elseif($module->semister_year = '4S2')
                                                {{ '4year Sem 2' }}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                          <a href="{{ route('admin.delete.module', $module->id) }}" class="btn btn-outline-danger btn-sm text-center"> <i class="bi bi-trash"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="d-flex" style="display: flex; align-items:center; justify-content:flex-end;">
                            <div class="box-count py-3 text-muted">
                                All Modules: <span id="countMod"> {{ $modules->count() }} </span>
                            </div>
                        </div>
                    </div>
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


  
{{-- ADMIN ADD MODULE --}}
  <div class="modal fade" id="AdminAddStudent" tabindex="-1" aria-labelledby="AdminAddStudentLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="display:flex; align-items:center;">
          <div class="left" style="display: flex; flex-direction: column;">
            <h1 class="modal-title fs-5" id="AdminAddStudentLabel">Admin Add-Module</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="AdminAddModule" method="POST">
                <div class="mb-3">
                    <label for="text" class="form-label">Module Name</label>
                    <input type="text" id="text" name="name" class="form-control" placeholder="Module Name">
                    <span class="text-danger"> @error('name') {{ $message }} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="code" class="form-label">Module Code</label>
                  <input type="text" id="code" name="module_code" class="form-control" placeholder="Module Code">
                  <span class="text-danger"> @error('module_code') {{ $message }} @enderror </span>
                </div>
                <div class="mb-3">
                  <label for="credit" class="form-label">Module Credit</label>
                  <input type="number" id="credit" minlength="0" maxlength="12" name="credit" class="form-control" placeholder="0">
                  <span class="text-danger"> @error('credit') {{ $message }} @enderror </span>
                </div>

                <div class="mb-3">
                  <label for="department" class="form-label">Department</label>
                  <select name="department_id" class="form-control">
                    <option value="" selected>--choose department--</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                  </select>
                </div>

                
              <div class="row">
                
                <div class="col-md-6">

                <div class="mb-3">
                  <label for="department" class="form-label">Semester Year</label>
                  <select name="department_id" class="form-control">
                    <option value="" selected>--semester year--</option>
                    <option value="1S1">1year Sem1</option>
                    <option value="1S2">1year Sem2</option>
                    <option value="2S1">2year Sem1</option>
                    <option value="2S2">2year Sem2</option>
                    <option value="3S1">3year Sem1</option>
                    <option value="3S2">3year Sem2</option>
                    <option value="4S1">4year Sem1</option>
                    <option value="4S2">4year Sem2</option>
                  </select>
                </div>
              </div>
                
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="department" class="form-label">Department Share</label>
                  <select name="department_share" class="form-control">
                    <option value="" selected>--choose department--</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                  </select>
                </div>
                
              </div>

                
                <div class="text-center w-100 py-3">
                    <button type="submit" class="btn btn-dark w-50 text-center">Add Module</button>
                </div>


              </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  
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
