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
    <!-- C:\xampp\htdocs\LARAVEL PROJECTS\SOMA-app\public\AdminLTE-3.2.0\AdminLTE-3.2.0\plugins\fontawesome-free\css\all.min.css -->
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

    <title>Lecture | All Results</title>
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
                <a href="lectureDashboard" class="brand-link">
                    <img src="{{ asset('img\soma-high-resolution-logo-white-transparent.png') }}"
                        alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">SOMA - APP</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ $lecture->avatar ? asset('storage/' . $lecture->avatar) : asset('AdminLTE-3.2.0/AdminLTE-3.2.0/dist/img/user2-160x160.jpg') }}"
                                class="img-circle elevation-2" alt="User Image"
                                style="object-fit: cover; width:40px; height:40px;">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"> {{ $lecture->username }} </a>
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
                                        <a href="lectureDashboard" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>SOMA Dashboard</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="lectureAllResults" class="nav-link active">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Results
                                        <i class="right fas fa-angle-left"></i>
                                        <span class="right badge badge-primary">1</span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="lectureAllResults" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>All Results</p>
                                            <span class="right badge badge-success">{{ $lecture->module->result->count() }}</span>
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
                                <h1 class="m-0"> {{ $lecture->username }} All-Results</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="lectureDashboard">Home</a></li>
                                    <li class="breadcrumb-item">All Results</li>
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
                                        This are all your students results from the current course selected, which linked up with your modules, Chao!
                                       <div> <i class="bi bi-circle text-success"></i> The Course / Department Name: <span class="fw-bold text-primary">
                                            @if (empty($lecture->module->department->course->name))
                                                {{ $lecture->module->department->name }}
                                            @else
                                                {{ $lecture->module->department->course->name }}
                                            @endif
                                        </span></div>
                                       <div> <i class="bi bi-circle text-success"></i> The Module: <span class="fw-bold text-primary">{{ $lecture->module->name }}</span></div>
                                    </p>

                                    <div class="table-responsive">
                                        <div class="py-2" style="display: flex; align-items:center; justify-content: space-between;">
                                            <div class="h3 py-2">
                                                All Students Results
                                            </div>
                                            
                                            <div class="search">
                                                <input type="search" class="form-control m-1" name="search" id="search-result" placeholder="Search Student Result...">
                                            </div>

                                            <div class="g-3">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ModaladdResult">+Add Result</a>
                                                <a href="addCsvResults" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ModaladdCsvResult"> <i class="bi bi-file-earmark-spreadsheet"></i> Excel | Add Results</a>
                                                <a href="{{ asset('img\BENG EXCEL RESULT SAMPLE.xlsx') }}" class="btn btn-outline-success rounded btn-sm fw-bold"> <i class="bi bi-file-earmark-spreadsheet"></i> Excel Sample </a>
                                            </div>
                                        </div>
                                        <table
                                                class="table table-responsive table-bordered table-striped table-hover">
                                        <thead class="table-dark">
                                            <th>#</th>
                                            <th>Student Name</th>
                                            <th>Registration No.</th>
                                            <th>CA</th>
                                            <th>FE</th>
                                            <th>Marks</th>
                                            <th>Grade</th>
                                            <th>Status</th>
                                            <th>Date Created</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $id = 0;
                                                $id++;
                                            ?>

                                        @if($students->count() != 0)
                                            @foreach ($students as $student)
                                              <tr>
                                                <th rowspan="1"> <?=$id++; ?> </th>
                                                <td>{{ $student->fullname }}</td>
                                                <td>{{ $student->reg_no }}</td>
                                               
                                                @php
                                                    $result = $student->result->where('module_id', $lecture->module->id)->first();
                                                @endphp

                                                <td>
                                                    @if (empty($result->ca))
                                                        {{ '' }}
                                                    @else
                                                        {{ $result->ca }}
                                                    @endif
                                                </td>
                                                
                                                <td>
                                                    @if (empty($result->fe))
                                                        {{ '' }}
                                                    @else
                                                        {{ $result->fe }}
                                                    @endif
                                                </td>

                                                <td>
                                                    @if (empty($result->marks))
                                                        {{ '' }}
                                                    @else
                                                        {{ $result->marks."%" }}
                                                    @endif
                                                </td> 

                                                <td>
                                                    @if(empty($result->grade))
                                                        {{ '' }}
                                                    @else
                                                        {{ $result->grade }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(empty($result->status))
                                                        {{ '' }}
                                                    @else
                                                        {{ $result->status }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(empty($result->created_at))
                                                        {{ '' }}
                                                    @else
                                                        {{ $result->created_at }}
                                                    @endif
                                                </td>

                                                <td>
                                                    <button type="button" class="btn btn-outline-primary btn-sm text-center" data-bs-toggle="modal" data-bs-target="#viewResult{{ $student->id }}"> <i class="bi bi-eye"></i> </button>
                                                    <button type="button" class="btn btn-outline-success btn-sm text-center" data-bs-toggle="modal" data-bs-target="#updateResult{{ $student->id }}"> <i class="bi bi-pencil"></i> </button>
                                                    <a href="{{ route('lecture.delete.result', $student->id) }}" class="btn btn-outline-danger btn-sm text-center"> <i class="bi bi-trash"></i> </a>
                                                </td>
                                              </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="10" class="text-center text-danger fw-bolder">
                                                    <i class="bi bi-trash"></i> Empty Students Results
                                                </td>
                                            </tr>
                                        @endif
                                            </tbody>
                                        </table>

                                        <div class="d-flex"
                                            style="display: flex; align-items:center; justify-content:flex-end;">
                                            <div class="box-count py-3 text-muted">
                                                All Results: <?=$id-1; ?>
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




            {{-- view result --}}
            @foreach ($students as $student)
                
                @php
                    $result = $student->result->where('module_id', $lecture->module->id)->first();
                @endphp

                <div class="modal fade" id="viewResult{{ $student->id }}" tabindex="-1" aria-labelledby="viewResult{{ $student->id }}Label" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-center">
                  <div class="modal-content">
                    <div class="modal-header" style="display:flex; align-items:center;">
                      <div class="left">
                        <h1 class="modal-title fs-5" id="viewResult{{ $student->id }}Label">Lecture | View Result</h1>
                        @if(empty($result->status))
                            {{ 'None' }}
                        @elseif($result->status == 'PASS')
                          <span class="fw-bold"> STATUS:</span> <div class="badge badge-success">{{ $result->status  }}</div>
                        @elseif($result->status == 'AVERAGE')
                           <span class="fw-bold"> STATUS:</span> <div class="badge badge-primary">{{ $result->status  }}</div>
                        @elseif($result->status == 'SUPP')
                            <span class="fw-bold"> STATUS: </span> <div class="badge badge-warning"> {{ $result->status }} </div>
                        @elseif($result->status == 'FAIL' && $result->status == 'DISCO')
                          <span class="fw-bold"> STATUS:</span>  <div class="badge badge-danger">{{ $result->status  }}</div>
                        @endif 
                      </div>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="text" class="form-label">Module Name</label>
                            <div class="border-bottom py-2 w-100">
                                {{ $lecture->module->name }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Student Name</label>
                            <div class="border-bottom py-2 w-100">
                                {{ $student->fullname }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Student Reg No.</label>
                            <div class="border-bottom py-2 w-100">
                                {{ $student->reg_no }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="text" class="form-label">Student CA</label>
                                    <div class="border-bottom py-2 w-100">
                                        @if(empty($result->ca))
                                           <span class="text-muted" style="font-style:italic;"> {{ 'None' }} </span>
                                        @else
                                            {{ $result->ca }}
                                        @endif
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="text" class="form-label">Student FE</label>
                                    <div class="border-bottom py-2 w-100">
                                        @if(empty($result->fe))
                                           <span class="text-muted" style="font-style:italic;"> {{ 'None' }} </span>
                                        @else
                                            {{ $result->fe }}
                                        @endif
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="text" class="form-label">Student Marks</label>
                                    <div class="border-bottom py-2 w-100">
                                        @if(empty($result->marks))
                                           <span class="text-muted" style="font-style:italic;"> {{ 'None' }} </span>
                                        @else
                                            {{ $result->marks.'%' }}
                                        @endif
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="text" class="form-label">Student Grade</label>
                                    <div class="border-bottom py-2 w-100">
                                        @if(empty($result->grade))
                                           <span class="text-muted" style="font-style:italic;"> {{ 'None' }} </span>
                                        @else
                                            {{ $result->grade }}
                                        @endif
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
            @endforeach


 {{-- result add --}}
  {{-- <div> --}}
    <div class="modal fade" id="ModaladdResult" tabindex="-1" aria-labelledby="ModaladdResultLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="display:flex; align-items:center;">
            <div class="left" style="display: flex; flex-direction: column;">
              <h1 class="modal-title fs-5" id="ModaladdResultLabel">Lecture | Add Result</h1>
              <div>
                  <span class="badge badge-info">{{ $lecture->module->name }}</span>
              </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <form action="lectureAddResults" method="POST">
                @csrf
                <table class="table table-bordered table-striped table-hovered">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Reg.No</th>
                        <th>CA</th>
                        <th>FE</th>
                    </thead>
                    <tbody>
                        @php
                            $id = 0;
                            $id++;

                            $noemptyResultsStudent = false;
                        @endphp

                        @foreach($students as $student)
                            @php
                                $result = $student->result->where('module_id', $lecture->module->id)->first();
                            @endphp
                            @if(!$result)
                                <tr>
                                    <input type="text" class="form-control" name="module_id" value="{{ $lecture->module->id }}" hidden>
                                    <input type="text" class="form-control" name="student_id[]" value="{{ $student->id }}" hidden>
                                    <th> @php echo $id++; @endphp </th>
                                    <td>{{ $student->fullname }}</td>
                                    <td>{{ $student->reg_no }}</td>
                                    <td>
                                        <input type="text" class="form-control ca-input w-50" id="add-ca" name="CA[]" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;=57" oninput="if(this.value&lt;0){this.value=0;}else if(this.value&gt;60){this.value=60}">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control fe-input w-50" id="add-fe" name="FE[]" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;=57" oninput="if(this.value&lt;0){this.value=0;}else if(this.value&gt;40){this.value=40}">
                                    </td>
                                </tr>
                                @php
                                    $noemptyResultsStudent = true;
                                @endphp
                            @endif
                        @endforeach
                        @if(!$noemptyResultsStudent)
                            <tr class="text-center">
                                <td colspan="6" class="text-center"> <span class="fw-bold text-danger"> <i class="bi bi-trash"></i> Empty Student with No Results </span> </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
               @if(!$noemptyResultsStudent)
                 {{ '' }}
               @else
                <div class="text-center w-100 pt-4 pb-3">
                    <button type="submit" class="btn btn-dark w-50">Add Result</button>
                </div>
               @endif
             </form>
          </div>
          {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> --}}
        </div>
      </div>
    </div>
{{-- </div> --}}



{{-- update result --}}
  {{-- <div> --}}
    @foreach ($students as $student)
    <div class="modal fade" id="updateResult{{ $student->id }}" tabindex="-1" aria-labelledby="updateResult{{  $student->id }}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-center">
          <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
              <div class="left" style="display: flex; flex-direction: column;">
                <h1 class="modal-title fs-5" id="updateResult{{  $student->id }}Label">Lecture Update Result</h1>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form action="lectureUpdateResults" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label for="text" class="form-label">Module Name</label>
                      <input type="hidden" name="module_id" value="{{ $lecture->module->id }}" hidden readonly>
                      <input type="text" class="form-control" value="{{ $lecture->module->name }}" readonly>
                  </div>
                  <div class="mb-3">
                    <Label for="text" class="form-label">Student Name</label>
                    <input type="hidden" name="student_id" value="{{ $student->id }}" hidden readonly>
                    <input type="text" class="form-control" value="{{ $student->fullname }}" readonly>
                </div>
                        
                    @php
                        $result = $student->result->where('module_id', $lecture->module->id)->first();
                    @endphp

                  <div class="row">
                      <div class="col-md-6">
                          <div class="mb-3">
                              <label for="CA" class="form-label">CA</label>
                                @if (empty($result->ca))
                                    <input type="text" id="CA" class="form-control ca-input" name="CA" placeholder="CA" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;=57" oninput="if(this.value&lt;0){this.value=0;}else if(this.value&gt;60){this.value=60}">
                                @else
                                    <input type="text" id="CA" class="form-control ca-input" value="{{ $result->ca }}" name="CA" placeholder="CA" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;=57" oninput="if(this.value&lt;0){this.value=0;}else if(this.value&gt;60){this.value=60}">
                                @endif
                              <span class="text-danger"> @error('CA') {{ $message }} @enderror </span>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="mb-3">
                              <label for="FE" class="form-label">FE</label>
                                @if (empty($result->ca))
                                    <input type="text" id="FE" class="form-control fe-input" name="FE" placeholder="FE" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;=57" oninput="if(this.value&lt;0){this.value=0;}else if(this.value&gt;40){this.value=40}">
                                @else
                                    <input type="text" id="FE" class="form-control fe-input" value="{{ $result->fe }}" name="FE" placeholder="FE" onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;=57" oninput="if(this.value&lt;0){this.value=0;}else if(this.value&gt;40){this.value=40}">
                                @endif
                              <span class="text-danger"> @error('FE') {{ $message }} @enderror </span>
                          </div>
                      </div>
                  </div>
                  <div class="mb-3 text-center py-2">
                      <button type="submit" class="btn btn-dark w-50">Update Result</button>
                  </div>
               </form>
            </div>

            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div> --}}
          </div>
        </div>
      </div>
      @endforeach

{{-- the result - excel add result --}}
      <div class="modal fade" id="ModaladdCsvResult" tabindex="-1" aria-labelledby="ModaladdCsvResultLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="display:flex; align-items:center;">
            <div class="left">
                <h1 class="modal-title fs-5" id="ModaladdCsvResultLabel">Admin | Add Results | Excel File</h1>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
  
            <div class="modal-body pb-4">
                <form action="AddCsvResult" method="POST" enctype="multipart/form-data">
                  <p>
                    Make sure you have the appropriate, <br> 
                    <span> <i class="bi bi-circle text-success"></i> Columns (fullname, registration_number, module_name, ca, fe) </span> <br>
                    If not <span class="badge badge-danger">Error</span> will occur...
                  </p>
                   @csrf
                   <div class="mb-3">
                      <label for="excel_file" class="form-label">Import Excel File</label>
                      <input type="file" id="excel_file" class="form-control" name="excel_file">
                   </div>
                   <div class="w-100 text-center py-3">
                       <button type="submit" class="btn btn-dark w-50">Submit File</button>
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

        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    $('.alert-notification').fadeOut();
                }, 5000);
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#search-result').on('keyup', function() {
                    var search = $(this).val();

                    $.ajax({
                        url: "{{ route('searchResult') }}",
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
                                                <td>'+output[i]['reg_no']+'</td>\
                                                <td>'+output[i]['ca']+'</td>\
                                                <td>'+output[i]['fe']+'</td>\
                                                <td>'+output[i]['marks']+'</td>\
                                                <td>'+output[i]['grade']+'</td>\
                                                <td>'+output[i]['status']+'</td>\
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
                                htmlData += '<tr colspan="10">\
                                                <td colspan="10" class="text-center text-danger"> <i class="bi bi-trash"></i> Empty Students </td>\
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
