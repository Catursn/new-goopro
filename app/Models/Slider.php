<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'id_slider';
    protected $table = "sliders";
    protected $fillable = ['id_slider','slider','status'];
    use HasFactory;
}
