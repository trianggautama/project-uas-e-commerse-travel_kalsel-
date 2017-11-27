@extends('layouts.adminlayout')

@section('content')

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data  Jadwal
     </h1>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-xs-12">
         <!-- /.box -->

         <div class="box">
                     <div class="box-header">
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                       <form class="form-horizontal form-label-left" method="post" action="">
                         {{method_field('PUT') }}
                         {{ csrf_field() }}

                         <br>
                         <br>
                         <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">tanggalberangkat <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  class="form-control col-md-7 col-xs-12"   name="tanggal_berangkat"  required="required" type="date" value="{{$jadwal->tanggal_berangkat}}">
                           </div>
                         </div>
                         <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kuota <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  class="form-control col-md-7 col-xs-12"  name="kuota"  required="required" type="number" value="{{$jadwal->kuota}}">
                           </div>
                         </div>
                         <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Harga <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  class="form-control col-md-7 col-xs-12"  name="harga"  required="required" type="text" value="{{$jadwal->harga}}">
                           </div>
                         </div>

                         <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Destinasi <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <select class="form-control" name="destinasi_id">
                               <option value="">--</option>
                               @foreach($destinasi as $d)
                               <option value="{{$d->id}}">{{$d->nama_destinasi}}</option>
                                @endforeach
                             </select>
                           </div>
                         </div>

                       <br>
                       <br>
                       <br>


                         <div class="form-group ">
                           <div class="col-md-6 col-md-offset-3">
                             <button type="submit" class="btn btn-primary">Cancel</button>
                           <!--<button id="send" type="submit" class="btn btn-success" name="submit">Submit</button>-->
                             <input class="btn btn-success" type="submit" name="submit" value="Submit">
                             {{csrf_field() }}
                           </div>
                           <br>
                           <br>
                         </div>
                       </form>

                     </div>
                     <!-- /.box-body -->
                   </div>
                   <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>



   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
