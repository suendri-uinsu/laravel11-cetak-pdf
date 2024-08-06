<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentController extends Controller
{
    public function index()
    {
        $pdf = Pdf::loadView('cetakpdf');
        return $pdf->download('cetakpdf.pdf');
    }
}
