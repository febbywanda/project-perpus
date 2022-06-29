<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use Illuminate\Database\DatabaseTransactionsManager;
use SebastianBergmann\Type\NullType;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = DB::table('transactions')
        ->join('books', 'books.id', '=', 'transactions.buku_id')
        ->join('members', 'transactions.anggota_id', '=', 'members.id')
        ->select('transactions.id','members.nama','transactions.buku_id',
                 'books.judul', 
                 'books.deskripsi',
                 'transactions.tgl_pinjam','transactions.tgl_kembali')
        ->get();

        // return $transaksi;
        return view('transaksi.index', compact('transaksi'));  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.pinjam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Member::where('id', $request->anggota_id)->count() > 0){
            if(Book::where('id', $request->buku_id)->count() > 0){
                // return $request;
                $transaksi = new Transaction;
                // $transaksi->type_transaksi = $request->type_transaksi;
                
                $transaksi->kode_transaksi=$request->kode_transaksi;
                $transaksi->anggota_id = $request->anggota_id;
                $transaksi->buku_id = $request->buku_id;
                $transaksi->status = $request->status;
                $transaksi->ket = $request->ket;
                if($request->type_transaksi == 'pinjam'){
                    $transaksi->tgl_pinjam = $request->tgl_pinjam;
                    $transaksi->tgl_kembali = null;
                    $transaksi->save();
                    return redirect('transaksi')->with('msg','Data Berhasil di Simpan');
                }else{
                    $transaksi->tgl_kembali = $request->tgl_kembali;
                }

                // return $transaksi;
            }else{
                return json_encode('Buku tidak ditemukan!');
            }
        }else{
            return json_encode('Anggota tidak ditemukan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pinjaman = DB::table('transactions')
        ->join('books', 'books.id', '=', 'transactions.buku_id')
        ->join('members', 'transactions.anggota_id', '=', 'members.id')
        ->select('transactions.id','members.nama','transactions.buku_id',
                 'books.judul', 
                 'books.deskripsi',
                 'transactions.tgl_pinjam','transactions.tgl_kembali')
        ->where('transactions.id', '=', $id)->first();

        return json_encode($pinjaman);
    }

    public function showBuku($id)
    {
        // $buku = Buku::where('buku_id', $id)->first();
        
        if(Book::where('id', $id)->count() > 0){
            $buku = DB::table('books')
            ->select('books.id','books.judul', 'books.deskripsi')
            ->where('books.id', '=', $id)
            ->get();

            return $buku;
        }else{
            return 'false';
        }
    }

    public function getAnggota($id)
    {
        // $buku = Buku::where('buku_id', $id)->first();
        
        $anggota = Member::where('id', $id)->first();
        // return $anggota;
        if($anggota === null){
            return 'false';
        }else{
            return $anggota;
        }
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinjaman= DB::table('transactions')
        ->join('books', 'books.id', '=', 'transactions.buku_id')
        ->join('members', 'transactions.anggota_id', '=', 'members.id')
        ->select('transactions.id','members.nama','transactions.buku_id',
                 'books.judul', 'transactions.kode_transaksi', 'transactions.anggota_id',
                 'books.deskripsi', 'transactions.status','transactions.ket',
                 'transactions.tgl_pinjam','transactions.tgl_kembali')
      ->where('transactions.id', '=', $id)->first();
      
        // return $transaksi;
        return view('transaksi.kembali', compact('pinjaman'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestphp
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       Transaction::where('id',$id)
        ->update(['tgl_kembali' => $request->tgl_kembali]);
        return redirect('transaksi')->with('msg','Buku Telah dikembalikan');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
