<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PDF;


class Gallo5Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $g5llos = Participante::orderBy('puntos5', 'DESC')->get();

        return view('gallo5.index', compact('g5llos'))->with('i');
    }

    public function pdf()
    {
        $g5llos = Participante::orderBy('puntos5', 'DESC')->get();

        $pdf = PDF::loadView('gallo5.pdf',['g5llos'=>$g5llos]);
        return $pdf->stream();
    }
}