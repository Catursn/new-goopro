<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaraKerja extends Model
{
    protected $primaryKey = 'id_carakerja';
    protected $table = "cara_kerjas";
    protected $fillable = ['id_carakerja','carakerja'];
    use HasFactory;
}
