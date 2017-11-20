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




}
