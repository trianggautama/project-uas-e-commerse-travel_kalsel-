<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\destinasi;
use App\jadwal;
use App\pesanan;

class destinasiController extends Controller
{
    public function index(){
      $destinasi=destinasi::all();
    return view('index',compact('destinasi'));
    }

    public function detail_index($id){

        $destinasi = destinasi::findOrFail($id);
        $jadwal = $destinasi->jadwal;
        return view('detail',compact('destinasi','jadwal'));


    }

    public function pesan_index($id){


      $jadwal = jadwal::findOrFail($id);
      return view('pesan',compact('jadwal'));
    }


    public function pesan_store( Request $request,$id){

      $this->validate(request(),[
        'nama'=>'required',
        'email'=>'required',
        'no_hp'=>'required',
      ]);

      $pesanan=new pesanan;

      $pesanan->jadwal_id=$id;
      $pesanan->nama=$request->nama;
      $pesanan->email=$request->email;
      $pesanan->no_hp=$request->no_hp;
      $pesanan->jumlah_orang=$request->jumlah_pesanan;

      $jumlah=$request->jumlah_pesanan;
      $harga=$request->harga;
      $totalharga= $harga *$jumlah;
      $pesanan->total_bayar=$totalharga;
      $pesanan->save();
      $destinasi=destinasi::all();
      $jadwal=jadwal::all();


      return redirect('/');
    }

public function about(){
  return view('/about');
}


}
