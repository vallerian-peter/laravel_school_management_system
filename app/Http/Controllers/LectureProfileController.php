<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LectureProfileController extends Controller
{
    public function updateavatar(Request $request)
    {
        $lecture = Auth::guard('lecture')->user();

        $request->validate([
            'avatar' => 'required|image'
        ]);
        
        $path = Storage::disk('public')->put('lecture_avatars', $request->file('avatar'));
        
        if($lecture->avatar)
        {
            $oldAvatar = $lecture->avatar;
            Storage::disk('public')->delete($oldAvatar);
        }

        $lecture->update(['avatar' => $path]);
      
        return redirect('lectureProfile')->with('success','[Lecture Avatar] updated successfully');
    }

    public function updatedetails(Request $request)
    {
        $lecture = Auth::guard('lecture')->user();

        $incomingUpdateFields = $request->validate([
            'fullname' => 'required|string|min:5|max:150',
            'email' => 'required|email',
            'username' => 'required|string|min:2|max:15',
            'phone' => 'required|string|min:10|max:15'
        ]);

        $lecture->update($incomingUpdateFields);

        return redirect('lectureProfile')->with('success','[Lecture Details] updated successfully');
    }

    public function updatemodule(Request $request)
    {
        $lecture = Auth::guard('lecture')->user();

        $incomingField = $request->validate([
            'module_id' => 'required'
        ]);

        $lecture->update($incomingField);

        return redirect('lectureProfile')->with('Success','Module updated successfully');
    }

    public function updatepassword(Request $request)
    {
        $request->validate([
            'currentpassword'=>'required|min:8|max:50',
            'newpassword'=>'required|min:8|max:50',
            'confirmpassword' => 'required'
        ]);

        $lecture = Auth::guard('lecture')->user();

        if(Hash::check($request->currentpassword, $lecture->password))
        {
            $lecture->update([
                'password' => Hash::make($request->newpassword)
            ]);

            return redirect('/lectureProfile')->with("Success", "Password Update Successfully");
        }

        return redirect('/lectureProfile')->with("Error", "Current Password don't Match");
    }

    public function replypermission(Request $request)
    {
        // $lecture = Auth::guard('lectures')->user();

        $incomingFields = $request->validate([
            'permission_id' => 'required',
            'reply'=>'required',
            'lecture_attach'=>'file',
        ]);

        if(isset($incomingFields['lecture_attach']) && $request->hasFile('lecture_attach'))
        {
            $path = $request->file('lecture_attach')->store('reply_attach','public');

            $incomingFields['lecture_attach'] = $path;

            $reply = Reply::create([
                'permission_id' => $incomingFields['permission_id'],
                'reply'=>$incomingFields['reply'],
                'lecture_attach'=>$incomingFields['attach'],
            ]);
        }
        else
        {
            $reply = Reply::create([
                'permission_id' => $incomingFields['permission_id'],
                'reply'=>$incomingFields['reply']
            ]);
        }

        if($reply)
        {
            Permission::where('id', $incomingFields['permission_id'])
            ->update(['status'=>'replyed']);

            return redirect('lectureAllPermissions')->with('Success','Reply sent succesfully');
        }
        else
        {
            return redirect('lectureAllPermissions')->with('Error','Invalid fields');
        }

    }
}
