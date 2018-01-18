@extends('layouts.app2')

@section('content')

<div class="container">
  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Langkah Pemesanan</h2>
          <h3 class="section-subheading text-muted">pesan paket langsung dari website</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/click.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>langkah 1</h4>
                  <h4 class="subheading">Pilih destinasi & jadwal</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">pilih destinasi dan  jadwal yang diinginkan ,</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/form.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Langkah 2</h4>
                  <h4 class="subheading">Isi Biodata Pesanan</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Isi Biodata pesanan sesuai dengan data yang benar , setelah melakukan input maka aka anda akan mendapatkan E-mail dari Kalseltrip mengenai detail pemesanan dan langkah pembayaran.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/payment.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Langkah 3</h4>
                  <h4 class="subheading">Proses pembayaran</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lakukan Pembayaran Sesuai dengan ketentuan yang tertera di E-mail.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/mail.png" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Langkah 4</h4>
                  <h4 class="subheading">Konfirmasi Pembayaran</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Setelah Melakukan Pembayaran ,anda akan mendapatkan email konfirmasi pembayaran dari admin,cetak email tersebut sebagai tanda bukti pemesanan. anda akan di beri info lebih lanjut palig lambat 2 hari sebelum hari H mengenai detail pertemuan dan pemberangkatan.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Selamat
                  <br>menikmati
                  <br>Liburan Anda!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
