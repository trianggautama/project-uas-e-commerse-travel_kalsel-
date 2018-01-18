<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\destinasi;
use App\jadwal;
use App\pesanan;
use App\pesan;


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

return redirect('admin/destinasi')->with('msg','Data destinasi berhasil disimpan');
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
        return redirect('admin/destinasi')->with('msg','Data destinasi berhasil dihapus');
      }

  public function destinasi_print(){
      $destinasi=destinasi::all();
  return view('admin.laporan.destinasi-print',compact('destinasi'));
  }


    public function jadwal_detail($id){
        $destinasi=destinasi::all();
      $jadwal=jadwal::where('destinasi_id',$id)->get();

    return view('admin.jadwal',compact('jadwal','destinasi'));
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
    return redirect('/admin/jadwal')->with('msg','Data Jadwal berhasil ditambah');
}

public function jadwal_edit($id){

    $destinasi=destinasi::all();
  $jadwal=jadwal::findOrFail($id);
  return view('admin.jadwal_edit',compact('destinasi','jadwal'));
}

public function jadwal_update(Request $request, $id)
{
  $jadwal=jadwal::findOrFail($id);

  $this->validate(request(),[
    'destinasi_id'=>'required',
  ]);

  $jadwal->Update($request->all());
  return redirect('admin/jadwal')->with('msg','Data Jadwal berhasil diubah');
}


  function delete_jadwal($id){
    $jadwal = jadwal::find($id);
    $jadwal->delete();
    return redirect('admin/jadwal')->with('msg','Data Jadwal berhasil dihapus');
  }

  public function jadwal_print(){
      $jadwal=jadwal::all();
  return view('admin.laporan.jadwal-print',compact('jadwal'));
  }

//pesanan fungsi

public function pesanan_index(){
    $pesanan=pesanan::where('status_bayar','0')->get();
  $jadwal=jadwal::all();
return view('admin.pesanan',compact('jadwal','pesanan'));

}

function delete_pesanan($id){
  $pesanan = pesanan::find($id);
  $pesanan->delete();
  return redirect('admin/pesanan');
}

public function konfirmasi($id){

    $pesanan=pesanan::findOrFail( $id);
    $jadwal_id = $pesanan->jadwal->id;
    $jumlahorang=$pesanan->jumlah_orang;
    $jadwal=jadwal::findOrFail( $jadwal_id);
    $kuota=$jadwal->kuota;

    $pesanan->status_bayar = 1;
    $jadwal->kuota = $kuota-$jumlahorang;

    $pesanan->save();
    $jadwal->save();

      Mail::send('emails.konfirmasi_pembayaran', ['pesanan'=>$pesanan], function($mail) use($pesanan){
          $mail->from('kalseltrip@gmail.com','Konfirmasi pembayaran');
          $mail->to($pesanan->email,$pesanan->nama);
          $mail->subject('Konfirmasi pembayaran');
        });



    return redirect('admin/pesanan')->with('msg','Pembayaran Telah Di Konfirmasi');

}

public function pesanan_print(){
    $pesanan=pesanan::where('status_bayar','1')->get();
return view('admin.laporan.pesanan-print',compact('pesanan'));
}


//transaksi
public function transaksi_index(){
    $pesanan=pesanan::where('status_bayar','1')->get();
  $jadwal=jadwal::all();
return view('admin.transaksi',compact('jadwal','pesanan'));

}

public function pesanan_detail($id){
    $pesanan=pesanan::findOrFail( $id);
    return view('admin/pesanan_detail',compact('pesanan'));

}


//messege function

public function inbox_index(){

  $pesan=pesan::all();
return view('admin.inbox',compact('pesan'));

}

public function read_index($id){

  $pesan=pesan::findOrFail( $id);
return view('admin.read',compact('pesan'));

}
public function balas_pesan(Request $request){
  Mail::send('emails.balasan', ['request'=>$request], function($mail) use($request){
      $mail->from('kalseltrip@gmail.com','Pesan Balasan');
      $mail->to($request->email);
      $mail->subject(' Pesan Balasan');
    });

}

}
