<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id_profile');
            $table->string('namadepan')->nullable();
            $table->string('namabelakang')->nullable();
            $table->string('notelp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();
            $table->string('agensi')->nullable();
            $table->string('kota')->nullable();
            $table->string('instagramagensi')->nullable();
            $table->string('websiteagensi')->nullable();
            $table->string('alamatagensi')->nullable();
            $table->string('foto')->nullable();
            $table->longText('deskripsi')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
