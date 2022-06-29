@extends('layout.dashboard')

@section('title', 'ANGGOTA')

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
            <h1 class="display-6">Data anggota</h1>
            <hr class="my-4">     

            <a href="anggota/create" class="btn btn-primary mb-1">Tambah anggota</a>       
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Jenis Kelamin</th>
                   
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{$data->nama }}</td>
                        <td>{{$data->npm }}</td>
                        <td>{{$data->prodi}}</td>
                        <td>{{$data->jk}}</td>
                        
                        <td>
                        <a  class="btn btn-warning btn-sm my-1" href="{{route('anggota.edit',$data->id)}}"> Edit </a>
                                        <form action="{{ route('anggota.destroy',$data->id) }}" class="pull-left"  method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button  class="btn btn-danger btn-sm my-1" onclick="return confirm('Anda yakin ingin menghapus data ini?')"> Delete
                                        </button>
                                      </form>

                                          <form action="/anggota" method="post" class="display d-inline">
                                            @csrf
                                          @method('delete')
                                          </form>
                        <a  class="btn btn-primary my-1" href="{{route('anggota.show',$data->id)}}"> Detail </a>              
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection