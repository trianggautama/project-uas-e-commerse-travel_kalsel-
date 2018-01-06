<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
  protected $table ='pesanan';
  protected $fillable = [
      'nama', 'email', 'no_hp','jadwal_id','jumlah_orang','total_bayar','status_bayar',
  ];

  public function jadwal(){
      return $this->belongsTo('App\jadwal');
    }

}
