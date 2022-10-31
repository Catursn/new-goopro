<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriHunian extends Model
{
    protected $primaryKey = 'id_hunian';
    protected $table = "kategori_hunians";
    protected $fillable = ['id_hunian','hunian','icon','status'];
    use HasFactory;
}
