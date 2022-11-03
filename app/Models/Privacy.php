<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    protected $primaryKey = 'id_privacy';
    protected $table = "privacies";
    protected $fillable = ['id_privacy','privacy'];
    use HasFactory;
}
