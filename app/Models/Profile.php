<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'id_profile';
    protected $table = "profiles";
    protected $fillable = ['id_profile','namadepan','namabelakang','notelp','instagram','email','agensi','kota','instagramagensi','websiteagensi','alamatagensi','foto','deskripsi'];
    use HasFactory;
}
