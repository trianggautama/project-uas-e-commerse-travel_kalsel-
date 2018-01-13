<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\destinasi;
use App\jadwal;
use App\pesanan;
use App\pesan;
use App\Mail\pesanproses;

class destinasiController extends Controller
{
    public function index(){
      $destinasi=destinasi::all();
    return view('index',compact('destinasi'));
    }
    public function konfirmasi_index(){

    return view('/konfirmasi');
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

      //kirim email
    Mail::send('emails.pesanan', ['request'=>$request], function($mail) use($request){
      $mail->from('kalseltrip@gmail.com','Ada pesanan');
      $mail->to('admin@gmail.com','Admin');
      $mail->subject('Ada Pesanan baru');
    });

    Mail::send('emails.pesanan_konsumen', ['request'=>$request,'totalharga'=>$totalharga], function($mail) use($request,$totalharga){
      $mail->from('kalseltrip@gmail.com','pesanan di proses');
      $mail->to($request->email,$request->nama);
      $mail->subject('pesanan di proses');
    });

      return redirect('/konfirmasi');
    }

public function about(){
  return view('/about');
}

public function kirimpesan(Request $request){

  $this->validate(request(),[
    'email'=>'required',
    'nama'=>'required',
    'pesan'=>'required|min:5'
  ]);

    pesan::create($request->all());
    return redirect('/');
}

}
