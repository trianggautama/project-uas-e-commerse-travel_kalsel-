@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
 <div class="col-md-8">
<h2>{{$destinasi->nama_destinasi}}</h2>
   <hr>
   <p>{{$destinasi->keterangan}}</p>
   <br>
   <br>
   <br>
      <h3>Jadwal Travel {{$destinasi->nama_destinasi}}</h3>
      <hr>
   @foreach( $jadwal as $j)
   <div class="col-md-4 col-sm-6 text-center tumbnail">
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
 @endforeach
 </div>
 <div class="col-md-4">
   <br>
   <br>
   <br>
   <div class="card_jadwal pull-right">
       <div class="caption">
         <h3>blog List</h4>

        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a><br>
        <a href="#">pesona indah bukit bukit</a>
<hr>



       </div>
   </div>
</div>
 </div>
</div>
</div>
@endsection
