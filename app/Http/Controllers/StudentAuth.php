<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAuth extends Controller
{
    
    public function studentRegform(){
        $courses = Course::all();

        return view("student.studentRegister", ["courses" => $courses]);
    }

    public function registerStudent(Request $request){
        $incomingFields = $request->validate([
            'fullname' => 'required|string|min:5|max:200',
            'email' => 'required|email|unique:students',
            'username' => 'required|min:2|max:20|unique:students',
            'phone' => 'required|min:9|max:18',
            'course_id' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'reg_no' => 'required|min:8|max:20|unique:students',
            'password' => 'required|min:8|max:30'
        ]);
        
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        
        $student = Student::create($incomingFields);

        if($student)
        {
            return redirect('studentLogin')->with('success','Congratulations! Successfully Registered');
        }
        else
        {
            return back()->with('error','[Student Registration] Unsuccessful');
        }
    }

    public function studentlogin(Request $request){
        
        $request->validate([
            'email'=> 'required',
            'password'=> 'required|min:8|max:30'
        ]);

        $studentLoginFields = $request->only('email', 'password');

        if($studentLoginFields['email'] == 'admin@gmail.com')
        {
            $adminUser = Admin::where('email', $studentLoginFields['email'])->first();
            
            if($adminUser->password == $studentLoginFields['password'])
            {
                Auth::guard('admin')->login($adminUser);
                // dd('authenticated');
                return redirect('adminDashboard')->with('success','[Admin Login] Successfully');
            }
            else
            {
                return redirect('studentLogin')->with('Error','Incorrect Email or Password');
            }
        }
        else
        {
            if(Auth::guard('student')->attempt($studentLoginFields))
            {   
               return redirect('studentDashboard')->with('Success','[Student Login] Successfully');
            }
            else
            {
                return redirect('studentLogin')->with('Error','Incorrect Email or Password');
            }
        }
        
    }

    public function studentLogout(){
        Auth::guard('student')->logout();
        auth()->logout();
        request()->session()->invalidate();
        
        return redirect('studentLogin')->with('success','[Student Logout] Succesfully');
    }
}
