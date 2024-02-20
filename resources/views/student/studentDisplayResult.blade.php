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

    <title>Student | Results </title>
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
                    <img src="{{ asset('img\soma-high-resolution-logo-white-transparent.png') }}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
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
                                <a href="studentAcademicRecords" class="nav-link active">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Academic Records
                                        <i class="right fas fa-angle-left"></i>
                                        <span class="right badge badge-primary">1</span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="studentAcademicRecords" class="nav-link active">
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
                                <a href="studentProfile" class="nav-link">
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
                                <h1 class="m-0"> {{ $student->username }} Results</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="studentDashboard">Home</a></li>
                                    <li class="breadcrumb-item">

                                        @if ($id == 1)
                                            {{ 'First' }}
                                        @elseif($id == 2)
                                            {{ 'Second' }}
                                        @elseif($id == 3)
                                            {{ 'Third' }}
                                        @elseif($id == 4)
                                            {{ 'Fourth' }}
                                        @endif

                                        Year Results
                                    </li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">


                        <div class="row upper-row pt-2 pb-4">
                            <div class="card p-3 my-2"
                                style="display: flex; flex-direction: row; align-items:center; justify-content: space-around;">

                                <div class="text-center">
                                    <div class="h5">Annual Points</div>
                                    <div class="fs-3 fw-bolder text-success">
                                        @php
                                            $AnnualPoints = 0;
                                            if ($results->count() != 0) {
                                                foreach ($results as $result) {
                                                    $AnnualPoints += $result->marks;
                                                }
                                            }

                                            echo $AnnualPoints;
                                        @endphp
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="h5">Annual Total Subjects</div>
                                    <div class="fs-3 fw-bolder text-success">

                                        @php
                                            foreach ($modules as $module) {
                                                if ($module->where('semester_year', 'like', $id . 'S%')) {
                                                    $totalModules = $module->where('semester_year', 'like', $id . 'S%')->count();
                                                }
                                            }

                                            echo $totalModules;
                                        @endphp

                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="h5">Annual Grade</div>
                                    <div class="fs-3 fw-bolder text-success">
                                        @php

                                            $gpaSem1 = session('gpas1');
                                            $gpaSem2 = session('gpas2');

                                            $annualGPA = number_format(0, 4);

                                            if ($totalModules != 0) {
                                                $annualGPA = number_format(($gpaSem1 + $gpaSem2) / 2, 4);
                                            } else {
                                                $annualGPA = number_format(0, 4);
                                            }

                                            // calculate annual gpa grade
                                            if ($annualGPA >= 4.0 && $annualGPA <= 5.0) {
                                                echo '<span class="fw-bold text-success">A</span>';
                                            } elseif ($annualGPA >= 3.0 && $annualGPA < 4.0) {
                                                echo '<span class="fw-bold text-success">B</span>';
                                            } elseif ($annualGPA >= 2.0 && $annualGPA > 3.0) {
                                                echo '<span class="fw-bold text-success">C</span>';
                                            } elseif ($annualGPA >= 1.0 && $annualGPA < 2.0) {
                                                echo '<span class="fw-bold text-warning">D</span>';
                                            } elseif ($annualGPA >= 0.0 && $annualGPA < 1.0) {
                                                echo '<span class="fw-bold text-danger">F</span>';
                                            }
                                        @endphp
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="h5">Annual GPA</div>
                                    <div class="fs-3 fw-bolder text-success">
                                        @php
                                            echo $annualGPA;
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row bottom-row pb-3">
                            <div class="col-md-6">
                                <div class="card p-3">
                                    <div class="h4 text-center py-2">

                                        @if ($id == 1)
                                            {{ 'FIRST' }}
                                        @elseif($id == 2)
                                            {{ 'SECOND' }}
                                        @elseif($id == 3)
                                            {{ 'THIRD' }}
                                        @elseif($id == 4)
                                            {{ 'FOURTH' }}
                                        @endif

                                        YEAR - SEMESTER ONE
                                    </div>


                                    <div class="detail py-3">

                                        <div class="text"> Student Name: <span
                                                class="fw-bold">{{ $student->fullname }}</span> </div>
                                        <div class="text"> Course Name: <span
                                                class="fw-bold">{{ $student->course->name }}</span> </div>
                                        <div class="text"> Semester Points: <span class="fw-bold">
                                                @php
                                                    $points = 0;

                                                    if (
                                                        optional($results)
                                                            ->where('semester_year', $id . 'S1')
                                                            ->count() != 0
                                                    ) {
                                                        foreach (optional($results)->where('semester_year', $id . 'S1') as $result) {
                                                            if ($result) {
                                                                $points += $result->marks;
                                                            }
                                                        }
                                                    }
                                                    echo $points;
                                                @endphp
                                            </span> </div>
                                        <div class="text"> GPA: <span class="fw-bold">
                                                @php

                                                    $gpaS1 = number_format(0, 4);
                                                    $gpaS2 = number_format(0, 4);

                                                    $sumOfGrades = 0;
                                                    $tot = 0;

                                                    if ($results->count() != 0) {
                                                        foreach (optional($results)->where('semester_year', $id . 'S1') as $result) {
                                                            if ($result) {
                                                                $g = $result->grade;
                                                                $totalS1Modules = $modules->where('semester_year', $id . 'S1')->count();

                                                                switch ($g) {
                                                                    case 'A':
                                                                        $gValue = 5.0;
                                                                        break;
                                                                    case 'B+':
                                                                        $gValue = 4.0;
                                                                        break;
                                                                    case 'B':
                                                                        $gValue = 3.0;
                                                                        break;
                                                                    case 'C':
                                                                        $gValue = 2.0;
                                                                        break;
                                                                    case 'D':
                                                                        $gValue = 1.0;
                                                                        break;
                                                                    default:
                                                                        $gValue = 0.0;
                                                                        break;
                                                                }
                                                                $sumOfGrades += $gValue;
                                                            }
                                                        }

                                                        if ($totalS1Modules != 0) {
                                                            $gpaS1 = number_format($sumOfGrades / $totalS1Modules, 4);
                                                            session(['gpas1' => $gpaS1]);
                                                            echo $gpaS1;
                                                        } else {
                                                            $gpaS1 = number_format(0, 4);
                                                            echo $gpaS1;
                                                        }
                                                    } else {
                                                        echo number_format(0, 4);
                                                    }
                                                @endphp

                                            </span> </div>
                                    </div>

                                    <div class="table-responsive py-3">
                                        <table class="table table-hover table-striped table-bordered w-100">
                                            <thead>
                                                <th rowspan="1">#</th>
                                                <td>Module Code</td>
                                                <td>Module Name</td>
                                                <td>CA</td>
                                                <td>FE</td>
                                                <td>Grade</td>
                                                <td>Status</td>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count = 0;
                                                    $count++;
                                                @endphp

                                                @if (optional($results)->where('semester_year', $id . 'S1')->count() != 0)

                                                    @foreach ($results->where('semester_year', $id . 'S1') as $result)
                                                        <tr>
                                                            <td> <?= $count++ ?> </td>
                                                            <td> {{ $result->module->module_code }} </td>
                                                            <td> {{ $result->module->name }} </td>
                                                            <td> {{ $result->ca }} </td>
                                                            <td> {{ $result->fe }} </td>
                                                            <td> {{ $result->grade }} </td>
                                                            <td>
                                                                @if ($result->status == 'PASS')
                                                                    <span
                                                                        class="text-success fw-bold">{{ $result->status }}</span>
                                                                @elseif($result->status == 'AVERAGE' || $result->status == 'SUPP')
                                                                    <span
                                                                        class="text-warning fw-bold">{{ $result->status }}</span>
                                                                @elseif($result->status == 'AVERAGE' || $result->status == 'DISO')
                                                                    <span
                                                                        class="text-danger fw-bold">{{ $result->status }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr class="w-100 text-center py-2">
                                                        <td colspan="7" class="text-center text-danger"> <i
                                                                class="bi bi-trash"></i> Empty Results</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>

                                        <div class="d-flex"
                                            style="display: flex; align-items:center; justify-content:flex-end;">
                                            <div class="box-count pt-1 text-muted">
                                                All Results: <span>
                                                    {{ optional($results)->where('semester_year', $id . 'S1')->count() }}
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card p-3">
                                    <div class="h4 text-center py-2">

                                        @if ($id == 1)
                                            {{ 'FIRST' }}
                                        @elseif($id == 2)
                                            {{ 'SECOND' }}
                                        @elseif($id == 3)
                                            {{ 'THIRD' }}
                                        @elseif($id == 4)
                                            {{ 'FOURTH' }}
                                        @endif

                                        YEAR - SEMISTER TWO
                                    </div>

                                    <div class="detail py-3">

                                        <div class="text"> Student Name: <span
                                                class="fw-bold">{{ $student->fullname }}</span> </div>
                                        <div class="text"> Course Name: <span
                                                class="fw-bold">{{ $student->course->name }}</span> </div>
                                        <div class="text"> Semester Points: <span class="fw-bold">
                                                @php
                                                    $points = 0;

                                                    if (
                                                        optional($results)
                                                            ->where('semester_year', $id . 'S2')
                                                            ->count() != 0
                                                    ) {
                                                        foreach (optional($results)->where('semester_year', $id . 'S2') as $result) {
                                                            if ($result) {
                                                                $points += $result->marks;
                                                            }
                                                        }
                                                    }
                                                    echo $points;
                                                @endphp
                                            </span> </div>
                                        <div class="text"> GPA: <span class="fw-bold">
                                                @php
                                                    $sumOfGrades = 0;
                                                    $tot = 0;
                                                    $totalS2Modules = 0;

                                                    if ($results->count() != 0) {
                                                        foreach (optional($results)->where('semester_year', $id . 'S2') as $result) {
                                                            if ($result) {
                                                                $g = $result->grade;
                                                                $totalS2Modules = $modules->where('semester_year', $id . 'S2')->count();

                                                                switch ($g) {
                                                                    case 'A':
                                                                        $gValue = 5.0;
                                                                        break;
                                                                    case 'B+':
                                                                        $gValue = 4.0;
                                                                        break;
                                                                    case 'B':
                                                                        $gValue = 3.0;
                                                                        break;
                                                                    case 'C':
                                                                        $gValue = 2.0;
                                                                        break;
                                                                    case 'D':
                                                                        $gValue = 1.0;
                                                                        break;
                                                                    default:
                                                                        $gValue = 0.0;
                                                                        break;
                                                                }
                                                                $sumOfGrades += $gValue;
                                                            }
                                                        }

                                                        if ($totalS2Modules != 0) {
                                                            $gpaS2 = number_format($sumOfGrades / $totalS2Modules, 4);
                                                            session(['gpas2' => $gpaS2]);
                                                            echo $gpaS2;
                                                        } else {
                                                            $gpaS2 = number_format(0, 4);
                                                            echo $gpaS2;
                                                        }
                                                    } else {
                                                        echo number_format(0, 4);
                                                    }
                                                @endphp

                                            </span> </div>
                                    </div>

                                    <div class="table-responsive py-3">
                                        <table class="table table-hover table-striped table-bordered w-100">
                                            <thead>
                                                <th rowspan="1">#</th>
                                                <td>Module Code</td>
                                                <td>Module Name</td>
                                                <td>CA</td>
                                                <td>FE</td>
                                                <td>Grade</td>
                                                <td>Status</td>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count = 0;
                                                    $count++;
                                                @endphp

                                                @if (optional($results)->where('semester_year', $id . 'S2')->count() != 0)

                                                    @foreach (optional($results)->where('semester_year', $id . 'S2') as $result)
                                                        <tr>
                                                            <td> <?= $count++ ?> </td>
                                                            <td> {{ $result->module->module_code }} </td>
                                                            <td> {{ $result->module->name }} </td>
                                                            <td> {{ $result->ca }} </td>
                                                            <td> {{ $result->fe }} </td>
                                                            <td> {{ $result->grade }} </td>
                                                            <td>
                                                                @if ($result->status == 'PASS')
                                                                    <span
                                                                        class="text-success fw-bold">{{ $result->status }}</span>
                                                                @elseif($result->status == 'AVERAGE')
                                                                    <span
                                                                        class="text-warning fw-bold">{{ $result->status }}</span>
                                                                @else
                                                                    <span
                                                                        class="text-danger fw-bold">{{ $result->status }}</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr class="w-100 text-center py-2">
                                                        <td colspan="7" class="text-center text-danger"> <i
                                                                class="bi bi-trash"></i> Empty Results</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>


                                        <div class="d-flex"
                                            style="display: flex; align-items:center; justify-content:flex-end;">
                                            <div class="box-count pt-1 text-muted">
                                                All Results: <span>
                                                    {{ optional($results)->where('semester_year', $id . 'S2')->count() }}
                                                </span>
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
