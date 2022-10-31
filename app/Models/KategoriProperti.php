<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProperti extends Model
{
    protected $primaryKey = 'id_kategori';
    protected $table = "kategori_propertis";
    protected $fillable = ['id_kategori','properti','status'];
    use HasFactory;
}
