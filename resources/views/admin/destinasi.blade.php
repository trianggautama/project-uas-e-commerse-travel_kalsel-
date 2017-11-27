@extends('layouts.adminlayout')

@section('content')

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data Destinasi
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
             <a   href="##tambahjadwal" data-toggle="modal"
                              data-target="#tambahjadwal"><i class="fa fa-plus pull-right"> Tambah semester</i></a>
                <br>
                <br>
             <table id="example1" class="table table-bordered table-striped">

               <thead>
               <tr>
                 <th>Kode Destinasi</th>
                 <th>Nama Destinasi</th>
                 <th>Alamat</th>
                 <th>tools</th>
               </tr>
               </thead>
               <tbody>
                 @foreach($destinasi as $d)
               <tr>
                 <td>{{$d->id}}</td>
                 <td>{{$d->nama_destinasi}}</td>
                 <td>{{$d->alamat}}</td>
                   <td class="text-center">
                     <a href="#" class="btn btn-danger" title="hapus">
                       <i class="fa fa-trash"></i>

                     </a>
                     <a href="#" class="btn btn-primary" title="edit">
                       <i class="fa fa-edit"></i>

                     </a>
                     <a href="#" class="btn btn-info" title="detail">
                       <i class="fa fa-bars"></i>

                     </a>
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
   <div id="tambahjadwal" class="modal fade" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           <h4 class="modal-title">Tambah data Semester</h4>
         </div>
         <div class="modal-body">
           <!-- form login -->
           <form  method="post" action="">

             <div class="form-group">
               <label for="password">Tanggal Berangkat</label>
               <input type="date" name="tanggal_berangkat"  class="form-control" />
             </div>

             <div class="form-group">
               <label for="password">Kuota</label>
               <input type="number" name="kuota" class="form-control" />
             </div>
             <div class="form-group">
               <label for="password">Harga</label>
               <input type="text" name="harga" class="form-control" />
             </div>
             <div class="form-group">
              <label >Destinasi</label>
                <select class="form-control" name="destinasi_id">
                  <option value="">--</option>
                  @foreach($destinasi as $d)
                  <option value="{{$d->id}}">{{$d->nama_destinasi}}</option>
                   @endforeach
                </select>
              </div>
              <div class="text-right">

                <input class="btn btn-success" type="submit" name="submit" value="Submit">
                {{csrf_field() }}
              </div>
            </div>

           </form>
           <!-- end form login -->
         </div>
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

 </div>
 <!-- /.content-wrapper -->

@endsection
