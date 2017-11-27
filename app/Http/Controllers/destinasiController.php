<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\destinasi;
use App\jadwal;
class destinasiController extends Controller
{
    public function index(){
      $destinasi=destinasi::all();
    return view('index',compact('destinasi'));
    }

    public function pesan($id){

        $destinasi = destinasi::findOrFail($id);
        $jadwal = $destinasi->jadwal;
        return view('pesan',compact('destinasi','jadwal'));
    }

    public function tesharga($id){

        $jadwal1 = jadwal::findOrFail($id);
        $harga= $jadwal1->harga;
        $totalharga= $harga *4;
        dd($totalharga);
        return view('pesan',compact('destinasi','jadwal'));
    }



}
