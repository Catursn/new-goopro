<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKecamatan extends Model
{
    protected $primaryKey = 'id_kecamatan';
    protected $table = "kategori_kecamatans";
    protected $fillable = ['id_kecamatan','kecamatan','kota_id'];
    use HasFactory;
}
