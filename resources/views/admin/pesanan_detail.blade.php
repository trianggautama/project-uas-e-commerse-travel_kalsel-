@extends('layouts.adminlayout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Simple Tables
        <small>preview of simple tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Striped Full Width Table</h3>
            </div>
            <!-- /.box-header -->
<br>
<br>
<br>
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr style="margin-left:15px;">
                  <td>Nama               : {{$pesanan->nama}}</td><br>
                </tr>
                <tr>
                  <td>Email              : {{$pesanan->email}}</td><br>
                </tr>
                <tr>
                  <td>No Hp              : {{$pesanan->no_hp}}</td><br>
                </tr>
                <tr>
                  <td>Tanggal Pemesanan  : {{$pesanan->created_at}}</td>
                </tr>
                <tr>
                  <td>Tujuan             : {{$pesanan->jadwal->destinasi->nama_destinasi}}</td>
                </tr>
                <tr>
                  <td>tanggal berangkat  : {{$pesanan->jadwal->tanggal_berangkat}}</td>
                </tr>
                <tr>
                  <td>Jumlah Pesanan     : {{$pesanan->jumlah_orang}}</td>
                </tr>
                <tr>
                  <td>Harga/tiket        : Rp.{{$pesanan->jadwal->harga}},00</td>
                </tr>
                <tr>
                  <td>Total Bayar  : {{$pesanan->total_bayar}}</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
