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
            $table->string('judul');
            $table->string('slug');
            $table->string('kategori');
            $table->string('hunian');
            $table->string('kota');
            $table->string('tempat');
            $table->string('harga');
            $table->string('tidur');
            $table->string('mandi');
            $table->string('informasi');
            $table->string('pengembang');
            $table->string('perm');
            $table->string('bangunan');
            $table->string('tanah');
            $table->string('interior');
            $table->string('eksterior');
            $table->string('lantai');
            $table->string('sertifikat');
            $table->string('dibuat');
            $table->string('listing');
            $table->string('listrik');
            $table->string('parkir');
            $table->longText('sarpras');
            $table->longText('video');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->string('foto4');
            $table->string('foto5');
            $table->string('agen');
            $table->enum('status', ['aktif', 'nonaktif']);
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
