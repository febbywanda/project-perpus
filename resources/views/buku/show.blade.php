@extends('layout.dashboard')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Detail Data Buku</h1>
            <hr class="my-4">
            <a href="/buku" class="btn btn-dark pull-right my-3">Back<< </a>     
            <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
                  </div>

             @if(session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
              @endif
                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Buku" value=" {{ $data->judul }} " readonly="true">
                </div>
                <div class="form-group">
                    <label for="isbn">isbn Buku</label>
                    <input type="text" class="form-control" name="isbn" placeholder="isbn Buku" value="{{  $data->isbn }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="pengarang">pengarang Buku</label>
                    <input type="text" class="form-control" name="pengarang" placeholder="pengarang Buku" value="{{  $data->pengarang }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="penerbit">penerbit Buku</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="penerbit Buku" value="{{ $data->penerbit }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">tahun_terbit Buku</label>
                    <input type="text" class="form-control" name="tahun_terbit" placeholder="tahun_terbit Buku" value="{{ $data->tahun_terbit }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="jumlah_buku">jumlah_buku Buku</label>
                    <input type="text" class="form-control" name="jumlah_buku" placeholder="jumlah_buku Buku" value="{{  $data->jumlah_buku }}" readonly="true">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi Buku</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Buku" value="{{ $data->deskripsi }}" readonly="true">
                </div>
                <div class="form-group">
                    <label for="lokasi">lokasi Buku</label>
                    <input type="text" class="form-control" name="lokasi" placeholder="lokasi Buku" value="{{ $data->lokasi }}" readonly="true">
                </div>
               
                <div class="form-group">
                    <label for="cover">cover Buku</label>
                    <input type="text" class="form-control" name="cover" placeholder="cover Buku" value="{{  $data->judul}}" readonly="true">
                </div>
                
               
            </form>
        </div>
    </div>
@endsection