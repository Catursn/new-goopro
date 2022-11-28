<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properti extends Model
{
    protected $primaryKey = 'id_properti';
    protected $table = "propertis";
    protected $fillable = ['id_properti','judul','kategori','hunian','tempat','harga','tidur','mandi','informasi','pengembang','perm','bangunan','tanah','interior','eksterior','lantai','provinsi','kota','kecamatan','sertifikat','dibuat','listing','listrik','parkir','sarpras','video','latitude','longitude','foto1','status','foto2','foto3','foto4','foto5','agen','slug'];
    use HasFactory;
}
