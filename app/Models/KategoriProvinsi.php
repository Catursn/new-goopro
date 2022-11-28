<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProvinsi extends Model
{
    protected $primaryKey = 'id_provinsi';
    protected $table = "kategori_provinsis";
    protected $fillable = ['id_provinsi','provinsi'];
    use HasFactory;
}
