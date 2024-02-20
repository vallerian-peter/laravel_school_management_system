<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Result;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PdfDowloadController extends Controller
{
    public function studentdownloadtranscript()
    {
        $student = Auth::guard('student')->user();

        $modules = Module::where("department_share", $student->course->department->id)->get();

        $results = Result::select('modules.*', 'results.*')
                         ->join('modules', 'modules.id','=','results.module_id')
                         ->where('results.student_id', $student->id)
                         ->get();

                         
        $data = [
            'student' => $student,
            'modules' => $modules,
            'results' => $results,
        ];

        $pdf = Pdf::loadView('student.downloadTranscript', $data)->setPaper('A4', 'landscape');
        return $pdf->download('invoice.pdf');
    }
}
