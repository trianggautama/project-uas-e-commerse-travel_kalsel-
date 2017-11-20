<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
  protected $table ='jadwal';
  protected $fillable = [
      'harga', 'tanggal_berangkat', 'destinasi_id',
  ];

  public function destinasi(){
      return $this->belongsTo('App\destinasi');
    }

}
