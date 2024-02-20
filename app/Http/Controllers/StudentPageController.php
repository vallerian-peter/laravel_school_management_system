<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class StudentPageController extends Controller
{
    public function studentdashboard()
    {
        $student = Auth::guard("student")->user();
        
        $DepId = $student->course->department->id;

        $modules = DB::table('modules')
                        ->where('department_share', $DepId)
                        ->get();

        return view("student.studentDashboard", ['student' => $student, 'modules' => $modules]);
    }

    public function download()
    {
        $student = Auth::guard("student")->user();
        
        $DepId = $student->course->department->id;

        $modules = DB::table('modules')
                        ->where('department_share', $DepId)
                        ->get();

        $results = Result::where('student_id', $student->id)->get();

        return view("student.downloadTranscript", ['student' => $student, 'modules' => $modules, 'results' => $results]);
    }

    public function studenttranscript()
    {
        $student = Auth::guard("student")->user();
        
        $DepId = $student->course->department->id;

        $modules = DB::table('modules')
                        ->where('department_share', $DepId)
                        ->get();

        $results = Result::where('student_id', $student->id)->get();

        $resultsErrorSupp = Result::where('student_id', $student->id)
                                    ->where('status','SUPP')                        
                                    ->get();
                
        $resultsErrorDisco = Result::where('student_id', $student->id)
                                    ->where('status','DISCO')                        
                                    ->get();

        if($resultsErrorSupp->count() != 0)
        {
            return back()->with('error','['.$student->fullname.' Transcript] Cant be Generated (Available SUPP)');
        }
        elseif($resultsErrorDisco->count() != 0)
        {
            return back()->with('error','['.$student->fullname.' Transcript] Cant be Generated (Available DISCO)');
        }
        else
        {
            return view("student.studentTranscript", ['student' => $student, 'modules' => $modules, 'results' => $results]);
        }

    }

    public function studentprofile()
    {
        $student = Auth::guard('student')->user();
        $courses = Course::all();
        
        return view("student.studentProfile", ['student' => $student, 'courses' => $courses]);
    }

    public function studentcoursemodules()
    {
        $student = Auth::guard('student')->user();
        $courses = Course::all();

        $DepId = $student->course->department->id;

        $modules = DB::table('modules')
                        ->where('department_share', $DepId)
                        ->get();

        return view('student.studentCourseModules', ['student'=>$student, 'courses'=> $courses, 'modules'=>$modules]);
    }

    public function filtermodule(Request $request)
    {
        $student = Auth::guard('student')->user();

        $query = Module::query();

        if($request->ajax())
        {
            $outputs = $query->where(['semester_year'=>$request->filter])->get();

            return response()->json(['outputs'=>$outputs]);
        }

        $modules = $query->get();

        return view('student.studentCourseModules', ['modules'=> $modules, 'student'=> $student]);
    }

    public function academicrecords()
    {
        $student = Auth::guard('student')->user();
        $result = Result::where('student_id', $student->id)->get();

        return view('student.studentAcademicRecords', ['student'=>$student, 'results'=> $result]);
    }
}
