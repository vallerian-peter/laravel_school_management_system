<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class StudentResultController extends Controller
{
    public function studentresultsdisplay($resultId)
    {
        $student = Auth::guard("student")->user();
        
        $modules = Module::where("department_share", $student->course->department->id)->get();

        $results = Result::select('modules.*', 'results.*')
                         ->join('modules', 'modules.id','=','results.module_id')
                         ->where('results.student_id', $student->id)
                         ->where('modules.semester_year', 'like', $resultId.'S%')
                         ->get();

        $id = $resultId;
        
        return view("student.studentDisplayResult", ['student'=>$student, 'results'=>$results, 'id'=>$id, 'modules'=>$modules]);
    }
}
