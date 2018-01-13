@extends('layouts.adminlayout')

@section('content')

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Pesanan
     </h1>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-xs-12">
         <!-- /.box -->

         <div class="box">
           <!-- /.box-header -->
           <div class="box-body">
             <hr>

                <br>
             <table id="example1" class="table table-bordered table-striped">

               <thead>
               <tr>
                 <th>Kode Pesanan</th>
                 <th>Nama </th>
                 <th>No.hp </th>
                 <th>Tanggal berangkat</th>
                 <th>Tujuan</th>
                 <th>Jumlah Orang</th>
                 <th>Total bayar</th>
                 <th>Tanggal Pembayaran</th>
                              </tr>
               </thead>
               <tbody>
                 @foreach($pesanan as $p)
               <tr>
                 <td>{{$p->id}}</td>
                 <td>{{$p->nama}}</td>
                 <td>{{$p->no_hp}}</td>
                 <td>{{$p->jadwal->tanggal_berangkat}}</td>
                 <td>{{$p->jadwal->destinasi->nama_destinasi}}</td>
                 <td>{{$p->jumlah_orang}}</td>
                <td>Rp.{{$p->total_bayar}}</td>
                   <td class="text-center">
                     {{$p->updated_at}}
                     </td>

               </tr>
               @endforeach
               </tbody>

             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
     <div class="row no-print">
            <div class="col-xs-12">
              <a href="{{ url('/admin/destinasi-print') }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
            </div>
          </div>
          <br>
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
