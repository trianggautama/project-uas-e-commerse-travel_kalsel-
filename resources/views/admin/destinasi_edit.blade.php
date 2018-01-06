@extends('layouts.adminlayout')

@section('content')

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Data  Destinasi
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
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Destinasi <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  class="form-control col-md-7 col-xs-12"   name="nama_destinasi"  required="required" type="text" value="{{$destinasi->nama_destinasi}}">
                           </div>
                         </div>
                         <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  class="form-control col-md-7 col-xs-12"  name="alamat"  required="required" type="text" value="{{$destinasi->alamat}}">
                           </div>
                         </div>
                         <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Keterangan <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea name="keterangan"  class="form-control col-md-7 col-xs-12">{{$destinasi->keterangan}}</textarea>
                           </div>
                         </div>
                         <div class="item form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fasilitas <span class="required"></span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea name="fasilitas"  class="form-control col-md-7 col-xs-12">{{$destinasi->fasilitas}}</textarea>
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
