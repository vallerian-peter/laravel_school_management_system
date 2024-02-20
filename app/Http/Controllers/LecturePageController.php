<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\Permission;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class LecturePageController extends Controller
{
    public function lecturedashboard()  
    {
        $lecture = Auth::guard('lecture')->user();
        $departmentId = $lecture->module->department->id;
        $shareDepartmentId = $lecture->module->department_share;

        $students = Student::whereHas('course.department', function ($query) use ($departmentId, $shareDepartmentId) {
            $query->whereIn('id', [$departmentId, $shareDepartmentId]);
        })->get();

        return view('lecture.lectureDashboard', ['lecture' => $lecture, 'students'=>$students]);    
    }

    public function lectureprofile()
    {
        $lecture = Auth::guard('lecture')->user();

        $modules = Module::all();
        
        return view('lecture.lectureProfile', ['lecture' => $lecture, 'modules'=> $modules]);
    }

    public function lectureallstudents()
    {
        $lecture = Auth::guard('lecture')->user();
        $modules = Module::all();

        $departmentId = $lecture->module->department->id;
        $shareDepartmentId = $lecture->module->department_share;

        $students = Student::whereHas('course.department', function ($query) use ($departmentId, $shareDepartmentId) {
            $query->whereIn('id', [$departmentId, $shareDepartmentId]);
        })->get();

        return view('lecture.lectureAllStudents', ['lecture' => $lecture, 'modules'=> $modules, 'students' => $students]);
    }

    public function lectureallresults()
    {
        $lecture = Auth::guard('lecture')->user();

        $modules = Module::all();

        $departmentId = $lecture->module->department->id;
        $shareDepartmentId = $lecture->module->department_share;

        $students = Student::whereHas('course.department', function ($query) use ($departmentId, $shareDepartmentId) {
            $query->whereIn('id', [$departmentId, $shareDepartmentId]);
        })
        ->with('result')
        ->get();

        return view('lecture.lectureAllResults', ['lecture' => $lecture, 'modules'=> $modules, 'students' => $students]);
    }
}
