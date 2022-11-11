<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $primaryKey = 'id_iklan';
    protected $table = "iklans";
    protected $fillable = ['id_iklan','jenis','tipe','sitaan','judul','deskripsi','pilihharga','harga','sejak','objek','foto','media','youtube','virtual','provinsi','kota','area','alamatproperti','latitude','longitude','nama','email','alamat','handphone','kantor'];
    use HasFactory;
}
