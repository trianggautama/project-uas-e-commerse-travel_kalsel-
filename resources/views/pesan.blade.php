@extends('layouts.app2')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12">

    @if(count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li> {{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>

    </div>
<form  method="post"  action="/pesan/{{$jadwal->id}}">
    {{csrf_field() }}

    <div class="form-group">
      <input type="hidden" name="harga"  class="form-control" value="{{$jadwal->harga}}" />
    </div>
    <div class="form-group">
      <label for="kode_destinasi">Email </label>
      <input type="text" name="email"  class="form-control" value="{{old('email')}}" />
    </div>
  <div class="form-group">
    <label for="nama_destinasi">Nama </label>
    <input type="text" name="nama"  class="form-control" value="{{old('nama')}}"/>
  </div>
  <div class="form-group">
    <label for="nama_destinasi">No.hp </label>
    <input type="text" name="no_hp"  class="form-control" value="{{old('no_hp')}}"/>
  </div>
  <div class="form-group">
    <label for="alamat">jumlah pesanan /orang</label>
    <input type="number" name="jumlah_pesanan" class="form-control" >
  </div>
   <div class="text-right">
     <a href="/" class="btn btn-danger"> Batal</a>
     <input class="btn btn-success" type="submit" name="submit" value="Submit"  onclick="return confirm('Pastikan data anda sudah lengkap dan benar ?')">
     {{csrf_field() }}

   </div>
 </div>

</form>
</div>

@endsection
