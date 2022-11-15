<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $primaryKey = 'id_kontak';
    protected $table = "kontaks";
    protected $fillable = ['id_kontak','nama', 'email','notelp','topik','saran'];
    use HasFactory;
}
