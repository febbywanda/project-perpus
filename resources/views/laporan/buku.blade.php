<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
		<center>
			<h4>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
			<h5><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
		</center>
		<br/>
		<a href="/laporan/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>judul</th>
					<th>isbn</th>
					<th>pengarang</th>
					<th>penerbit</th>
					<th>Tahun Terbit</th>
					<th>Jumlah Buku</th>
                    <th>deskripi</th>
                    <th>lokasi</th>
                    <th>cover</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($buku as $data)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$data->judul}}</td>
					<td>{{$data->isbn}}</td>
					<td>{{$data->pengarang}}</td>
					<td>{{$data->penerbit}}</td>
					<td>{{$data->tahun_terbit}}</td>
                    <td>{{$data->jumlah_buku}}</td>
					<td>{{$data->deskripsi}}</td>
                    <td>{{$data->lokasi}}</td>
					<td>{{$data->cover}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
 
	</div>
 
</body>
</html>