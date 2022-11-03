<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    protected $primaryKey = 'id_syarat';
    protected $table = "syarats";
    protected $fillable = ['id_syarat','syarat'];
    use HasFactory;
}
