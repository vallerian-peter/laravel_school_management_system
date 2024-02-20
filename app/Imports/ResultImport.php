<?php

namespace App\Imports;

use App\Models\Module;
use App\Models\Result;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ResultImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $reg = $row['registration_number'];
        $mod = $row['module_name'];

        $student = Student::where('reg_no','like','%'.$reg.'%')->first();
        $module = Module::where('name','like','%'.$mod.'%')->first();

        $total = $row['fe'] + $row['ca'];
            
            if($row['ca'] < 24 || $row['fe'] < 16)
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

        return new Result([
            'student_id'    => $student->id,
            'module_id'     => $module->id,
            'ca'            => $row['ca'],
            'fe'            => $row['fe'],
            'marks'         => $total,
            'status'        => $status,
            'grade'         => $grade,
        ]);
    }
}
