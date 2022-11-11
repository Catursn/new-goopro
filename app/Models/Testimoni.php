<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $primaryKey = 'id_testimoni';
    protected $table = "testimonis";
    protected $fillable = ['id_testimoni','foto','nama','umur','kota','testimoni','status'];
    use HasFactory;
}
