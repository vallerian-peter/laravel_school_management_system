<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LectureAuth extends Controller
{
    public function lectureRegister()
    {
        $modules = Module::all();

        return view("lecture.lectureRegister", ['modules' => $modules]);
    }

    public function registerLecture(Request $request)
    {
        $incomingLectureFields = $request->validate([
            'fullname' => 'required|string|max:120|min:5',
            'email' => 'required|email|unique:lectures',
            'username' => 'required|string|max:15|min:2|unique:lectures',
            'phone' => 'required|string|max:13|min:10',
            'module_id' => 'required',
            'password' => 'required|string|max:30|min:8',
        ]);

        $incomingLectureFields['password'] = bcrypt($incomingLectureFields['password']);
        
        $lecture = Lecture::create($incomingLectureFields);

        if($lecture)
        {
            return redirect('lectureLogin')->with('success','[Lecture Register] Successfully');
        }
        else
        {
            return redirect('lectureRegister')->with('error','[Lecture Register] Unsuccessful');
        }
    }

    public function loginLecture(Request $request)
    {
         $request->validate([
            'email' => 'required',
            'password' => 'required|max:30|min:8',
        ]);

        $lecturetLoginFields = $request->only('email', 'password');

        if(Auth::guard('lecture')->attempt($lecturetLoginFields))
        {   
           return redirect('lectureDashboard')->with('success','Login Successfully');
        }
        else
        {
            return redirect('lectureLogin')->with('error','Incorrect Email or Password');
        }
    }

    public function lecturelogout(Request $request)
    {
        Auth::guard('lecture')->logout();
        auth()->logout();
        $request->session()->invalidate();

        return redirect('lectureLogin')->with('success','[Lecture Logout] Successfully');
    }
}
