<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cashe-control" content="no-cashe, no-store, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cashe">
    <title>Transcript | Download</title>
</head>
<style>
    .head {
        text-align: center;
    }

    .second-row table tbody tr td {
        text-align: center;
    }

    .second-row table tbody tr td.gender-value {
        padding: 0 80px;
    }

    .second-row {
        padding-top: 140px;
        float: right;
        padding-bottom: 50px;
    }

    .third-row table {
        margin-top: 18rem;
        width: 100%;
    }

    .third-row table thead th {
        display: none;
    }

    .third-row table tbody th.grad-name,
    .third-row table tbody td.grad-value {
        text-align: right;
    }

    .third-row table tbody tr td,
    .third-row table tbody tr th {
        padding-bottom: 50px;
    }
    .all-tables{
        /* display: grid;
        grid-template-columns: 3fr 3fr 3fr;
        grid-gap: 2rem; */
        margin: 5px;
    }
</style>

<body>

    {{-- <div class="box-transcript pb-5">
        <div class="transcript card py-4 p-2">


            <div class="second-page py-4">

                <div class="p-3 border">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="fw-bold p-2"
                                style="background-color: #e2e1e1; font-weight: 600; padding:10px 0;">SEMESTER: 01</div>
                            <table class="table table-border">
                                <thead class="table-secondary" style="background-color: #e2e1e1;">
                                    <th class="fw-semibold">CODE</th>
                                    <th class="fw-semibold">MODULE NAME</th>
                                    <th class="fw-semibold">GRADE</th>
                                </thead>
                                <tbody>
                                    @if ($modules->count() != 0)
                                        @foreach (optional($modules)->where('semester_year', '1S1') as $module)
                                            <tr>
                                                <td>{{ $module->module_code }}</td>
                                                <td>{{ $module->name }}</td>
                                                <td class="text-center">
                                                    @php
                                                        $result = $student->result->where('module_id', $module->id)->first();
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
                                            <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i>
                                                    Empty Modules </span> </td>
                                        </tr>
                                    @endif
                                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                                        <td colspan="3" style="padding:10px 0;">SEMESTER GPA: <span
                                                class="fw-bold" style="font-weight: 900;">{{ '3.445' }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="fw-bold p-2"
                                style="background-color: #e2e1e1; font-weight: 600; padding:10px 0;">SEMESTER: 02</div>
                            <table class="table table-border">
                                <thead class="table-secondary" style="background-color: #e2e1e1;">
                                    <th class="fw-semibold">CODE</th>
                                    <th class="fw-semibold">MODULE NAME</th>
                                    <th class="fw-semibold">GRADE</th>
                                </thead>
                                <tbody>
                                    @if ($modules->count() != 0)
                                        @foreach (optional($modules)->where('semester_year', '1S2') as $module)
                                            <tr>
                                                <td>{{ $module->module_code }}</td>
                                                <td>{{ $module->name }}</td>
                                                <td class="text-center">
                                                    @php
                                                        $result = $student->result->where('module_id', $module->id)->first();
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
                                            <td colspan="3"> <span class="text-danger"> <i
                                                        class="bi bi-trash"></i> Empty Modules </span> </td>
                                        </tr>
                                    @endif
                                    <tr class="table-secondary" style="background-color: #e2e1e1;;">
                                        <td colspan="3" style="padding:10px 0;">SEMESTER GPA: <span
                                                class="fw-bold" style="font-weight: 900;">{{ '3.445' }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="fw-bold p-2"
                                style="background-color: #e2e1e1; font-weight: 600; padding:10px 0;">SEMESTER: 03</div>
                            <table class="table table-border">
                                <thead class="table-secondary" style="background-color: #e2e1e1;">
                                    <th class="fw-semibold">CODE</th>
                                    <th class="fw-semibold">MODULE NAME</th>
                                    <th class="fw-semibold">GRADE</th>
                                </thead>
                                <tbody>
                                    @if ($modules->count() != 0)
                                        @foreach (optional($modules)->where('semester_year', '2S1') as $module)
                                            <tr>
                                                <td>{{ $module->module_code }}</td>
                                                <td>{{ $module->name }}</td>
                                                <td class="text-center">
                                                    @php
                                                        $result = $student->result->where('module_id', $module->id)->first();
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
                                            <td colspan="3"> <span class="text-danger"> <i
                                                        class="bi bi-trash"></i> Empty Modules </span> </td>
                                        </tr>
                                    @endif
                                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                                        <td colspan="3" style="padding:10px 0;">SEMESTER GPA: <span
                                                class="fw-bold" style="font-weight: 900;">{{ '3.445' }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="fw-bold p-2"
                                style="background-color: #e2e1e1; font-weight: 600; padding:10px 0;">SEMESTER: 04</div>
                            <table class="table table-border">
                                <thead class="table-secondary" style="background-color: #e2e1e1;">
                                    <th class="fw-semibold">CODE</th>
                                    <th class="fw-semibold">MODULE NAME</th>
                                    <th class="fw-semibold">GRADE</th>
                                </thead>
                                <tbody>
                                    @if ($modules->count() != 0)
                                        @foreach (optional($modules)->where('semester_year', '2S2') as $module)
                                            <tr>
                                                <td>{{ $module->module_code }}</td>
                                                <td>{{ $module->name }}</td>
                                                <td class="text-center">
                                                    @php
                                                        $result = $student->result->where('module_id', $module->id)->first();
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
                                            <td colspan="3"> <span class="text-danger"> <i
                                                        class="bi bi-trash"></i> Empty Modules </span> </td>
                                        </tr>
                                    @endif
                                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                                        <td colspan="3" style="padding:10px 0;">SEMESTER GPA: <span
                                                class="fw-bold" style="font-weight: 900;">{{ '3.445' }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="fw-bold p-2"
                                style="background-color: #e2e1e1; font-weight: 600; padding:10px 0;">SEMESTER: 05</div>
                            <table class="table table-border">
                                <thead class="table-secondary" style="background-color: #e2e1e1;">
                                    <th class="fw-semibold">CODE</th>
                                    <th class="fw-semibold">MODULE NAME</th>
                                    <th class="fw-semibold">GRADE</th>
                                </thead>
                                <tbody>
                                    @if ($modules->count() != 0)
                                        @foreach (optional($modules)->where('semester_year', '3S1') as $module)
                                            <tr>
                                                <td>{{ $module->module_code }}</td>
                                                <td>{{ $module->name }}</td>
                                                <td class="text-center">
                                                    @php
                                                        $result = $student->result->where('module_id', $module->id)->first();
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
                                            <td colspan="3"> <span class="text-danger"> <i
                                                        class="bi bi-trash"></i> Empty Modules </span> </td>
                                        </tr>
                                    @endif
                                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                                        <td colspan="3" style="padding:10px 0;">SEMESTER GPA: <span
                                                class="fw-bold" style="font-weight: 900;">{{ '3.445' }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="fw-bold p-2"
                                style="background-color: #e2e1e1; font-weight: 600; padding:10px 0;">SEMESTER: 06</div>
                            <table class="table table-border">
                                <thead class="table-secondary" style="background-color: #e2e1e1;">
                                    <th class="fw-semibold">CODE</th>
                                    <th class="fw-semibold">MODULE NAME</th>
                                    <th class="fw-semibold">GRADE</th>
                                </thead>
                                <tbody>
                                    @if ($modules->count() != 0)
                                        @foreach ($modules->where('semester_year', '3S2') as $module)
                                            <tr>
                                                <td>{{ $module->module_code }}</td>
                                                <td>{{ $module->name }}</td>
                                                <td class="text-center">
                                                    @php
                                                        $result = $student->result->where('module_id', $module->id)->first();
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
                                            <td colspan="3" class="text-danger"> <i class="bi bi-trash"></i> Empty
                                                Modules </td>
                                        </tr>
                                    @endif
                                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                                        <td colspan="3" style="padding:10px 0;">SEMESTER GPA: <span
                                                class="fw-bold" style="font-weight: 900;">{{ '3.445' }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <div class="box-transcript">

        <div class="first-row head">
            <h2 class="text1">DAR-ES-SALAAM INSTITUTE OF TECHNOLOGY</h2>
            <h2 class="text2">ACADEMIC TRANSCRIPT</h2>
        </div>

        <div class="second-row">
            <table class="detail">
                <thead>
                    <th>BIRTH-DATE</th>
                    <th>GENDER</th>
                    <th>REG NO.</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="birth-value"> {{ $student->birthdate }}</td>
                        <td class="gender-value">{{ $student->gender }}</td>
                        <td class="reg-value">{{ $student->reg_no }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="third-row">
            <div class="table-1">
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Vaue</th>
                        <th>Second</th>
                        <th>Value2</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="1" style="text-align: left;">DATE OF ADMISSION: </th>
                            <td class="adm-value">
                                {{ Str::upper($student->created_at->format('F')) . ', ' . $student->created_at->format('Y') }}
                            </td>
                            <th rowspan="1" class="grad-name" style="text-align: left;">DATE OF GRADUATION:</th>
                            <td class="grad-value">
                                @php
                                    $durationY = (int) Str::before($student->course->year_duration, 'years');
                                    $regDate = (int) $student->created_at->format('Y');
                                    echo Str::upper($student->created_at->format('F')) . ' ' . $durationY + $regDate;
                                @endphp
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="1" class="fw-bold" style="text-align:left;">AWARD TITLE: </th>
                            <td class="fw-semibold">{{ Str::upper($student->course->name) }}</td>
                        </tr>
                        <tr>
                            <th rowspan="1" class="fw-bold" style="text-align:left;">CLASSIFICATION OF AWARDS:</th>
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
                            <th rowspan="1" class="fw-bold" style="text-align:left;">OVERALL GPA:</th>
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
        </div>

        <div class="content-row">
            <div class="text" style="width: 100%; padding-top: 50px; text-align:center;">
                <span class="text" style="padding:0 20px; font-weight: 500;">NAME: <span
                        style="font-weight: bold;">{{ Str::upper($student->fullname) }}</span> </span>
                <span class="text" style="padding:0 20px; font-weight: 500;">COURSE: <span
                        style="font-weight: bold;">{{ Str::upper($student->course->name) }}</span> </span>
            </div>

            {{-- results starts here --}}
        <div class="all-tables" style="padding: 20px 0;">

           <div class="tables" style="width: 100%; padding: 10px 5px;">
            <div class="fw-bold p-2" style="background-color: #e2e1e1; font-weight: 600; padding:10px 0; width:auto;">SEMESTER: 01 </div>
            <table style="width: 100%;">
                <thead style="background-color: #e2e1e1;">
                    <th style="text-align: left;">CODE</th>
                    <th style="text-align: left;">MODULE NAME</th>
                    <th style="text-align: left;">GRADE</th>
                    <th style="text-align: left;">STATUS</th>
                </thead>
                <tbody>
                    @if ($modules->count() != 0)
                        @foreach (optional($modules)->where('semester_year', '1S1') as $module)
                            <tr>
                                <td>{{ $module->module_code }}</td>
                                <td>{{ $module->name }}</td>
                                <td class="text-center" style="text-align: center;">
                                    @php
                                        $result = $student->result->where('module_id', $module->id)->first();
                                    @endphp
                                    @if ($result)
                                        
                                        {{ $result->grade }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                                <td class="text-center" style="text-align: center;">
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
                                        {{ $result->status }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-secondary">
                            <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i>
                                    Empty Modules </span> </td>
                        </tr>
                    @endif
                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                        <td colspan="4" style="padding:10px 0;">SEMESTER GPA: <span class="fw-bold"
                                style="font-weight: 900;">
                            @php
                                $totalS1Modules = $modules->where('semester_year', '1S1')->count();
                                $S1gpa = number_format(($sumOfGrades/$totalS1Modules) , 4);
                                session(['S1gpa' => $S1gpa]);
                                echo $S1gpa;
                            @endphp
                        </span>
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>

           <div class="tables" style="width: 100%; padding: 10px 5px;">
            <div class="fw-bold p-2" style="background-color: #e2e1e1; font-weight: 600; padding:10px 0; width:auto;">SEMESTER: 02 </div>
            <table style="width: 100%;">
                <thead style="background-color: #e2e1e1;">
                    <th style="text-align: left;">CODE</th>
                    <th style="text-align: left;">MODULE NAME</th>
                    <th style="text-align: left;">GRADE</th>
                    <th style="text-align: left;">STATUS</th>
                </thead>
                <tbody>
                    @if ($modules->count() != 0)
                        @foreach (optional($modules)->where('semester_year', '1S2') as $module)
                            <tr>
                                <td>{{ $module->module_code }}</td>
                                <td>{{ $module->name }}</td>
                                <td class="text-center" style="text-align: center;">
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
                                <td class="text-center" style="text-align: center;">
                                    @php
                                        $result = $student->result->where('module_id', $module->id)->first();
                                    @endphp
                                    @if ($result)
                                        {{ $result->status }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-secondary">
                            <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i>
                                    Empty Modules </span> </td>
                        </tr>
                    @endif
                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                        <td colspan="4" style="padding:10px 0;">SEMESTER GPA: <span class="fw-bold"
                                style="font-weight: 900;">
                            @php
                                $totalS2Modules = $modules->where('semester_year', '1S2')->count();
                                $S2gpa = number_format(($sumOfGradesS2/$totalS2Modules) , 4);
                                session(['S2gpa' => $S2gpa]);
                                echo $S2gpa;
                            @endphp
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>

           <div class="tables" style="width: 100%; padding: 10px 5px;">
            <div class="fw-bold p-2" style="background-color: #e2e1e1; font-weight: 600; padding:10px 0; width:auto;">SEMESTER: 03 </div>
            <table style="width: 100%;">
                <thead style="background-color: #e2e1e1;">
                    <th style="text-align: left;">CODE</th>
                    <th style="text-align: left;">MODULE NAME</th>
                    <th style="text-align: left;">GRADE</th>
                    <th style="text-align: left;">STATUS</th>
                </thead>
                <tbody>
                    @if ($modules->count() != 0)
                        @foreach (optional($modules)->where('semester_year', '2S1') as $module)
                            <tr>
                                <td>{{ $module->module_code }}</td>
                                <td>{{ $module->name }}</td>
                                <td class="text-center" style="text-align: center;">
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
                                <td class="text-center" style="text-align: center;">
                                    @php
                                        $result = $student->result->where('module_id', $module->id)->first();
                                    @endphp
                                    @if ($result)
                                        {{ $result->status }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-secondary">
                            <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i>
                                    Empty Modules </span> </td>
                        </tr>
                    @endif
                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                        <td colspan="4" style="padding:10px 0;">SEMESTER GPA: <span class="fw-bold"
                                style="font-weight: 900;">
                            @php
                                $totalS3Modules = $modules->where('semester_year', '2S1')->count();
                                $S3gpa = number_format(($sumOfGradesS3/$totalS3Modules) , 4);
                                session(['S3gpa' => $S3gpa]);
                                echo $S3gpa;
                            @endphp
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>

           <div class="tables" style="width: 100%; padding: 10px 5px;">
            <div class="fw-bold p-2" style="background-color: #e2e1e1; font-weight: 600; padding:10px 0; width:auto;">SEMESTER: 04 </div>
            <table style="width: 100%;">
                <thead style="background-color: #e2e1e1;">
                    <th style="text-align: left;">CODE</th>
                    <th style="text-align: left;">MODULE NAME</th>
                    <th style="text-align: left;">GRADE</th>
                    <th style="text-align: left;">STATUS</th>
                </thead>
                <tbody>
                    @if ($modules->count() != 0)
                        @foreach (optional($modules)->where('semester_year', '2S2') as $module)
                            <tr>
                                <td>{{ $module->module_code }}</td>
                                <td>{{ $module->name }}</td>
                                <td class="text-center" style="text-align: center;">
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
                                <td class="text-center" style="text-align: center;">
                                    @php
                                        $result = $student->result->where('module_id', $module->id)->first();
                                    @endphp
                                    @if ($result)
                                        {{ $result->status }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-secondary">
                            <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i>
                                    Empty Modules </span> </td>
                        </tr>
                    @endif
                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                        <td colspan="4" style="padding:10px 0;">SEMESTER GPA: <span class="fw-bold"
                                style="font-weight: 900;">
                            @php
                                $totalS4Modules = $modules->where('semester_year', '2S2')->count();
                                $S4gpa = number_format(($sumOfGradesS4/$totalS4Modules) , 4);
                                session(['S4gpa' => $S4gpa]);
                                echo $S4gpa;
                            @endphp
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>

           <div class="tables" style="width: 100%; padding: 10px 5px;">
            <div class="fw-bold p-2" style="background-color: #e2e1e1; font-weight: 600; padding:10px 0; width:auto;">SEMESTER: 05 </div>
            <table style="width: 100%;">
                <thead style="background-color: #e2e1e1;">
                    <th style="text-align: left;">CODE</th>
                    <th style="text-align: left;">MODULE NAME</th>
                    <th style="text-align: left;">GRADE</th>
                    <th style="text-align: left;">STATUS</th>
                </thead>
                <tbody>
                    @if ($modules->count() != 0)
                        @foreach (optional($modules)->where('semester_year', '3S1') as $module)
                            <tr>
                                <td>{{ $module->module_code }}</td>
                                <td>{{ $module->name }}</td>
                                <td class="text-center" style="text-align: center;">
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
                                <td class="text-center" style="text-align: center;">
                                    @php
                                        $result = $student->result->where('module_id', $module->id)->first();
                                    @endphp
                                    @if ($result)
                                        {{ $result->status }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-secondary">
                            <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i>
                                    Empty Modules </span> </td>
                        </tr>
                    @endif
                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                        <td colspan="4" style="padding:10px 0;">SEMESTER GPA: <span class="fw-bold"
                                style="font-weight: 900;">
                            @php
                                $totalS5Modules = $modules->where('semester_year', '3S1')->count();
                                $S5gpa = number_format(($sumOfGradesS5/$totalS5Modules) , 4);
                                session(['S5gpa' => $S5gpa]);
                                echo $S5gpa;
                            @endphp
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>

           <div class="tables" style="width: 100%; padding: 10px 5px;">
            <div class="fw-bold p-2" style="background-color: #e2e1e1; font-weight: 600; padding:10px 0; width:auto;">SEMESTER: 06 </div>
            <table style="width: 100%;">
                <thead style="background-color: #e2e1e1;">
                    <th style="text-align: left;">CODE</th>
                    <th style="text-align: left;">MODULE NAME</th>
                    <th style="text-align: left;">GRADE</th>
                    <th style="text-align: left;">STATUS</th>
                </thead>
                <tbody>
                    @if ($modules->count() != 0)
                        @foreach (optional($modules)->where('semester_year', '3S2') as $module)
                            <tr>
                                <td>{{ $module->module_code }}</td>
                                <td>{{ $module->name }}</td>
                                <td class="text-center" style="text-align: center;">
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
                                <td class="text-center" style="text-align: center;">
                                    @php
                                        $result = $student->result->where('module_id', $module->id)->first();
                                    @endphp
                                    @if ($result)
                                        {{ $result->status }}
                                    @else
                                        {{ '-' }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="table-secondary">
                            <td colspan="3"> <span class="text-danger"> <i class="bi bi-trash"></i>
                                    Empty Modules </span> </td>
                        </tr>
                    @endif
                    <tr class="table-secondary" style="background-color: #e2e1e1; padding:15px 0;">
                        <td colspan="4" style="padding:10px 0;">SEMESTER GPA: <span class="fw-bold"
                                style="font-weight: 900;">
                            @php
                                $totalS6Modules = $modules->where('semester_year', '3S2')->count();
                                $S6gpa = number_format(($sumOfGradesS6/$totalS6Modules) , 4);
                                session(['S6gpa' => $S6gpa]);
                                echo $S6gpa;
                            @endphp
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>


        </div>
        </div>
    </div>

    </div>
</body>

</html>
