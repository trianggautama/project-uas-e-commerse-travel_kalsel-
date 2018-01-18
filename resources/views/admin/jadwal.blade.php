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
                       @if(session('msg'))
                       <div class="alert alert-success">

                         <p>{{session('msg')}}</p>

                       </div>
                       @endif
                       @if(count($errors)>0)
                          <div class="alert alert-danger">
                            <ul>
                              @foreach($errors->all() as $error)
                              <li> {{ $error }}</li>
                              @endforeach
                            </ul>
                          </div>
                          @endif
                        <a   href="##tambahjadwal" data-toggle="modal"
                                        data-target="#tambahjadwal"><i class="fa fa-plus pull-right"> Tambah semester</i></a>
                          <br>
                          <br>
                       <table id="example1" class="table table-bordered table-striped">
                         <thead>
                         <tr>
                           <th>kode jadwal</th>
                           <th>tanggal berangkat</th>
                           <th>kuota</th>
                           <th>harga</th>
                           <th>tujuan</th>
                           <th>edit</th>
                           <th>hapus</th>
                         </tr>
                         </thead>
                         <tbody>
                           @foreach($jadwal as $j)
                         <tr>
                           <td>{{$j->id}}</td>
                           <td>{{$j->tanggal_berangkat}}
                           </td>
                           <td>{{$j->kuota}}</td>
                           <td> Rp.{{$j->harga}}</td>
                           <td>{{$j->destinasi->nama_destinasi}}</td>
                           <td class="text-center">

                             <a href="/admin/{{$j->id}}/jadwal_edit" class="btn btn-primary" title="edit">
                               <i class="fa fa-edit"></i>

                             </a>
                           </td>
                           <td class="text-center">
                             <form method="POST" action="/admin/jadwal/{{$j-> id}}/delete">
                           {{csrf_field()}}
                           <button type="submit" class="btn btn-danger"  onclick="return confirm('Anda yakin akan menghapus jadwal <?php echo $j-> tanggal_berangkat; ?>?')">
                             <span class="fa fa-trash" aria-hidden="true"></span>
                           </button>
                           <input type="hidden"  name="_method" value="delete"></input>
                           </form></td>
                         </tr>
                         @endforeach
                         </tfoot>
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
              <a href="{{ url('/admin/laporan/jadwal-print') }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
            </div>
          </div>
          <br>

           <div id="tambahjadwal" class="modal fade" tabindex="-1" role="dialog">
             <div class="modal-dialog" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                   <h4 class="modal-title">Tambah Jadwal</h4>
                 </div>
                 <div class="modal-body">
                   <!-- form login -->
                   <form  method="post" action="">

                     <div class="form-group">
                       <label for="password">Tanggal Berangkat</label>
                       <input type="date" name="tanggal_berangkat"  class="form-control" />
                     </div>

                     <div class="form-group">
                       <label for="password">Durasi Trip</label>
                       <input type="text" name="durasi"  class="form-control" />
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

   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
