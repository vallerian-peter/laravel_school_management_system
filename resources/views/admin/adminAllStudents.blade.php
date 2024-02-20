    
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

    <title>Admin | All Students</title>
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
            <a href="adminAllStudents" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
              <p>
                All Students
                <span class="right badge badge-success" id="countStudentsSideBar"> {{ $students->count() }} </span> 
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
            <a href="adminAllModules" class="nav-link">
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
            <h1 class="m-0"> {{ $admin->username }} | All Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminDashboard">Home</a></li>
              <li class="breadcrumb-item">All-Students</li>
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
                        This are all students from different course, which linked up with lecturesa nd modules... Chao!
                    </p>

                    <div class="table-responsive">
                        <div class="contents-buttons" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                          <div class="h3 py-2">
                            List of All Students 
                          </div>

                          <div class="search">
                            <input type="search" class="form-control m-1" name="search" id="search-student" placeholder="Search Student...">
                          </div>

                          <div class="buttons">
                              <button type="button" class="btn btn-primary btn-sm fw-bold" data-bs-target="#modalAddStudent" data-bs-toggle="modal"> + Add Student</button>
                              <button type="button" class="btn btn-success btn-sm fw-bold" data-bs-target="#modalExcelAddStudents" data-bs-toggle="modal"> <i class="bi bi-file-earmark-spreadsheet"></i> Add Students</button>
                              <a href="{{ asset('img\BENG EXCEL STUDENT SAMPLE.xlsx') }}" class="btn btn-outline-success rounded btn-sm fw-bold"> <i class="bi bi-file-earmark-spreadsheet"></i> Excel Sample </a>
                          </div>
                        </div>
                        <table
                            class="table table-responsive table-striped table-hover">
                            <thead class="table-dark">
                                <th>#</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Registration No.</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>BirthDate</th>
                                <th>Course</th>
                                <th>Date Register</th>
                                <th>Actions</th>
                            </thead>
                            <tbody id="tbody">
                                <?php
                                  $id = 0;
                                  $id++;
                                ?>
                            @if($students->count() != 0)
                                @foreach ($students as $student)
                                <tr>
                                    <th rowspan="1"><?=$id++;?></th>
                                    <td>{{ $student->fullname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->username }}</td>
                                    <td>{{ $student->reg_no }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->birthdate }}</td>
                                    <td>{{ $student->course->name }}</td>
                                    <td>{{ $student->created_at }}</td>
                                    <td style="display:flex; flex-direction: row; align-items:center; gap: 5px; border: none;">
                                        <button type="button" class="btn btn-outline-primary btn-sm text-center" data-bs-toggle="modal" data-bs-target="#viewStudent{{ $student->id }}"> <i class="bi bi-eye"></i> </button>
                                        <button type="button" class="btn btn-outline-success btn-sm text-center" data-bs-toggle="modal" data-bs-target="#editStudent{{ $student->id }}"> <i class="bi bi-pencil"></i> </button>
                                        <a href="{{ route('admin.delete.student', $student->id) }}" class="btn btn-outline-danger btn-sm text-center"> <i class="bi bi-trash"></i> </a>
                                    </td>
                
                                </tr>
                                @endforeach
                              @else
                                <tr>

                                    <td rowspan="7" class="text-center text-danger fw-bolder">
                                        <i class="bi bi-trash"></i> Empty Students
                                    </td>

                                </tr>
                                @endif
                            </tbody>
                        </table>

                        <div class="d-flex"
                            style="display: flex; align-items:center; justify-content:flex-end;">
                            <div class="box-count py-3 text-muted">
                                All Students: <span id="countStudents"> {{ $students->count() }} </span>
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
  <!-- /.content-wrapper  -->


    @foreach ($students as $student)
    <div class="modal fade" id="viewStudent{{ $student->id }}" tabindex="-1" aria-labelledby="viewStudent{{ $student->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
            <div class="left" style="display: flex; flex-direction: column;">
                <h1 class="modal-title fs-5" id="viewStudent{{ $student->id }}Label">Lecture View-Student</h1>
                <div>
                Student Register: <div class="badge badge-info">{{ $student->created_at }}</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <div class="border-bottom">{{ $student->fullname }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <div class="border-bottom">{{ $student->username }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="border-bottom">{{ $student->email }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Registration Number</label>
                    <div class="border-bottom">{{ $student->reg_no }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Course Name</label>
                    <div class="border-bottom">{{ $student->course->name}}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Department Name</label>
                    <div class="border-bottom">{{ $student->course->department->name}}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Birth Date</label>
                    <div class="border-bottom">{{ $student->birthdate }}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <div class="border-bottom">{{ $student->gender }}</div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
        </div>
    </div>
    @endforeach


    @foreach ($students as $student)
    <div class="modal fade" id="editStudent{{ $student->id }}" tabindex="-1" aria-labelledby="editStudent{{ $student->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
            <div class="left" style="display: flex; flex-direction: column;">
                <h1 class="modal-title fs-5" id="editStudent{{ $student->id }}Label">Admin | Update-Student</h1>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="AdminUpdateStudent" class="px-3 pb-3" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="fullname" class="form-label">Full Name</label>
                  <input type="fullname" class="form-control" name="fullname" id="fullname" value="{{ $student->fullname }}" placeholder="Full Name">
                  <span class="text-danger"> @error('fullname'){{ $message }} @enderror </span>
              </div>
              <div class="row">
                  <div class="col-md-7">
                      <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" name="email" id="email" value="{{ $student->email }}" placeholder="user@example.com">
                          <span class="text-danger"> @error('email'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control" name="username" id="username" value="{{ $student->username }}" placeholder="UserName">
                          <span class="text-danger"> @error('username'){{ $message }} @enderror </span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="phone" class="form-label">Phone</label>
                          <input type="phone" class="form-control" name="phone" id="phone" value="{{ $student->phone }}" placeholder="Phone Number">
                          <span class="text-danger"> @error('phone'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="mb-3">
                          <label for="birthdate" class="form-label">BirthDate</label>
                          <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ $student->birthdate }}" placeholder="Birth Date">
                          <span class="text-danger"> @error('birthdate'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="mb-3">
                          <label for="gender" class="form-label">Gender</label> <span class="badge badge-info">{{ $student->gender }}</span>
                          <input type="text" class="form-control" value="{{ $student->gender }}" hidden>
                          <select name="gender" id="gender" class="form-control">
                              <option value="" selected>--choose gender--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                          <span class="text-danger"> @error('gender'){{ $message }} @enderror </span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="reg_no" class="form-label">Registration No.</label>
                          <input type="text" class="form-control" name="reg_no" id="reg_no" value="{{ $student->reg_no }}" placeholder="Registration No.">
                          <span class="text-danger"> @error('reg_no'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="Course" class="form-label">Course</label>
                          {{-- <input type="text" class="form-control" id="course_id" value="@old('fname')" placeholder="Course"> --}}
                          <select name="course_id" id="course" class="form-control">
                              <option value="" selected>--select course--</option>
                              @foreach ($courses as $course)
                                  <option value="{{ $course->id}}">{{ $course->name }}</option>
                              @endforeach
                          </select>
                          <span class="text-danger"> @error('course_id'){{ $message }} @enderror </span>
                      </div>
                  </div>
              </div>

              {{-- button --}}
              <div class="w-100 text-center pb-4 pt-3">
                  <button type="submit" class="btn btn-dark w-50"> Update Student </button>
              </div>

          </form>
            </div>
        </div>
    </div>
    @endforeach

{{-- excel - Add Students --}}
  <div class="modal fade" id="modalExcelAddStudents" tabindex="-1" aria-labelledby="modalExcelAddStudentsLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-lg-center">
      <div class="modal-content">
          <div class="modal-header" style="display:flex; align-items:center;">
          <div class="left">
              <h1 class="modal-title fs-5" id="modalExcelAddStudentsLabel">Admin | Add Students | Excel File</h1>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body pb-4">
              <form action="excelAddStudent" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                 <i class="bi bi-circle text-success"></i> Make sure you have the columns provided at the sample sheet, <br>
                  If not an <span class="badge badge-danger">Error</span> will occur 
                </p>
                 <div class="mb-3">
                    <label for="excel-file" class="form-label">Import Excel File</label>
                    <input type="file" id="excel-file" class="form-control" name="excel_file">
                 </div>
                 <div class="w-100 text-center py-3">
                     <button type="submit" class="btn btn-dark w-50">Submit File</button>
                 </div>
              </form>
          </div>

      </div>
      </div>
  </div>

  {{-- normal add student --}}
  <div class="modal fade" id="modalAddStudent" tabindex="-1" aria-labelledby="modalAddStudentLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-lg-center">
    <div class="modal-content">
        <div class="modal-header" style="display:flex; align-items:center;">
        <div class="left">
            <h1 class="modal-title fs-5" id="modalAddStudentLabel">Admin | Register Student</h1>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body pb-4">
          <form action="AdminAddStudent" class="px-3" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="fullname" class="form-label">Full Name</label>
                  <input type="fullname" class="form-control" name="fullname" id="fullname" value="{{ @old('fullname') }}" placeholder="Full Name">
                  <span class="text-danger"> @error('fullname'){{ $message }} @enderror </span>
              </div>
              <div class="row">
                  <div class="col-md-7">
                      <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" name="email" id="email" value="{{ @old('email') }}" placeholder="user@example.com">
                          <span class="text-danger"> @error('email'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control" name="username" id="username" value="{{ @old('username') }}" placeholder="UserName">
                          <span class="text-danger"> @error('username'){{ $message }} @enderror </span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-5">
                      <div class="mb-3">
                          <label for="phone" class="form-label">Phone</label>
                          <input type="phone" class="form-control" name="phone" id="phone" value="{{ @old('phone') }}" placeholder="Phone Number">
                          <span class="text-danger"> @error('phone'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="mb-3">
                          <label for="birthdate" class="form-label">BirthDate</label>
                          <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ @old('birthdate') }}" placeholder="Birth Date">
                          <span class="text-danger"> @error('birthdate'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="mb-3">
                          <label for="gender" class="form-label">Gender</label>
                          <select name="gender" id="gender" class="form-control" value="{{ @old('gender') }}">
                              <option value="" selected>--choose gender--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                          <span class="text-danger"> @error('gender'){{ $message }} @enderror </span>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="reg_no" class="form-label">Registration No.</label>
                          <input type="text" class="form-control" name="reg_no" id="reg_no" value="{{ @old('reg_no') }}" placeholder="Registration No.">
                          <span class="text-danger"> @error('reg_no'){{ $message }} @enderror </span>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3">
                          <label for="Course" class="form-label">Course</label>
                          {{-- <input type="text" class="form-control" id="course_id" value="@old('fname')" placeholder="Course"> --}}
                          <select name="course_id" id="course" class="form-control">
                              <option value="" selected>--select course--</option>
                              @foreach ($courses as $course)
                                  <option value="{{ $course->id}}">{{ $course->name }}</option>
                              @endforeach
                          </select>
                          <span class="text-danger"> @error('course_id'){{ $message }} @enderror </span>
                      </div>
                  </div>
              </div>

              {{-- Password --}}
              <div class="mb-3">
                  <input type="hidden" class="form-control" name="password" value="1234567890" hidden>
              </div>

              {{-- button --}}
              <div class="w-100 text-center pb-3 pt-3">
                  <button type="submit" class="btn btn-dark w-50">Register</button>
              </div>

          </form>
        </div>

        {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> --}}
    </div>
    </div>
  </div>

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


          <!-- jQuery -->
<script src="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $(document).ready(function() {
      $('#search-student').on('keyup', function() {
          var search = $(this).val();

          $.ajax({
              url: "{{ route('searchStudent') }}",
              type: "GET",
              data: {'search': search},
              success: function(data){
                  // data display
                var output = data.outputs;
                var htmlData = '';
                var count = output.length;

                if(count != 0)
                {
                  for(var i = 0; i < output.length; i++) {

                      htmlData += '<tr>\
                                      <th rowspan="1">'+(i+1)+'</th>\
                                      <td>'+output[i]['fullname']+'</td>\
                                      <td>'+output[i]['email']+'</td>\
                                      <td>'+output[i]['username']+'</td>\
                                      <td>'+output[i]['reg_no']+'</td>\
                                      <td>'+output[i]['phone']+'</td>\
                                      <td>'+output[i]['gender']+'</td>\
                                      <td>'+output[i]['birthdate']+'</td>\
                                      <td>'+output[i]['name']+'</td>\
                                      <td>'+output[i]['created_at']+'</td>\
                                      <td>\
                                        <button type="button" class="btn btn-outline-primary btn-sm text-center" data-bs-toggle="modal" data-bs-target="#viewStudent{{ $student->id }}"> <i class="bi bi-eye"></i> </button>\
                                        <button type="button" class="btn btn-outline-success btn-sm text-center" data-bs-toggle="modal" data-bs-target="#editStudent{{ $student->id }}"> <i class="bi bi-pencil"></i> </button>\
                                        <a href="{{ route('admin.delete.student', $student->id) }}" class="btn btn-outline-danger btn-sm text-center"> <i class="bi bi-trash"></i> </a>\
                                        </td>\
                                  \</tr>';
                  }

                }else
                {
                     htmlData += '<tr colspan="11">\
                                      <td colspan="11" class="text-center text-danger"> <i class="bi bi-trash"></i> Empty Students </td>\
                                  \</tr>';
                }

                $('#tbody').html(htmlData);
                $('#countStudents').html(count);
                $('#countStudentsSideBar').html(count);
              }
          });
      });
  });
</script>

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
{{-- index - js --}}
<script src="{{ asset('js\index.js') }}"></script>

<script>
  $('document').ready(function(){
      setTimeOut(()=>{
          $('.alert-notification').fadeOut();
      }, 4000);
});
</script>

</body>
</html>
