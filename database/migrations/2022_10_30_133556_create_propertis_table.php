<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertis', function (Blueprint $table) {
            $table->increments('id_properti');
            $table->string('judul')->nullable();
            $table->string('slug')->nullable();
            $table->string('kategori')->nullable();
            $table->string('hunian')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('tempat')->nullable();
            $table->string('harga')->nullable();
            $table->string('tidur')->nullable();
            $table->string('mandi')->nullable();
            $table->string('informasi')->nullable();
            $table->string('pengembang')->nullable();
            $table->string('perm')->nullable();
            $table->string('bangunan')->nullable();
            $table->string('tanah')->nullable();
            $table->string('interior')->nullable();
            $table->string('eksterior')->nullable();
            $table->string('lantai')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('dibuat')->nullable();
            $table->string('listing')->nullable();
            $table->string('listrik')->nullable();
            $table->string('parkir')->nullable();
            $table->longText('sarpras')->nullable();
            $table->longText('video')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();
            $table->string('foto4')->nullable();
            $table->string('foto5')->nullable();
            $table->string('agen')->nullable();
            $table->enum('status', ['aktif', 'nonaktif','terjual'])->nullable();
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
        Schema::dropIfExists('propertis');
    }
}
