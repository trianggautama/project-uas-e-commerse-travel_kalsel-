<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3> Hai </h3>
    <h4>pesanan dengan detail sebagai berikut:<br>
      nama:{{$request->nama}}<br>
      tanggal pemesanan:{{$request->created_at}}
      total bayar:{{$totalharga}}
      <br>
       telah diproses, silahkan lakukan pemabayaran ke no rekening berikut: <br>
        No rek: 9879284642376736 <br>
        nama :kalseltrip
    </h4>
<br>
<br>
<p>Pembayaran dilakukan paling lambat 48 jam dari sekarang .</p>
<br><br>
<p>by:Kalseltrip</p>
  </body>
</html>
