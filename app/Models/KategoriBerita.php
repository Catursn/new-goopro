<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $primaryKey = 'id_kategori';
    protected $table = "kategori_beritas";
    protected $fillable = ['id_kategori','kategori','status'];
    use HasFactory;
}
