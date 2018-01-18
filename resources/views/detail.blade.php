@extends('layouts.app2')

@section('content')


<header class="masthead" id="header">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in" style="font-family: 'Yellowtail', cursive; text-shadow: 2px 2px rgba(0, 0, 0, 0.61)">{{$destinasi->nama_destinasi}}</div>
      <div class="intro-heading text-uppercase" style="font-family: 'Handlee', cursive; text-shadow: 2px 2px rgba(0, 0, 0, 0.61);
">{{$destinasi->alamat}}</div>
<ul class="list-inline social-buttons">

  <li class="list-inline-item">
    <a href="#destinasi" class=" js-scroll-trigger">
      <i class="fa  fa-play-circle"></i>
    </a>
  </li>
</ul>
    </div>
  </div>
</header>

<div class="container">
<div class="row">
 <div class="col-md-8 col-xs-12" style="margin-bottom:0px;">
   <hr>
   <br>
   <p style="text-align:justify; font-family:'Lora', serif;">{{$destinasi->keterangan}}</p>
   <br>
   <h5>Fasilitas:</h5><br>
   <p>{{$destinasi->fasilitas}}</p>
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
<section  id="destinasi">
      <div class="container">
        <div class="row">
          @foreach( $jadwal as $j)
          <div class="col-md-5 col-sm-5 destinasi-item text-center"style="margin-bottom:10px; margin-right:10px;border:1px solid grey;">
            <div class="destinasi-caption">
              <h4>{{$j->tanggal_berangkat}}</h4>
              <h4>kuota:{{$j->kuota}} Orang</h4>

              <p class="text-muted">Rp.{{$j->harga}}/orang</p>
              <?php
              $cek=$j->kuota;
               ?>
              @if($cek>0)
              <a class="btn btn-jadwal" href="pesan/{{$j->id}}" style="background-color:black;color:#fec503;">
                pesan sekarang
              </a>
              @else
              <a class="btn btn-jadwal" href="#" style="background-color:black;color:#fec503;">
                Jadwal Penuh
              </a>
                 @endif
            </div>
          </div>
           @endforeach
           <br>
        </div>
      </div>
    </section>
 </div>
 <div class="col-md-4 col-xs-12 text-center">
   <br>
   <br>
   <div class="caption">
     <h3>Bingung Bagaimana Memesan?</h4>
       <a href="/langkah_pemesanan">Langkah Pemesanan</a>
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
