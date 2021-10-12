<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PDFGenerator extends Controller
{
    public function barangayCertificate(){
        $pdf = PDF::loadView('generate.barangay_clearance');
        return $pdf->stream();
    }
}
