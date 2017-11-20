@extends('layouts.app')

@section('content')
<div class="container">
  <br>
<div class="jumbotron">
  <h1 class="brand">Selamat Datang</h1>
  <p class="p_jumbo"> di situs travel kami</p>
<a href="#item" class="btn btn-info" > Go...!!</a>
</div>

<div class="row" id="item">
          <div class="col-lg-12 ">
            <div class="col-lg-8 ">


              <h2 class="page-header">Destinastion List</h2>
              </div>
              <div class="col-lg-4 page-header pull-right">






             </div>
          </div>
      <div class="clearfix">

      </div>
          @foreach( $destinasi as $d)
          <div class="col-md-4 col-sm-6 text-center">
              <div class="card">
                <img src="/img/1.jpg" alt="#"  class="poster">
                  <div class="caption">
                    <h4>{{$d->nama_destinasi}}</h4>
                    <p class="title">{{$d->alamat}}</p>
                    @guest
                        <a  class="btn buutton_c" href="#">login</a>
                    @else
                          <a  class="btn button_c"   href="pesan/{{$d->id}}">pesan</a>
                    @endguest

                  </div>
              </div>
          </div>
@endforeach
<br>
<br>
<hr>
<div class="clearfix">

</div>
</div>
@endsection
