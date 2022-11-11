<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIklansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iklans', function (Blueprint $table) {
            $table->increments('id_iklan');
            $table->string('jenis')->nullable();
            $table->string('tipe')->nullable();
            $table->string('sitaan')->nullable();
            $table->string('judul')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->string('pilihharga')->nullable();
            $table->string('harga')->nullable();
            $table->string('sejak')->nullable();
            $table->string('objek')->nullable();
            $table->string('foto')->nullable();
            $table->string('media')->nullable();
            $table->string('youtube')->nullable();
            $table->string('virtual')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('area')->nullable();
            $table->string('alamatproperti')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('handphone')->nullable();
            $table->string('kantor')->nullable();
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
        Schema::dropIfExists('iklans');
    }
}
