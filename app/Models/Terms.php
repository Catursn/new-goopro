<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    protected $primaryKey = 'id_terms';
    protected $table = "terms";
    protected $fillable = ['id_terms','terms'];
    use HasFactory;
}
