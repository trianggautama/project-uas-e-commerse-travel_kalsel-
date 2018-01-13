@extends('layouts.app2')

@section('content')
<header class="masthead" id="header">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">{{$destinasi->nama_destinasi}}</div>
      <div class="intro-heading text-uppercase">{{$destinasi->alamat}}</div>
    </div>
  </div>
</header>

<div class="container">
<div class="row">
 <div class="col-md-8 col-xs-12">
   <hr>
   <br>
   <p style="text-align:justify; font-family:'Lora', serif;">{{$destinasi->keterangan}}</p>
   <br>
   <h5>Fasilitas:</h5><br>
   <p>{{$destinasi->fasilitas}}</p>
   <br>
   <br>
   <br>
      <h3>Jadwal Travel {{$destinasi->nama_destinasi}}</h3>
      <hr>

  <!-- @foreach( $jadwal as $j)
   <div class="row">

   <div class="col-lg-4 col-sm-6 text-center tumbnail">
       <div class="card_jadwal">
           <div class="caption">
             <h3>{{$j->tanggal_berangkat}}</h4>
               <hr>
             <h4>Rp.{{$j->harga}}</h3>
             <h4>kuota:{{$j->kuota}} Orang</h4>


               <a  class=" btn button_c " href="/harga/{{$j->id}}">pesan</a>





           </div>
       </div>
   </div>
 </div>

 @endforeach
-->
<section  id="portfolio">
      <div class="container">
        <div class="row">
          @foreach( $jadwal as $j)
          <div class="col-md-6 col-sm-6 portfolio-item">
            <div class="portfolio-caption">
              <h4>{{$j->tanggal_berangkat}}</h4>
              <h4>kuota:{{$j->kuota}} Orang</h4>

              <p class="text-muted">Rp.{{$j->harga}}/orang</p>

              <a class="btn btn-warning" href="pesan/{{$j->id}}">
                pesan sekarang
              </a>
            </div>
          </div>
           @endforeach
        </div>
      </div>
    </section>
 </div>
 <div class="col-md-4 col-xs-12 text-center">
   <br>
   <br>
   <div class="caption">
     <h3>Bingung Bagaimana Memesan?</h4>
       <a href="#">Langkah Pemesanan</a>
   </div>
   <br>
   <hr>
   <br>
       <div class="caption">
         <h3>blog List</h4>

        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a>
       </div>
<br>
<br>
<br>
</div>
 </div>
</div>
</div>


@endsection
