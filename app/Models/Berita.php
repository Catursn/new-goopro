<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $primaryKey = 'id_berita';
    protected $table = "beritas";
    protected $fillable = ['id_berita','judul','foto','tanggal','deskripsi','author','kategori','views','status','slug'];
    use HasFactory;
}
