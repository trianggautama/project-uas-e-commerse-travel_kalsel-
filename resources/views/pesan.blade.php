@extends('layouts.app')

@section('content')
<div class="container">
     <div class="container">

     <h3> jadwal keberangkatan {{$destinasi->nama_destinasi}}</h3>
    <div class="col-md text-right">
      <form  action="/barang" method="get" class="form-inline">
      <div class="form-group">
        <input type="text" name="s" class="form-control" value="{{ isset ($s) ? $s :'' }}">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-sm btn-primary">Search</button>
      </div>
      </form>
    </div>
    <br>
<div class="table-responsive">
			<table class="table table-striped table-bordered">
	<tr>
    <th>No</th>
		<th>kode jadwal</th>
		<th>harga</th>
		<th>tanggal berankat</th>
    <th>Action</th>

	</tr>
  <?php $no=1  ?>
@foreach( $jadwal as $j)

	<tr>
		<td>{{$no++}}</td>
		<td>{{$j-> id}}</td>
		<td>{{$j-> harga}}</td>
		<td>{{$j-> tanggal_berangkat}}</td>
		<td>

     <a href="#" class="btn btn-success btn-sm">ambil </a>

		</td>
	</tr>
  @endforeach
</table>
</div>
</div>
</div>
@endsection
