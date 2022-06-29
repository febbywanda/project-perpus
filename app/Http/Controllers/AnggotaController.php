<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Anggota;
use Illuminate\Support\Facades\Redirect;
use Alert;


class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$anggota = DB::table('members')->get();
        $anggota = Member::all();
        return view('anggota.index',['anggota' => $anggota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota = DB::table('members')->get();
       
        return view('anggota.create',['anggota' => $anggota]);
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
       $anggota = new Member;
        $anggota->user_id = $request->user_id;
        $anggota->npm = $request->npm;
        $anggota->nama = $request->nama;
        $anggota->tempat_lahir = $request->tempat_lahir;
        $anggota->tgl_lahir = $request->tgl_lahir;
        $anggota->jk = $request->jk;
        $anggota->prodi = $request->prodi;
        $anggota->save();

        return redirect('/anggota')->with('status','Data Anggota Berhasil DiTambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Member::findOrFail($id);

        return view('anggota.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$anggota = Member::all();
        return view('anggota.edit', ['anggota' => $anggota]);
        $anggota = Member::findOrFail($id);
        return view('anggota.edit', compact('anggota', 'anggota'));*/
        $data = Member::findOrFail($id);
        return view('anggota.edit', compact('data'));
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
        Member::find($id)->update($request->all());

        //alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->to('anggota')->with ('status','data anggota berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        
        Member::find($id)->delete();
        //$id->destroy();
       return redirect('/anggota')->with('status','Data Anggota Berhasil DiHapus!');
    }
}
