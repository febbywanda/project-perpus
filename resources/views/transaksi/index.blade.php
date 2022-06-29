@extends('layout.dashboard')

@section('title', 'TRANSAKSI')

@section('content')
    <div class="container">
        <div class="jumbotron">
        @if(session('msg'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{session('msg')}}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <h1 class="display-6">Data Peminjaman Buku</h1>
            <hr class="my-4">     

            <a href="transaksi/create" class="btn btn-primary mb-1">Peminjaman Buku</a>
            <!-- <a href="buku/kembali" class="btn btn-primary mb-1">Pengembalian Buku</a>        -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    
                    <th scope="col">Id pinjam</th>
                    <th scope="col">Id buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $data)
                    <tr>
                        
                        <td>{{$data->id}}</td>
                        <td>{{$data->buku_id}}</td>
                        <td>{{$data->judul }}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->tgl_pinjam }}</td>
                        <td>{{$data->tgl_kembali }}</td>
                        <td>
                            @if($data->tgl_kembali == null)
                                <a href="{{route('transaksi.edit', $data->id)}}" class="badge badge-primary">Pengembalian</a>
                            @else
                                <p class="badge badge-success">Dikembalikan</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection