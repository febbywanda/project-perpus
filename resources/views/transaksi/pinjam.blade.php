@extends('layout.dashboard')

@section('title', 'pinjam')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Pinjam Buku</h1>
            <hr class="my-4">     

            <form action="/transaksi" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="type_transaksi">Type Transaksi</label>
                    <select class="form-control" id="type_transaksi" name="type_transaksi">
                        <option value="pinjam">Pinjam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id">Id transaksi</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="ID Transaksi" readonly="true">
                </div>

                <div class="form-group">
                    <label for="kode_transaksi">Kode transaksi</label>
                    <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" placeholder="ID Buku" data-url="{{ url('/') }}">
                </div>

                <div class="form-group">
                    <label for="buku_id">Kode Buku</label>
                    <input type="text" class="form-control" id="buku_id" name="buku_id" placeholder="ID Buku" data-url="{{ url('/') }}">
                </div>
                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" readonly="true">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Buku</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Buku" readonly="true">
                </div>
               
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="kategori">Tanggal Pinjam</label>
                            <input type="date" class="form-control" name="tgl_pinjam">
                        </div>
                        <div class="col-sm-6">
                            <label for="kategori">Tanggal Kembali</label>
                            <input type="date" class="form-control" name="tgl_kembali" readonly="true">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="anggota_id">ID Anggota Peminjam</label>
                    <input type="text" class="form-control" id="anggota_id" name="anggota_id" placeholder="ID Anggota" data-url="{{ url('/') }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Peminjam</label>
                    <input type="text" class="form-control" id="nama" name="nama"  readonly="true">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="ID Buku" data-url="{{ url('/') }}">
                </div>

                <div class="form-group">
                    <label for="ket">keterangan</label>
                    <input type="text" class="form-control" id="ket" name="ket" placeholder="ID Buku" data-url="{{ url('/') }}">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <script>
        $(function(){
            $('#buku_id').on('change', function(e){
                let buku_id = $('#buku_id').val();
                console.log(buku_id);
                let url = $(this).data('url')+'/transaksi/showBuku/'+buku_id;
                console.log(url);
                getBuku(url);
            })
            $('#anggota_id').on('change', function(e){
                let anggota_id= $('#anggota_id').val();
                console.log(anggota_id);
                let url = $(this).data('url')+'/transaksi/getAnggota/'+anggota_id;
                console.log(url);
                getAnggota(url);
            })
        })
        function getBuku(url){
            $.getJSON(url, function(data){
                if(data === false){
                    alert('Buku tidak ditemukan!');
                    $('#buku_id').val("");
                }else{
                    $('#judul').val(data[0].judul);
                    $('#deskripsi').val(data[0].deskripsi);
                   
                }
            });
        }
        function getAnggota(url){
            $.getJSON(url, function(data){
                if(data === false){
                    alert('Data anggota tidak ditemukan!');
                    $('#anggota_id').val("");
                    $('#nama').val("");
                }else{
                    $('#nama').val(data.nama);
                }
            });
        }
    </script>
@endsection