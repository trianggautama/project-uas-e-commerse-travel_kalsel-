<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama')->length(75);
          $table->string('email')->length(75);
          $table->string('no_hp')->length(15);
          $table->integer('jadwal_id')->length(10);
          $table->integer('jumlah_orang');
          $table->integer('total_bayar');
          $table->tinyInteger('status_bayar')->default('0');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
