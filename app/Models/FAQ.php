<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $primaryKey = 'id_faq';
    protected $table = "f_a_q_s";
    protected $fillable = ['id_faq','faq'];
    use HasFactory;
}
