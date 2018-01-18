
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">

<div class="container">
  <table id="example1" class="table table-bordered table-striped">

    <br>
    <div class="text-center">
      <h2>Laporan Data Pesanan (LUNAS)</h2>

    </div>
    <br>
    <thead>
    <tr>
      <th>Kode Pesanan</th>
      <th>Nama </th>
      <th>No.hp </th>
      <th>Tanggal berangkat</th>
      <th>Tujuan</th>
      <th>Jumlah Orang</th>
      <th>Total bayar</th>
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
    </tr>
    @endforeach
    </tbody>

  </table>

</div>
</body>
</html>
