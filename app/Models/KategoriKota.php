<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKota extends Model
{
    protected $primaryKey = 'id_kota';
    protected $table = "kategori_kotas";
    protected $fillable = ['id_kota','kota','status'];
    use HasFactory;
}
