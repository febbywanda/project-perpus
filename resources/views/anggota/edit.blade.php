@extends('layout.dashboard')

@section('title', 'Laravel - SI Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Ubah Data anggota</h1>
            <hr class="my-4">     
            <form action="{{ route('anggota.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                <div class="form-group">
                    <label for="user_id">user_id anggota</label>
                    <input type="text" class="form-control" name="user_id" placeholder="user_id anggota" value=" {{ $data->user_id }} ">
                </div>
                <div class="form-group">
                    <label for="npm">npm anggota</label>
                    <input type="text" class="form-control" name="npm" placeholder="npm anggota" value="{{  $data->npm }}">
                </div>
                <div class="form-group">
                    <label for="nama">nama anggota</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama anggota" value="{{  $data->nama }}">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">tempat_lahir anggota</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir anggota" value="{{ $data->tempat_lahir }}">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">tgl_lahir anggota</label>
                    <input type="text" class="form-control" name="tgl_lahir" placeholder="tgl_lahir anggota" value="{{ $data->tgl_lahir }}">
                </div>
                <div class="form-group">
                    <label for="jk">jumlah_anggota anggota</label>
                    <select class="form-control" name="jk" value="{{ $data->jk}}" required="">
                                            <option value=""></option>
                                            <option value="Laki-laki" {{$data->jk === "Laki-laki" ? "selected" : ""}}>Laki-laki</option>
                                            <option value="Perempuan" {{$data->jk === "Perempuan" ? "selected" : ""}}>Perempuan</option>
                                        </select>
                   </div>

                <div class="form-group">
                    <label for="prodi">prodi anggota</label>
                    <select class="form-control" name="prodi" required="">
                                            <option value=""></option>
                                            <option value="Teknik Informatika" {{$data->prodi === "Teknik Informatika" ? "selected" : ""}} >Teknik Informatika</option>
                                            <option value="Sistem Informasi" {{$data->prodi === "Sistem Informasi" ? "selected" : ""}} >Sistem Informasi</option>
                                            <option value="Pendidikan Teknik Informatika" {{$data->prodi === "Pendidikan Teknik Informatika" ? "selected" : ""}} >Pendidikan Teknik Informatika</option>
                                        </select>   
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection