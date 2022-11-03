<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuntungan extends Model
{
    protected $primaryKey = 'id_keuntungan';
    protected $table = "keuntungans";
    protected $fillable = ['id_keuntungan','keuntungan'];
    use HasFactory;
}
