<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3> Hai </h3>
    <h4>pesanan dengan detail sebagai berikut:<br>
      Kode Jadwal:{{$request->jadwal_id}}
      nama:{{$request->nama}}<br>
      total bayar:{{$totalharga}}
      <br>
       telah diproses, silahkan lakukan pemabayaran ke no rekening berikut: <br>
        No rek: 9879284642376736 (BRI)<br>
        nama :kalseltrip
        atau <br>
        No rek: 987862482376736 (BNI)<br>

    </h4>
<br>
<br>
<p>Pembayaran dilakukan paling lambat 48 jam dari sekarang .</p>
<br><br>
<p>by:Kalseltrip</p>
  </body>
</html>
