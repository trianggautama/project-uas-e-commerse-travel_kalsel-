<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\destinasi;
use App\jadwal;
use App\pesanan;


class adminController extends Controller
{

  public function index(){

  return view('admin.dashboard');
  }
//destinasi function
  public function destinasi_index(){
    $destinasi=destinasi::all();
  return view('admin.destinasi',compact('destinasi'));
  }

  public function destinasi_store(Request $request)
  {

      $this->validate(request(),[
        'kode_destinasi'=>'required',
        'nama_destinasi'=>'required',
        'alamat'=>'required',
        'fasilitas'=>'required',
        'keterangan'=>'required',
        'gambar_utama'=>'required'
      ]);

    $destinasi=new destinasi;
    $destinasi->kode_destinasi=$request->kode_destinasi;
    $destinasi->nama_destinasi=$request->nama_destinasi;
    $destinasi->alamat=$request->alamat;
    $destinasi->fasilitas=$request->fasilitas;
    $destinasi->keterangan=$request->keterangan;


    $data = $request->input('gambar_utama');
    $photo = $request->file('gambar_utama')->getClientOriginalName();
    $destination = base_path() . '/public/img/destinasi/';
    $request->file('gambar_utama')->move($destination, $photo);

      $destinasi->gambar_utama = $photo;
   $destinasi->save();

return redirect('admin/destinasi');
}


public function destinasi_tambah(){

  return view('admin.destinasi_tambah');

}


public function destinasi_edit($id){

    $destinasi=destinasi::findOrFail($id);
  return view('admin.destinasi_edit',compact('destinasi'));
}

    public function destinasi_update(Request $request, $id)
    {
      $destinasi=destinasi::findOrFail( $id);

      $destinasi->nama_destinasi=$request->nama_destinasi;
      $destinasi->alamat=$request->alamat;
      $destinasi->keterangan=$request->keterangan;
      $destinasi->fasilitas=$request->fasilitas;

   $destinasi->Update();

      return redirect('admin/destinasi');

    }


      function delete_destinasi($id){
        $destinasi = destinasi::find($id);
        $destinasi->delete();
        return redirect('admin/destinasi');
      }

  public function destinasi_print(){
      $destinasi=destinasi::all();
  return view('admin.destinasi-print',compact('destinasi'));
  }

  //jadwal function

  public function jadwal_index(){
      $destinasi=destinasi::all();
    $jadwal=jadwal::all();
  return view('admin.jadwal',compact('jadwal','destinasi'));
  }

  public function jadwal_store(Request $request)
  {

  $this->validate(request(),[
    'harga'=>'required',
    'tanggal_berangkat'=>'required',
    'destinasi_id'=>'required',
    'kuota'=>'required'
  ]);

    jadwal::create($request->all());
    return redirect('/admin/jadwal');
}

public function jadwal_edit($id){

    $destinasi=destinasi::all();
  $jadwal=jadwal::findOrFail($id);
  return view('admin.jadwal_edit',compact('destinasi','jadwal'));
}

public function jadwal_update(Request $request, $id)
{
  $jadwal=jadwal::findOrFail($id);
  $jadwal->Update($request->all());
  return redirect('admin/jadwal');
}


  function delete_jadwal($id){
    $jadwal = jadwal::find($id);
    $jadwal->delete();
    return redirect('admin/jadwal');
  }

//pesanan fungsi

public function pesanan_index(){
    $pesanan=pesanan::all();
  $jadwal=jadwal::all();
return view('admin.pesanan',compact('jadwal','pesanan'));

}

}
