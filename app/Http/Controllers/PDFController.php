<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    // https://github.com/barryvdh/laravel-dompdf

    static public function generateHtmlToPDF($img='')
                {
                    $html = '<style>
                                .cblue { color : blue; }
                             </style>
                             <h1 style="color:red">Generate html to PDF</h1>
                             <p class="cblue">Lorem Ipsum is simply dummy text of the printing and typesetting industry<p>'.$img;
                    
                    $pdf= PDF::loadHTML($html);
                    // $pdf = PDF::loadView('resume', $data);
                     return $pdf->stream();
                    // return $pdf->download('invoice.pdf');
                   
    }

}
