<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakCipta extends Model
{
    protected $primaryKey = 'id_hakcipta';
    protected $table = "hak_ciptas";
    protected $fillable = ['id_hakcipta','hakcipta'];
    use HasFactory;
}
