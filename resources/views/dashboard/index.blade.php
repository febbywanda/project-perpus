
@extends('layout.dashboard')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PERPUSKU</title>
  <style>
body{
background-image: url("img/gambar5.jpeg");
width: 150;
height: 0;
}
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
   <div class="col-6 col-lg-3">
    <div class="small-box bg-primary">
      <div class="inner">
          <h3>150</h3>
         
          <p>BOOK</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>
          
          <p>USER</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>150</h3>

          <p>MEMBER</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>150</h3>

          <p>TRANSACTION</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
</div>

        </div>
        </div>
      </body>
      </html>
@endsection