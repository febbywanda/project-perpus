<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Barryvdh\DomPDF\PDF;
use FontLib\Table\Type\post;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Book::all();
        return view('buku.index',['buku' => $buku]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = DB::table('books')->get();
       
        return view('buku.create',['buku' => $buku]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //return $request;
       $buku = new Book;
       $buku->judul = $request->judul;
       $buku->isbn = $request->isbn;
       $buku->pengarang = $request->pengarang;
       $buku->penerbit = $request->penerbit;
       $buku->tahun_terbit = $request->tahun_terbit;
       $buku->jumlah_buku = $request->jumlah_buku;
       $buku->deskripsi = $request->deskripsi;
       $buku->lokasi = $request->lokasi;
       $buku->cover= $request->cover;
       $buku->save();

       return redirect('/buku')->with('status','Data Buku Berhasil DiTambahkan!');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Book::findOrFail($id);

        return view('buku.show', compact('data'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Book::findOrFail($id);
        return view('buku.edit', compact('data'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Book::find($id)->update($request->all());

        //alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('buku')->with('status','data berhasil di update!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();
       return redirect('/buku')->with('status','Data Anggota Berhasil DiHapus!');
  
    }
    public function buku_pdf(){
        $buku = Book::all();
        return view('buku.index',['buku' => $buku]);
    }

}