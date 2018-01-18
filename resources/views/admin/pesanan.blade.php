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
             @if(session('msg'))
    <div class="alert alert-success">

        <p>{{session('msg')}}</p>

    </div>
    @endif
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
                 <th>Status Bayar</th>
                              </tr>
               </thead>
               <tbody>
                 @foreach($pesanan as $p)
               <tr>
                 <td>{{$p->id}}</td>
                 <td><a href="/admin/detailpesanan/{{$p->id}}">{{$p->nama}}</a></td>
                 <td>{{$p->no_hp}}</td>
                 <td>{{$p->jadwal->tanggal_berangkat}}</td>
                 <td>{{$p->jadwal->destinasi->nama_destinasi}}</td>
                 <td>{{$p->jumlah_orang}}</td>
                <td>Rp.{{$p->total_bayar}}</td>
                   <td class="text-center">
                     <form class="form-horizontal form-label-left" method="post" action="/konfirmasi/{{$p->id}}">
                       {{method_field('PUT') }}
                       {{ csrf_field() }}
                    <input type="submit" name="submit" class="btn btn-sm btn-success" value="Konfirmasi bayar">
                   </form>
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
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
