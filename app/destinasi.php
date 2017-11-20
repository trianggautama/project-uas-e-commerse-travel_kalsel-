<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destinasi extends Model
{
  protected $table ='destinasi';

  public function scopesearch($query,$s){
    return $query->where('nama_destinasi','like','%' .$s.'%');
  }

  public function jadwal(){
    return $this->hasMany('App\jadwal');
  }

}
