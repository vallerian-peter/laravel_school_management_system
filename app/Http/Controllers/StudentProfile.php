<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StudentProfile extends Controller
{
    public function updatedetails(Request $request)
    {
        $student = Auth::guard('student')->user();

        $incomingUpdateFields = $request->validate([
            'fullname' => 'required|string|min:5|max:200',
            'email' => 'required|email',
            'username' => 'required|string|min:2|max:15',
            'birthdate' => 'required',
            'phone' => 'required|min:10|max:15',
            'reg_no' => 'required|min:10|max:17'
        ]);

        $student->update($incomingUpdateFields);

        return redirect('studentProfile')->with('success','[Student Details] updated successfully');
    }

    public function updateavatar(Request $request)
    {
        $student = Auth::guard('student')->user();

        $request->validate([
            'avatar' => 'required|image'
        ]);
        
        $path = Storage::disk('public')->put('avatars', $request->file('avatar'));
        
        if($student->avatar)
        {
            $oldAvatar = $student->avatar;
            Storage::disk('public')->delete($oldAvatar);
        }

        $student->update(['avatar' => $path]);
      
        return redirect('studentProfile')->with('success','[Student Avatar] updated successfully');
    }

    public function updategender(Request $request)
    {
        $student = Auth::guard('student')->user();

        $incomingField = $request->validate([
            'gender' => 'required'
        ]);

        $student->update($incomingField);

        return redirect('studentProfile')->with('success','[Student Gender] updated successfully');
    }

    public function updatecourse(Request $request)
    {
        $student = Auth::guard('student')->user();

        $incomingField = $request->validate([
            'course_id' => 'required'
        ]);

        $student->update($incomingField);

        return redirect('studentProfile')->with('Success','[Student Course] updated successfully');
    }

    
    public function updatepassword(Request $request)
    {
        $request->validate([
            'currentpassword'=>'required|min:8|max:50',
            'newpassword'=>'required|min:8|max:50',
            'confirmpassword' => 'required'
        ]);

        $student = Auth::guard('student')->user();

        if(Hash::check($request->currentpassword, $student->password))
        {
            $student->update([
                'password' => Hash::make($request->newpassword)
            ]);

            return redirect('studentProfile')->with("success", "[Student Password] updated Successfully");
        }

        return redirect('studentProfile')->with("error", "Current Password don't Match");
    }
}
