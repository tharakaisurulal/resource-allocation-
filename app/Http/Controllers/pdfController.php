<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\lecturerrequest;

class pdfController extends Controller
{
    public function exportpdf($id){
        /*$data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];*/

        $lecturerrequest = lecturerrequest::find($id);

        $pdf = PDF::loadView('admin.pdf',compact('lecturerrequest'));

        return $pdf->download('appproval.pdf');
     }
}
