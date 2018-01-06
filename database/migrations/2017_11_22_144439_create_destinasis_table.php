<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_destinasi')->length(15);
            $table->string('nama_destinasi')->length(50);
            $table->string('alamat')->length(100);
            $table->text('keterangan');
            $table->text('fasilitas');
            $table->text('gambar_utama');


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
        Schema::dropIfExists('destinasi');
    }
}
