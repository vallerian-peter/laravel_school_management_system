<?php

namespace App\Imports;

// use App\Models\Course;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
// use Maatwebsite\Excel\Concerns\WithStartRow; , WithStartRow
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            $cou = $row['course'];
            $reg = $row['registration_number'];

            $course = Course::where('name','like','%'.$cou.'%')->first();
            $student = Student::where('reg_no','like','%'.$reg.'%')->first();

            if($student)
            {
                return  null;
            }

            return new Student([
                'fullname' => $row['fullname'],
                'email' => $row['email'],
                'username' => $row['username'],
                'phone' => $row['phone'],
                'reg_no' => $row['registration_number'],
                'gender' => $row['gender'],
                'birthdate' => $row['birthdate'],
                'course_id' => $course->id,
                'password' => Hash::make('1234567890')
            ]);
    
    }

}

