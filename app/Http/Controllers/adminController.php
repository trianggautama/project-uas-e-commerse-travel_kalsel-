<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\destinasi;
use App\jadwal;


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

}
