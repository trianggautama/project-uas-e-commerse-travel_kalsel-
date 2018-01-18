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
             @if(session('msg'))
    <div class="alert alert-success">

        <p>{{session('msg')}}</p>

    </div>
    @endif
             <hr>
             <a   href="/admin/destinasi_tambah" ><i class="fa fa-plus pull-right"> Tambah Destinasi</i></a>
                <br>
                <br>
             <table id="example1" class="table table-bordered table-striped table-resposive">

               <thead>
               <tr>
                 <th>Kode Destinasi</th>
                 <th>Nama Destinasi</th>
                 <th>Alamat</th>
                 <th class="text-center">hapus</th>
                 <th class="text-center">Edit</th>
                 <th class="text-center">Detail</th>
               </tr>
               </thead>
               <tbody>
                 @foreach($destinasi as $d)
               <tr>
                 <td>{{$d->id}}</td>
                 <td>{{$d->nama_destinasi}}</td>
                 <td>{{$d->alamat}}</td>
                   <td class="text-center">
                     <form method="POST" action="/admin/destinasi/{{$d-> id}}/delete">
                   {{csrf_field()}}
                   <button type="submit" class="btn btn-danger"  onclick="return confirm('Anda yakin akan menghapus destinasi <?php echo $d-> nama_destinasi; ?>?')">
                     <span class="fa fa-trash" aria-hidden="true"></span>
                   </button>
                   <input type="hidden"  name="_method" value="delete"></input>
                   </form>


                     </a>
                   </td>
                   <td class="text-center">
                     <a  href="/admin/{{$d->id}}/destinasi_edit" class="btn btn-primary" title="edit">
                       <i class="fa fa-edit"></i>

                     </a>
                     </td>
                      <td class="text-center">
                     <a href="/admin/detail_jadwal/{{$d->id}}" class="btn btn-info" title="detail">
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
              <a href="{{ url('/admin/laporan/destinasi-print') }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
            </div>
          </div>
          <br>
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
