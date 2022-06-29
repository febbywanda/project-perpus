<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use app\Http\Controllers\BukuController;


class LaporanbController extends Controller
{
  public function index(){
    $buku = Book::all();
    return view('laporan.index',['buku' => $buku]);
}

//public function cetak_pdf(){
//$buku = Book::all();

  //$pdf=PDF::loadView('buku_pdf',['buku'=>$buku]);
  //return $pdf->download('laporan.pdf');
    
}



