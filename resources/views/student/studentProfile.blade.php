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
        <link rel="stylesheet"
            href="{{ asset('bootstrap-icons-1.11.3\bootstrap-icons-1.11.3\font\bootstrap-icons.min.css') }}">
        <link rel="stylesheet"
            href="{{ asset('fontawesome-free-6.4.2-web\fontawesome-free-6.4.2-web\css\fontawesome.min.css') }}">
        <!-- C:\xampp\htdocs\LARAVEL PROJECTS\prms-app\public\AdminLTE-3.2.0\AdminLTE-3.2.0\plugins\fontawesome-free\css\all.min.css -->
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="AdminLTE-3.2.0/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">

        <link rel="stylesheet" href="{{ asset('css\index.css') }}">

        <title>Student | Profile</title>
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
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
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
                            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                                role="button">
                                <i class="fas fa-th-large"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="studentDashboard" class="brand-link">
                        <img src="{{ asset('img\soma-high-resolution-logo-white-transparent.png') }}"
                            alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">SOMA - APP</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="{{ $student->avatar ? asset('storage/' . $student->avatar) : asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/img/user2-160x160.jpg') }}"
                                    class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block"> {{ $student->username }} </a>
                            </div>
                        </div>

                        <!-- SidebarSearch Form -->
                        <div class="form-inline">
                            <div class="input-group" data-widget="sidebar-search">
                                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-sidebar">
                                        <i class="fas fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                                            <a href="studentDashboard" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>SOMA Dashboard</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="studentAcademicRecords" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Academic Records
                                            <i class="right fas fa-angle-left"></i>
                                            <span class="right badge badge-primary">1</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="studentAcademicRecords" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Exam Results</p>
                                                {{-- <span class="right badge badge-success"></span> --}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="studentCourseModules" class="nav-link">
                                        <i class="nav-icon fas fa-book-open"></i>
                                        <p>
                                            Course Modules
                                            <span class="right badge badge-primary"></span>
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="studentSelfService" class="nav-link">
                                      <i class="nav-icon fas fa-user-gear"></i>
                                      <p>
                                        Self Services
                                        <i class="right fas fa-angle-left"></i>
                                        <span class="right badge badge-primary">1</span>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="studentTranscript" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Transcript</p>
                                          {{-- <span class="right badge badge-success"></span> --}}
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                        

                                <li class="nav-item">
                                    <a href="studentProfile" class="nav-link active">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>
                                            Profile
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="studentLogout" class="nav-link">
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
                                    <h1 class="m-0"> {{ $student->username }} Profile</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="studentDashboard">Home</a></li>
                                        <li class="breadcrumb-item">Student-Profile</li>
                                    </ol>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header -->

                    <!-- Main content -->
                    <div class="content">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-8">

                                    <div class="card px-3 pt-3 pb-4">
                                        <div class="h2">Student Avatar</div>
                                        <p>This avatar profile is default assigned to null with default image, by
                                            Updating it will change the to your image</p>

                                        <div class="avatar-img">
                                            <div class="row">
                                                <div class="col-md-4"
                                                    style="display: flex; flex-direction: column; align-items:center; justify-content:center;">
                                                    <div id="imagePreview">
                                                        <img id="previewImg"
                                                            src="{{ $student->avatar ? asset('storage/' . $student->avatar) : asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/img/user2-160x160.jpg') }}"
                                                            width="150px" height="150px"
                                                            class="brand-image img-circle elevation-3"
                                                            style="opacity: .8; object-fit:cover;">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <form action="studentUpdateAvatar" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="avatarInput" class="form-label">Update
                                                                Avatar</label>
                                                            <input type="file" id="avatarInput"
                                                                class="form-control" name="avatar" accept="image/*"
                                                                onchange="previewImage(this, {{ json_encode($student->avatar) }})">
                                                            <span class="text-danger"> @error('avatar')
                                                                    {{ $message }}
                                                                @enderror </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button type="submit" class="btn btn-dark">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="py-3">
                                        <div class="card px-3 py-4">
                                            <div class="h2">Student Details</div>
                                            <p>This details are your credentials from the database by changing </p>

                                            {{-- <div class="h3">Update Details</div> --}}
                                            <form action="updateDetails" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="fullname" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" name="fullname"
                                                        value="{{ $student->fullname }}">
                                                    <span class="text-danger"> @error('fullname')
                                                            {{ $message }}
                                                        @enderror </span>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ $student->email }}">
                                                    <span class="text-danger"> @error('email')
                                                            {{ $message }}
                                                        @enderror </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="username" class="form-control" name="username"
                                                        value="{{ $student->username }}">
                                                    <span class="text-danger"> @error('username')
                                                            {{ $message }}
                                                        @enderror </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="birthdate" class="form-label">Birthdate</label>
                                                    <input type="date" class="form-control" name="birthdate"
                                                        value="{{ $student->birthdate }}">
                                                    <span class="text-danger"> @error('birthdate')
                                                            {{ $message }}
                                                        @enderror </span>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="phone" class="form-control" name="phone"
                                                        value="{{ $student->phone }}">
                                                    <span class="text-danger"> @error('phone')
                                                            {{ $message }}
                                                        @enderror </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="reg_no" class="form-label">Registration No.</label>
                                                    <input type="reg_no" class="form-control" name="reg_no"
                                                        value="{{ $student->reg_no }}">
                                                    <span class="text-danger"> @error('reg_no')
                                                            {{ $message }}
                                                        @enderror </span>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-dark">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <div class="card px-3 py-3">
                                            <div class="h2">Student Gender</div>
                                            <p>This is a student gender providing information of who you are sexually, by uptating it means you have edited and making correctness
                                                <br> Your Gender: <span class="h6 fw-bold text-primary">{{ $student->gender }}
                                                </span>
                                            </p>
                                            <form action="updateGender" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">gender</label>
                                                    <select name="gender" id="gender" value="{{ $student->gender }}"class="form-control">
                                                        <option value="" selected>--choose gender--</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <span class="text-danger"> @error('gender')
                                                            {{ $message }}
                                                        @enderror </span>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-dark">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <div class="card px-3 py-3">
                                            <div class="h2">Student Course</div>
                                            <p>This Student Course is the course you choose from the sign up, changing
                                                this will cause th change the modules.
                                                <br> Your Course: <span
                                                    class="h6 fw-bold text-primary">{{ $student->course->name }}</span>
                                                </span>
                                            </p>

                                            <form action="updateCourse" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="course" class="form-label">Update Course</label>
                                                    <select id="course" name="course_id" class="form-control">
                                                        <option selected>--choose course--</option>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}"> {{ $course->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn  btn-dark">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>



                                    <div class="py-3">
                                        <div class="card px-3 py-3">
                                            <div class="h2"> <i class="bi bi-link text-success"></i> Update
                                                Password</div>
                                            <p>Update password is the course you choose from the sign up, changing this
                                                will cause th change the modules.</p>

                                            <form action="updatePassword" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="current_password" class="form-label">Current
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        name="currentpassword" value="{{ @old('currentpassword') }}"
                                                        id="current_password" placeholder="Current Password">
                                                    <span class="text-danger"> @error('currentpassword')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="new_password" class="form-label">New Password</label>
                                                    <input type="password" class="form-control" name="newpassword"
                                                        value="{{ @old('newpassword') }}" id="new_password"
                                                        oninput="validatePassword()" placeholder="New Password">
                                                    <span class="text-danger"> @error('newpassword')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="confirm_password" class="form-label">Confirm
                                                        Password</label>
                                                    <input type="text" class="form-control" name="confirmpassword"
                                                        id="confirm_password" oninput="validatePassword()"
                                                        placeholder="Confirm Password">
                                                    <span class="text-danger" id="confirmPassMessage">
                                                        @error('confirmpassword')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-dark">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-4"></div>
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
                    <strong>Copyright &copy; 2023-2026 <span class="text-primary">PRMS - APP</span> .</strong>
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
