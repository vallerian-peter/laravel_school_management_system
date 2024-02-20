    
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

    <title>Student | Transcript</title>
</head>
<style>
  .upper-tables tbody td,
  .upper-tables tbody th,
  .upper-tables thead th
  {
     border: none !important;
  }
  .table-award tbody td
  {
    padding-bottom: 25px !important;
  }
</style>
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
    <a href="studentDashboard" class="brand-link">
      <img src="{{ asset('img\soma-high-resolution-logo-white-transparent.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SOMA - APP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ $student->avatar ? asset('storage/' . $student->avatar) : asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ $student->username }} </a>
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
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="studentSelfService" class="nav-link active">
              <i class="nav-icon fas fa-user-gear"></i>
              <p>
                Self Services
                <i class="right fas fa-angle-left"></i>
                <span class="right badge badge-primary">1</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="studentTranscript" class="nav-link active">
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
            <h1 class="m-0"> {{ $student->username }} Transcript</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="studentDashboard">Home</a></li>
              <li class="breadcrumb-item"> Student-Transcript </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="w-100 pb-3">
            <div class="buttons" style="display: flex; align-items:center; justify-content: flex-end;">
                <a href="trascriptDownload" class="btn btn-danger btn-sm"> <i class="bi bi-file-earmark-pdf"></i> Download PDF</a>
            </div>
        </div>

        <div class="box-transcript pb-5">
          <div class="transcript card py-4 p-2">

            <div class="upper-details first-page p-3">
                <div class="upper-row pb-5">
                    <div class="row pb-5">
                        <div class="col-md-2 " style="display:flex; flex-direction: column; align-items:center; justify-content:center;">
                            <div class="image">
                                <img src="{{ asset('img\soma-high-resolution-logo-white-transparent.png') }}" width="100" height="100">
                            </div>
                        </div>
                        <div class="col-md-8">
                            
                            <div class="text-center py-2">
                                <div class="h5 fw-bold pb-3">DAR-ES-SALAAM INSTITUTE OF TECHNOLOGY</div>
                                <div class="h5 fw-bold">ACADEMIC TRANSCRIPT</div>
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="middle-row py-5  px-3">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="detail" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                <div class="text-center">
                                    <div class="fw-bold">BIRTH DATE</div>
                                    <div class="fw-semibold">{{ $student->birthdate }}</div>
                                </div>
                                <div class="text-center">
                                    <div class="fw-bold">GENDER</div>
                                    <div class="fw-semibold">{{ Str::upper($student->gender) }}</div>
                                </div>
                                <div class="text-center">
                                    <div class="fw-bold">REG NO.</div>
                                    <div class="fw-semibold">{{ $student->reg_no }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="down-row px-3 pt-4">
                    <div class="row">
                      <div class="col-md-8"> 

                        <table class="table upper-tables w-100">
                          <thead class="d-none">
                              <th>Name</th>
                              <th>Value</th>
                          </thead>
                          <tbody>
                              <tr>
                                 <th rowspan="1" width="320" class="fw-bold">DATE OF ADMISSION: </th>
                                 <td class="fw-semibold">{{ Str::upper( $student->created_at->format('F')) .', '. $student->created_at->format('Y') }}</td>
                              </tr>
                          </tbody>
                        </table>

                      </div>
                      <div class="col-md-4"> 
                        <table class="table upper-tables w-100">
                          <thead class="d-none">
                              <th>Name</th>
                              <th>Value</th>
                          </thead>
                          <tbody>
                              <tr>
                                 <th rowspan="1" class="fw-bold">DATE OF GRADUATION:</th>
                                 <td class="fw-semibold float-right">
                                    @php
                                        $durationY = (int) Str::before($student->course->year_duration, 'years');
                                        $regDate = (int) $student->created_at->format('Y');
                                        echo Str::upper( $student->created_at->format('F')).", ". $durationY + $regDate;
                                    @endphp  
                                 </td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-8">
                        <table class="table table-award upper-tables w-100">
                          <thead class="d-none">
                              <th>Name</th>
                              <th>Value</th>
                          </thead>
                          <tbody>
                              <tr>
                                 <th rowspan="1" class="fw-bold">AWARD TITLE: </th>
                                 <td class="fw-semibold">{{ Str::upper($student->course->name) }}</td>
                              </tr>
                              <tr>
                                  <th rowspan="1" class="fw-bold">CLASSIFICATION OF AWARDS:</th>
                                  <td class="fw-semibold">
                                    @php
                                      $overallgpa = session()->get('overallgpa');
                                      
                                      if($overallgpa >= 4.5 && $overallgpa <= 5.0)
                                      {
                                          echo "UPPER FIRST CLASS";
                                      }
                                      else if($overallgpa >= 4.0 && $overallgpa < 4.0)
                                      {
                                         echo "LOWER FIRST CLASS";
                                      }
                                      else if($overallgpa >= 3.5 && $overallgpa < 4.0)
                                      {
                                          echo "UPPER SECOND CLASS";
                                      }
                                      else if($overallgpa >= 3.0 && $overallgpa < 3.5)
                                      {
                                          echo "LOWER SECOND CLASS";
                                      }
                                      else if($overallgpa >= 2.5 && $overallgpa < 3.0)
                                      {
                                          echo "UPPER THIRD CLASS";
                                      }
                                      else if($overallgpa >= 2.0 && $overallgpa < 2.0)
                                      {
                                          echo "LOWER THIRD CLASS";
                                      }
                                      elseif ($overallgpa >= 1.5 && $overallgpa < 2.0) {
                                          echo "UPPER FOURTH CLASS";
                                      }
                                      else if ($overallgpa >= 1.0 && $overallgpa < 1.5) {
                                          echo "LOWER FOURTH CLASS";
                                      }
                                      else if($overallgpa >= 0.5 && $overallgpa < 1.0)
                                      {
                                          echo "UPPER FIFTH CLASS";
                                      }
                                      else if ($overallgpa >= 0.0 && $overallgpa < 0.5) {
                                          echo "LOWER FIFTH CLASS";
                                      }
                                    @endphp
                                  </td>
                              </tr>
                              <tr>
                                  <th rowspan="1" class="fw-bold">OVERALL GPA:</th>
                                  <td class="fw-semibold">
                                    @php
                                        $gpaS1 = session()->get('S1gpa');
                                        $gpaS2 = session()->get('S2gpa');
                                        $gpaS3 = session()->get('S3gpa');
                                        $gpaS4 = session()->get('S4gpa');
                                        $gpaS5 = session()->get('S5gpa');
                                        $gpaS6 = session()->get('S6gpa');

                                        $overallgpa = ($gpaS1 + $gpaS2 + $gpaS3 + $gpaS4 + $gpaS5 + $gpaS6) / 6;
                                        session(['overallgpa' => $overallgpa]);
                                        echo $overallgpa;
                                    @endphp
                                  </td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                </div>
            </div>

            <div class="second-page py-4">
                <div class="p-3 border">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="fw-bold p-2" style="background-color: #e2e1e1;">SEMESTER: 01</div>
                            <table class="table table-border">
                                <thead class="table-secondary">
                                    <th class="fw-semibold">CODE</th>
                                    <th class="fw-semibold">MODULE NAME</th>
                                    <th class="fw-semibold">GRADE</th>
                                </thead>
                                <tbody>
                                   @if ($modules->count() != 0)
                                        @foreach (optional($modules)->where('semester_year','1S1') as $module)
                                            <tr>
                                                <td>{{ $module->module_code }}</td>
                                                <td>{{ $module->name }}</td>
                                                <td class="text-center">
                                                      @php
                                                        $sumOfGrades = 0;
                                                        $result = $student->result->where('module_id', $module->id)->first();  
                                                        if(!empty($result->grade))
                                                        {
                                                            switch ($result->grade) {
                                                              case 'A':
                                                                  $gradeValue = 5.0;
                                                                  break;
                                                              case 'B+':
                                                                  $gradeValue = 4.0;
                                                                  break;
                                                              case 'B':
                                                                  $gradeValue = 3.0;
                                                                  break;
                                                              case 'C':
                                                                  $gradeValue = 2.0;
                                                                  break;
                                                              case 'D':
                                                                  $gradeValue = 1.0;
                                                                  break;
                                                              default:
                                                                  $gradeValue = 0.0;
                                                                  break;
                                                            }

                                                            $sumOfGrades += $gradeValue;
                                                        }
                                                        else {
                                                            $sumOfGrades = 0;
                                                        }
                                                      @endphp
                                                      @if ($result)
                                                          {{ $result->grade }}
                                                      @else
                                                          {{ '-' }}
                                                      @endif
                                                </td>
                                            </tr>
                                        @endforeach                                     
                                   @else
                                        <tr class="table-secondary">
                                          <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i> Empty Modules </span> </td>
                                        </tr>
                                   @endif
                                        <tr class="table-secondary">
                                            <td colspan="3">SEMESTER GPA: <span class="fw-bold">
                                              @php
                                                  $totalS1Modules = $modules->where('semester_year', '1S1')->count();
                                                  $S1gpa = number_format(($sumOfGrades/$totalS1Modules) , 4);
                                                  session(['S1gpa' => $S1gpa]);
                                                  echo $S1gpa;
                                              @endphp
                                            </span> </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                          <div class="fw-bold p-2" style="background-color: #e2e1e1;">SEMESTER: 03</div>
                          <table class="table table-border">
                              <thead class="table-secondary">
                                  <th class="fw-semibold">CODE</th>
                                  <th class="fw-semibold">MODULE NAME</th>
                                  <th class="fw-semibold">GRADE</th>
                              </thead>
                              <tbody>
                                 @if ($modules->count() != 0)
                                      @foreach (optional($modules)->where('semester_year','2S1') as $module)
                                          <tr>
                                              <td>{{ $module->module_code }}</td>
                                              <td>{{ $module->name }}</td>
                                              <td class="text-center">
                                                @php
                                                $result = $student->result->where('module_id', $module->id)->first();

                                                if(!empty($result->grade))
                                                {
                                                    switch ($result->grade) {
                                                      case 'A':
                                                          $gradeValue = 5.0;
                                                          break;
                                                      case 'B+':
                                                          $gradeValue = 4.0;
                                                          break;
                                                      case 'B':
                                                          $gradeValue = 3.0;
                                                          break;
                                                      case 'C':
                                                          $gradeValue = 2.0;
                                                          break;
                                                      case 'D':
                                                          $gradeValue = 1.0;
                                                          break;
                                                      default:
                                                          $gradeValue = 0.0;
                                                          break;
                                                    }
  
                                                    $sumOfGradesS3 += $gradeValue;
                                                }
                                                else {
                                                    $sumOfGradesS3 = 0;
                                                }
                                                @endphp
                                                @if ($result)
                                                    {{ $result->grade }}
                                                @else
                                                    {{ '-' }}
                                                @endif
                                          </td>
                                          </tr>
                                      @endforeach                                       
                                 @else
                                      <tr class="table-secondary">
                                        <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i> Empty Modules </span> </td>
                                      </tr>
                                 @endif
                                      <tr class="table-secondary">
                                          <td colspan="3">SEMESTER GPA: <span class="fw-bold">
                                              @php
                                                $totalS3Modules = $modules->where('semester_year', '1S1')->count();
                                                $S3gpa = number_format(($sumOfGradesS3/$totalS3Modules) , 4);
                                                session(['S3gpa' => $S3gpa]);
                                                echo $S3gpa;
                                              @endphp  
                                          </span> </td>
                                      </tr>
                              </tbody>
                          </table>
                      </div>
                      <div class="col-md-4">
                        <div class="fw-bold p-2" style="background-color: #e2e1e1;">SEMESTER: 05</div>
                        <table class="table table-border">
                            <thead class="table-secondary">
                                <th class="fw-semibold">CODE</th>
                                <th class="fw-semibold">MODULE NAME</th>
                                <th class="fw-semibold">GRADE</th>
                            </thead>
                            <tbody>
                               @if ($modules->count() != 0)
                                    @foreach (optional($modules)->where('semester_year','3S1') as $module)
                                        <tr>
                                            <td>{{ $module->module_code }}</td>
                                            <td>{{ $module->name }}</td>
                                            <td class="text-center">
                                              @php
                                                $result = $student->result->where('module_id', $module->id)->first();  

                                                if(!empty($result->grade))
                                                {
                                                    switch ($result->grade) {
                                                      case 'A':
                                                          $gradeValue = 5.0;
                                                          break;
                                                      case 'B+':
                                                          $gradeValue = 4.0;
                                                          break;
                                                      case 'B':
                                                          $gradeValue = 3.0;
                                                          break;
                                                      case 'C':
                                                          $gradeValue = 2.0;
                                                          break;
                                                      case 'D':
                                                          $gradeValue = 1.0;
                                                          break;
                                                      default:
                                                          $gradeValue = 0.0;
                                                          break;
                                                    }
  
                                                    $sumOfGradesS5 += $gradeValue;
                                                }
                                                else {
                                                    $sumOfGradesS5 = 0;
                                                }
                                              @endphp
                                              @if ($result)
                                                  {{ $result->grade }}
                                              @else
                                                  {{ '-' }}
                                              @endif
                                        </td>
                                        </tr>
                                    @endforeach                                       
                               @else
                                    <tr class="table-secondary">
                                      <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i> Empty Modules </span> </td>
                                    </tr>
                               @endif
                                    <tr class="table-secondary">
                                        <td colspan="3">SEMESTER GPA: <span class="fw-bold">
                                          @php
                                              $totalS5Modules = $modules->where('semester_year', '3S1')->count();
                                              $S5gpa = number_format(($sumOfGradesS5/$totalS5Modules) , 4);
                                              session(['S5gpa' => $S5gpa]);
                                              echo $S5gpa;
                                          @endphp  
                                        </span> </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>

                <div class="p-3">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="fw-bold p-2" style="background-color: #e2e1e1;">SEMESTER: 02</div>
                        <table class="table table-border">
                            <thead class="table-secondary">
                                <th class="fw-semibold">CODE</th>
                                <th class="fw-semibold">MODULE NAME</th>
                                <th class="fw-semibold">GRADE</th>
                            </thead>
                            <tbody>
                               @if ($modules->count() != 0)
                                    @foreach (optional($modules)->where('semester_year','1S2') as $module)
                                        <tr>
                                            <td>{{ $module->module_code }}</td>
                                            <td>{{ $module->name }}</td>
                                            <td class="text-center">
                                              @php
                                                $result = $student->result->where('module_id', $module->id)->first(); 
                                                if(!empty($result->grade))
                                                {
                                                    switch ($result->grade) {
                                                      case 'A':
                                                          $gradeValue = 5.0;
                                                          break;
                                                      case 'B+':
                                                          $gradeValue = 4.0;
                                                          break;
                                                      case 'B':
                                                          $gradeValue = 3.0;
                                                          break;
                                                      case 'C':
                                                          $gradeValue = 2.0;
                                                          break;
                                                      case 'D':
                                                          $gradeValue = 1.0;
                                                          break;
                                                      default:
                                                          $gradeValue = 0.0;
                                                          break;
                                                    }
  
                                                    $sumOfGradesS2 += $gradeValue;
                                                }
                                                else {
                                                    $sumOfGradesS2 = 0;
                                                }  
                                              @endphp
                                              @if ($result)
                                                  {{ $result->grade }}
                                              @else
                                                  {{ '-' }}
                                              @endif
                                        </td>
                                        </tr>
                                    @endforeach                                       
                               @else
                                    <tr class="table-secondary">
                                      <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i> Empty Modules </span> </td>
                                    </tr>
                               @endif
                                    <tr class="table-secondary">
                                        <td colspan="3">SEMESTER GPA: <span class="fw-bold">
                                          @php
                                              $totalS2Modules = $modules->where('semester_year', '3S1')->count();
                                              $S2gpa = number_format(($sumOfGradesS2/$totalS2Modules) , 4);
                                              session(['S2gpa' => $S2gpa]);
                                              echo $S2gpa;
                                          @endphp  
                                        </span> </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                      <div class="fw-bold p-2" style="background-color: #e2e1e1;">SEMESTER: 04</div>
                      <table class="table table-border">
                          <thead class="table-secondary">
                              <th class="fw-semibold">CODE</th>
                              <th class="fw-semibold">MODULE NAME</th>
                              <th class="fw-semibold">GRADE</th>
                          </thead>
                          <tbody>
                             @if ($modules->count() != 0)
                                  @foreach (optional($modules)->where('semester_year','2S2') as $module)
                                      <tr>
                                          <td>{{ $module->module_code }}</td>
                                          <td>{{ $module->name }}</td>
                                          <td class="text-center">
                                            @php
                                              $result = $student->result->where('module_id', $module->id)->first(); 

                                              if(!empty($result->grade))
                                                {
                                                    switch ($result->grade) {
                                                      case 'A':
                                                          $gradeValue = 5.0;
                                                          break;
                                                      case 'B+':
                                                          $gradeValue = 4.0;
                                                          break;
                                                      case 'B':
                                                          $gradeValue = 3.0;
                                                          break;
                                                      case 'C':
                                                          $gradeValue = 2.0;
                                                          break;
                                                      case 'D':
                                                          $gradeValue = 1.0;
                                                          break;
                                                      default:
                                                          $gradeValue = 0.0;
                                                          break;
                                                    }
  
                                                    $sumOfGradesS4 += $gradeValue;
                                                }
                                                else {
                                                    $sumOfGradesS4 = 0;
                                                }  

                                            @endphp
                                            @if ($result)
                                                {{ $result->grade }}
                                            @else
                                                {{ '-' }}
                                            @endif
                                      </td>
                                      </tr>
                                  @endforeach                                       
                             @else
                                  <tr class="table-secondary">
                                    <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i> Empty Modules </span> </td>
                                  </tr>
                             @endif
                                  <tr class="table-secondary">
                                      <td colspan="3">SEMESTER GPA: <span class="fw-bold">
                                        @php
                                            $totalS4Modules = $modules->where('semester_year', '3S1')->count();
                                            $S4gpa = number_format(($sumOfGradesS4/$totalS4Modules) , 4);
                                            session(['S4gpa' => $S4gpa]);
                                            echo $S4gpa;
                                        @endphp    
                                      </span> </td>
                                  </tr>
                          </tbody>
                      </table>
                  </div>
                  <div class="col-md-4">
                    <div class="fw-bold p-2" style="background-color: #e2e1e1;">SEMESTER: 06</div>
                    <table class="table table-border">
                        <thead class="table-secondary">
                            <th class="fw-semibold">CODE</th>
                            <th class="fw-semibold">MODULE NAME</th>
                            <th class="fw-semibold">GRADE</th>
                        </thead>
                        <tbody>
                           @if ($modules->count() != 0)
                                @foreach ($modules->where('semester_year','3S2') as $module)
                                    <tr>
                                        <td>{{ $module->module_code }}</td>
                                        <td>{{ $module->name }}</td>
                                        <td class="text-center">
                                          @php
                                            $result = $student->result->where('module_id', $module->id)->first();   

                                            
                                            if(!empty($result->grade))
                                                {
                                                    switch ($result->grade) {
                                                      case 'A':
                                                          $gradeValue = 5.0;
                                                          break;
                                                      case 'B+':
                                                          $gradeValue = 4.0;
                                                          break;
                                                      case 'B':
                                                          $gradeValue = 3.0;
                                                          break;
                                                      case 'C':
                                                          $gradeValue = 2.0;
                                                          break;
                                                      case 'D':
                                                          $gradeValue = 1.0;
                                                          break;
                                                      default:
                                                          $gradeValue = 0.0;
                                                          break;
                                                    }
  
                                                    $sumOfGradesS6 += $gradeValue;
                                                }
                                                else {
                                                    $sumOfGradesS6 = 0;
                                                }  

                                          @endphp
                                          @if ($result)
                                              {{ $result->grade }}
                                          @else
                                              {{ '-' }}
                                          @endif
                                    </td>
                                    </tr>
                                @endforeach                                       
                           @else
                                <tr class="table-secondary">
                                  <td colspan="3" class="text-danger"> <i class="bi bi-trash"></i> Empty Modules </td>
                                </tr>
                           @endif
                                <tr class="table-secondary">
                                    <td colspan="3">SEMESTER GPA: <span class="fw-bold">
                                    @php
                                        $totalS6Modules = $modules->where('semester_year', '3S1')->count();
                                        $S6gpa = number_format(($sumOfGradesS6/$totalS6Modules) , 4);
                                        session(['S6gpa' => $S6gpa]);
                                        echo $S6gpa;
                                    @endphp    
                                    </span> </td>
                                </tr>
                        </tbody>
                    </table>
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
