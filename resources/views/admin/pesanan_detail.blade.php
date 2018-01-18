@extends('layouts.adminlayout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">Detail Pesanan</h1>
            </div>

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

            <form method="POST" action="/admin/pesanan/{{$pesanan-> id}}/delete">
          {{csrf_field()}}
          <button type="submit" class="btn btn-danger"  onclick="return confirm('Anda yakin akan menghapus destinasi <?php echo $pesanan-> nama; ?>?')" style="margin-left:13px;">
          Hapus data
          </button>
          <input type="hidden"  name="_method" value="delete"></input>
          </form>

        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
