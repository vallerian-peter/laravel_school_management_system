<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Imports\ResultImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class LectureResultsController extends Controller
{
    public function lectureaddresult(Request $request)
    {
        $request->validate([
            'module_id' => 'required',
            'student_id' => 'required|array',
            'student_id.*' => 'required',
            'CA' =>  'required|array',
            'CA.*' =>  'required|numeric',
            'FE' => 'required|array',
            'FE.*' => 'required|numeric',
        ],[
            'CA.required' => 'The Class Assignments is required',
            'CA.numeric' => 'The Class Assignments needs number inputs',
            'CA.max:3' => 'The Class Assignments maximum number is 3',
            'FE.numeric' => 'The Final Exam needs number inputs',
            'FE.required' => 'The Final Exam is required',
        ]);

        // create a result (multiple result)
        foreach($request->input('student_id') as $index => $studentId)
        {
            
            $total = $request->input('FE')[$index] + $request->input('CA')[$index];
            
            if($request->input('CA')[$index] < 24 || $request->input('FE')[$index] < 16)
            {
                
                if($total >= 70 && $total <= 100)
                {
                    $grade = 'A';
                    $status = 'SUPP';
                }
                else if($total >= 60 && $total < 70)
                {
                    $grade = 'B+';
                    $status = 'SUPP';
                }
                else if($total >= 50 && $total < 60)
                {
                    $grade = 'B';
                    $status = 'SUPP';
                }
                else if($total >= 40 && $total < 50)
                {
                    $grade = 'C';
                    $status = 'SUPP';
                }
                else if($total >= 30 && $total < 40)
                {
                    $grade = 'D';
                    $status = 'SUPP';
                }
                else 
                {
                    $grade = 'F';
                    $status = 'SUPP';
                }
    
            }
            else
            {
    
                if($total >= 70 && $total <= 100)
                {
                    $grade = 'A';
                    $status = 'PASS';
                }
                else if($total >= 60 && $total < 70)
                {
                    $grade = 'B+';
                    $status = 'PASS';
                }
                else if($total >= 50 && $total < 60)
                {
                    $grade = 'B';
                    $status = 'PASS';
                }
                else if($total >= 40 && $total < 50)
                {
                    $grade = 'C';
                    $status = 'PASS';
                }
                else if($total >= 30 && $total < 40)
                {
                    $grade = 'D';
                    $status = 'AVERAGE';
                }
                else 
                {
                    $grade = 'F';
                    $status = 'FAIL';
                }
            }

            $input['student_id']   = $studentId;
            $input['module_id']    = $request->input('module_id'); 
            $input['ca']           = $request->input('CA')[$index];
            $input['fe']           = $request->input('FE')[$index];
            $input['marks']        = $total;
            $input['status']       = $status;
            $input['grade']        = $grade;

            Result::create($input);
        }

        return redirect('lectureAllResults')->with('success', '[Student Result] Uploaded Succesfully');
        
    }

    public function exceladdresult(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xls,xlsx,csv'
        ]);

        Excel::import(new ResultImport, $request->file('excel_file'));

        return back()->with('success','Excel data Succcessfully Imported');
    }

    public function searchResult(Request $request)
    {
        $lecture  = Auth::guard('lecture')->user();

        $query = Result::query();

        if($request->ajax())
        {
            $outputs = $query->where('fullname','like', '%'.$request->search.'%')
                            ->orWhere('email','like', '%'.$request->search.'%')
                            ->orWhere('username','like', '%'.$request->search.'%')
                            ->orWhere('phone','like', '%'.$request->search.'%')
                            ->orWhere('reg_no','like', '%'.$request->search.'%')
                            ->orWhere('gender','like', '%'.$request->search.'%')
                            ->orWhere('birthdate','like', '%'.$request->search.'%')
                            ->get();

            return response()->json(['outputs'=>$outputs]);
        }

        $results = $query->get();

        return view('lecture.lectureAllResults', ['lecture'=> $lecture, 'results'=>$results]);
    }

    public function lectureupdateresult(Request $request)
    {
        $lecture = Auth::guard('lecture')->user();
        
        $incomingFields = $request->validate([
            'module_id' => 'required',
            'student_id' => 'required',
            'CA' =>  'required|numeric',
            'FE' => 'required|numeric',
        ],[
            'CA.required' => 'The Class Assignments is required',
            'CA.numeric' => 'The Class Assignments needs number inputs',
            'CA.max:3' => 'The Class Assignments maximum number is 3',
            'FE.numeric' => 'The Final Exam needs number inputs',
            'FE.required' => 'The Final Exam is required',
        ]);

        $studentId = $incomingFields['student_id'];

        $total = $incomingFields['FE'] + $incomingFields['CA'];

        if($incomingFields['CA'] < 24  || $incomingFields['FE'] < 16)
        {
            if($total >= 70 && $total <= 100)
            {
                $grade = 'A';
                $status = 'SUPP';
            }
            else if($total >= 60 && $total < 70)
            {
                $grade = 'B+';
                $status = 'SUPP';
            }
            else if($total >= 50 && $total < 60)
            {
                $grade = 'B';
                $status = 'SUPP';
            }
            else if($total >= 40 && $total < 50)
            {
                $grade = 'C';
                $status = 'SUPP';
            }
            else if($total >= 30 && $total < 40)
            {
                $grade = 'D';
                $status = 'SUPP';
            }
            else 
            {
                $grade = 'F';
                $status = 'SUPP';
            }

        }
        else if($incomingFields['CA'] >= 24 && $incomingFields['FE'] >= 16)
        {

            if($total >= 70 && $total <= 100)
            {
                $grade = 'A';
                $status = 'PASS';
            }
            else if($total >= 60 && $total < 70)
            {
                $grade = 'B+';
                $status = 'PASS';
            }
            else if($total >= 50 && $total < 60)
            {
                $grade = 'B';
                $status = 'PASS';
            }
            else if($total >= 40 && $total < 50)
            {
                $grade = 'C';
                $status = 'PASS';
            }
            else if($total >= 30 && $total < 40)
            {
                $grade = 'D';
                $status = 'AVERAGE';
            }
            else 
            {
                $grade = 'F';
                $status = 'FAIL';
            }
        }
       
        $user = Student::where('id', $studentId)->first();

        if($user)
        {
            $result = $lecture->module->result->where('student_id', $user->id)->first();

            if($result)
            {
                $result->update([
                    'module_id' => $incomingFields['module_id'],
                    'student_id' => $user->id,
                    'ca' => $incomingFields['CA'],
                    'fe' => $incomingFields['FE'],
                    'marks' => $total,
                    'status' => $status,
                    'grade' => $grade
                ]);

                return redirect('lectureAllResults')->with('success', '[Student Result] Updated Succesfully');
            }
            else
            {
                Result::create([
                    'module_id' => $incomingFields['module_id'],
                    'student_id' => $user->id,
                    'ca' => $incomingFields['CA'],
                    'fe' => $incomingFields['FE'],
                    'marks' => $total,
                    'status' => $status,
                    'grade' => $grade
                ]);

                return redirect('lectureAllResults')->with('success', '[Student Result] Created Succesfully');
            }
        }
        else
        {
            return redirect('lectureAllResults')->with('error', '[No Student] Available');
        }
    }

    public function deleteresult($studentId)
    {
        if(Result::where('student_id', $studentId)->exists()) 
        {
            Result::where('student_id', $studentId)->delete();
            return back()->with('success', '[Result Deleted] Succesfully');
        }
        else
        {
            return back()->with('error', '[Result Delete] Unsuccessfully');
        }
    }
}
