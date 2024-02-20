<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Result;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;

use App\Imports\StudentImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// use Vendor\phpoffice\phpspreassheet\Excel
// use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function admindashboard()
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.adminDashboard', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }

    public function adminallmodules()
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.adminAllModules', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }

    public function adminallcourses()
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.adminAllCourses', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }

    public function adminalldepartments()
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.adminAllDepartments', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }

    public function adminallresults() 
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.adminAllResults', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }


    public function adminalllectures()
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.adminAllLectures', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }

    public function adminallstudents()
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        return view('admin.adminAllStudents', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }

    public function adminaddmodule(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
            'module_code' => 'required|string',
            'credit' => 'required|integer',
            'semester_year' => 'required|string',
            'department_id' => 'required|integer',
            'department_share' => 'required|integer',
        ]);

        $modulereg = Module::create($incomingFields);
        
        if($modulereg)
        {
            return back()->with('success', '[Module Register] Successfully');
        }
        else{
            return back()->with('error','[Module Register] Unsuccesfully');
        }
    }

    public function addDepartment(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required',
        ]);
        
        $dep = Department::create($incomingFields);

        if($dep)
        {
            return back()->with('success', '[Department Register] Successfully');
        }
        else{
            return back()->with('error','[Department Register] Unsuccesfully');
        }
    }

    public function adminupdatedepartment(Request $request)
    {
        $incomingFields = $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        
        $dep = Department::where('id', $incomingFields['id'])->first();

        if($dep)
        {
            $dep->update(['name' => $incomingFields['name']]);

            return back()->with('success', '[Department Register] Successfully');
        }
        else{
            return back()->with('error','[Department Register] Unsuccesfully');
        }
    }

    public function adminaddcourse(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required|string',
            'year_duration' => 'required|string',
            'department_id' => 'required|integer'
        ]);

        $addCourse = Course::create($incomingFields);

        if($addCourse)
        {
            return back()->with('success', '[Course Register] Successfully');
        }
        else{
            return back()->with('error','[Course Register] Unsuccesfully');
        }
    }

    public function adminupdatecourse(Request $request)
    {
        $incomingFields = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'year_duration' => 'required|string',
            'department_id' => 'required|integer'
        ]);

        $updateCourse = Course::where('id', $incomingFields['id'])->first();

        $updated = $updateCourse->update([
            'name' => $incomingFields['name'],
            'year_duration' => $incomingFields['year_duration'],
            'department_id' => $incomingFields['department_id']
        ]);

        if($updated)
        {
            return back()->with('success', '[Course Register] Successfully');
        }
        else{
            return back()->with('error','[Course Register] Unsuccesfully');
        }
    }

    public function exceladdstudent(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|file|mimes:xls,xlsx,csv'
        ]);

        Excel::import(new StudentImport, $request->file('excel_file'));

        return back()->with('success','Excel data Succcessfully Imported');
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
            'password' => '1234567890'
        ]);
        
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        
        $student = Student::create($incomingFields);

        if($student)
        {
            return back()->with('success','[Student Registered] Successfully');
        }
        else
        {
            return back()->with('error','[Student Registration] Unsuccessful');
        }
    }

    public function admindeletestudent($id)
    {
        $data = Student::find($id);

        if($data)
        {
            $data->delete();

            return back()->with('success','[Student Delete] Succesfully');
        }
        else
        {
            return back()->with('error','[Student Delete] Unsuccesfully');
        }
    }

    public function admindeletedepartment($id)
    {
        $data = Department::find($id);

        if($data)
        {
            $data->delete();

            return back()->with('success','[Department Delete] Succesfully');
        }
        else
        {
            return back()->with('error','[Department Delete] Unsuccesfully');
        }
    }

    public function admindeletelecture($id)
    {
        $data = Lecture::find($id);

        if($data)
        {
            $data->delete();

            return back()->with('success','[Lecture Delete] Succesfully');
        }
        else
        {
            return back()->with('error','[Lecture Delete] Unsuccesfully');
        }
    }

    public function admindeleteresult($id)  
    {
        $data = Result::find('$id');

        if($data)
        {
            $data->delete();
          
            return back()->with('success','Result Delete] Succesfully');
        }
        else
        {
            return back()->with('error','Result Delete] Unsuccesfully');
        }

    }


    public function searchStudent(Request $request)
    {
        $admin = Auth::guard("admin")->user();
        
        $students = Student::all();
        $lectures = Lecture::all();
        $results = Result::all();
        $modules = Module::all();
        $departments = Department::all();
        $courses = Course::all();

        $query = Student::query();

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

        $students = $query->get();

        return view('admin.adminAllStudents', ['admin'=>$admin, 'students'=>$students, 'lectures'=>$lectures, 'modules'=>$modules, 'departments'=>$departments, 'courses'=>$courses,'results'=>$results]);
    }

    public function adminlogout()
    {
        $admin = Auth::guard('admin');
        auth()->logout();
        $admin->logout();

        return redirect('select')->with('success','[Admin Logout] Succesfully');
    }
}
