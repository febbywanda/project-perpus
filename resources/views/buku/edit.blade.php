@extends('layout.dashboard')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Ubah Data Buku</h1>
            <hr class="my-4">     
            <form action="{{ route('buku.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Buku" value=" {{ $data->judul }} ">
                </div>
                <div class="form-group">
                    <label for="isbn">isbn Buku</label>
                    <input type="text" class="form-control" name="isbn" placeholder="isbn Buku" value="{{  $data->isbn }}">
                </div>
                <div class="form-group">
                    <label for="pengarang">pengarang Buku</label>
                    <input type="text" class="form-control" name="pengarang" placeholder="pengarang Buku" value="{{  $data->pengarang }}">
                </div>
                <div class="form-group">
                    <label for="penerbit">penerbit Buku</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="penerbit Buku" value="{{ $data->penerbit }}">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">tahun_terbit Buku</label>
                    <input type="text" class="form-control" name="tahun_terbit" placeholder="tahun_terbit Buku" value="{{ $data->tahun_terbit }}">
                </div>
                <div class="form-group">
                    <label for="jumlah_buku">jumlah_buku Buku</label>
                    <input type="text" class="form-control" name="jumlah_buku" placeholder="jumlah_buku Buku" value="{{  $data->jumlah_buku }}">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi Buku</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Buku" value="{{ $data->deskripsi }}">
                </div>
                <div class="form-group">
                    <label for="lokasi">lokasi Buku</label>
                    <select class="form-control" name="lokasi" required="">
                                            <option value=""></option>
                                            <option value="Rak 1" {{$data->lokasi === "Rak 1" ? "selected" : ""}} >Rak 1</option>
                                            <option value="Rak 2" {{$data->lokasi === "Rak 2" ? "selected" : ""}} >Rak 2</option>
                                            <option value="Rak 3" {{$data->lokasi === "Rak 3" ? "selected" : ""}} >Rak 3</option>
                                        </select> 
                </div>
                <div class="form-group">
                    <label for="cover">cover Buku</label>
                    <input type="text" class="form-control" name="cover" placeholder="cover Buku" value="{{  $data->judul}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection