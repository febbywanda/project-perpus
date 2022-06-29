@extends('layout.dashboard')

@section('title', 'BUKU')

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
            <h1 class="display-6">Data Buku</h1>
            <hr class="my-4">     

            <a href="buku/create" class="btn btn-primary mb-1">Tambah Buku</a>       
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Jumlah Buku</th>
                    <th scope="col">Deskripsi Buku</th>
                    <th scope="col">Lokasi </th>
                    <th scope="col">Cover Buku</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $buku)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{ $buku->judul }}</td>
                        <td>{{ $buku->pengarang }}</td>
                        <td>{{ $buku->penerbit}}</td>
                        <td>{{ $buku->tahun_terbit}}</td>
                        <td>{{ $buku->jumlah_buku }}</td>
                        <td>{{ $buku->deskripsi }}</td>
                        <td>{{ $buku->lokasi}}</td>
                        <td>{{ $buku->cover}}</td>
                        <td>
                        <a  class="btn btn-warning btn-sm my-1" href="{{route('buku.edit', $buku->id)}}"> Edit </a>
                                        <form action="{{ route('buku.destroy', $buku->id) }}" class="pull-left"  method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button  class="btn btn-danger btn-sm my-1" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                        </button>
                                      </form>

                                          <form action="/buku" method="post" class="display d-inline">
                                            @csrf
                                          @method('delete')
                                          </form>
                        <a  class="btn btn-primary my-1" href="{{route('buku.show', $buku->id)}}"> Detail </a>              
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection