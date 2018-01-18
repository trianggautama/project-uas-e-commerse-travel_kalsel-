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
        <div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/admin/inbox"><i class="fa fa-inbox"></i> Inbox
                </a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>

              </ul>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>


              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- /.pull-right -->
              </div>
              <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>{{$pesan->nama}}</h3>
                <h5>From: {{$pesan->email}}
                  <span class="mailbox-read-time pull-right">{{$pesan->created_at}}</span></h5>
              </div>
              <div class="mailbox-read-message">







                <p>{{$pesan->pesan}}</p>

                <p>{{$pesan->nama}}  email:({{$pesan->email}})</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <div class="pull-right">
                <a   href="##tambahjadwal" data-toggle="modal"
                                data-target="#tambahjadwal"><i class="btn btn-default"><i class="fa fa-reply"></i> Balas</i></a>
              </div>
              <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 </div>
 <!-- /.content-wrapper -->
 <div id="tambahjadwal" class="modal fade" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
     <div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Quick Email</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                          title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body">
                <form action="/read/{{$pesan->id}}/balas" method="post">
                  Email to :
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email to:" value="{{$pesan->email}}">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                  </div>
                  <div>
                    <textarea class="textarea" placeholder="Message" name="content"
                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>

              </div>
              <div class="box-footer clearfix">
                <input class="pull-right btn btn-default" type="submit" name="submit" value="Send">
                {{csrf_field() }}

              </div>
              </form>
            </div>
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->

@endsection
