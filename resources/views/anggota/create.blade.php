@extends('layout.dashboard')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Tambah Data anggota</h1>
            <hr class="my-4">     

            <form action="/anggota" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="user_id">user_id anggota</label>
                    <input type="text" class="form-control" name="user_id" placeholder="user_id anggota" value="{{ old('user_id') }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama anggota</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama anggota" value="{{ old('nama') }}">
                </div>
                <div class="form-group">
                    <label for="npm">npm anggota</label>
                    <input type="text" class="form-control" name="npm" placeholder="npm anggota" value="{{ old('npm') }}">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">tempat_lahir anggota</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir anggota" value="{{ old('tempat_lahir') }}">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">tgl_lahir anggota</label>
                    <input type="date" class="form-control" name="tgl_lahir" placeholder="tgl_lahir anggota" value="{{ old('tgl_lahir') }}">
                </div>
              
                <div class="form-group">
                    <label for="jk">jk anggota</label>
                    <select class="form-control" name="jk" required="">
                                                <option value=""></option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                </div>
                <div class="form-group">
                    <label for="prodi">prodi anggota</label>
                    <select class="form-control" name="prodi" required="">
                                                <option value=""></option>
                                                <option>Teknik Informatika</option>
                                                <option>Sistem Informasi</option>
                                                <option>Pendidikan Teknik Informatika</option>
                                            </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection