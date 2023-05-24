<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiketModel;
use Dompdf\Dompdf;

class TiketController extends Controller
{
    public function __construct()
    {
        $this->TiketModel = new TiketModel();
    }

    public function index()
    {
        $data = [
            'tiket'=>$this->TiketModel->allData(),
        ];
        return view('v_tiket', $data);
    }

    public function print()
    {
        $data = [
            'tiket'=>$this->TiketModel->allData(),
        ];
        return view('v_print', $data);
    }

    public function printpdf()
    {
        $data = [
            'tiket'=>$this->TiketModel->allData(),
        ];
        $html = view('v_printpdf', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}
