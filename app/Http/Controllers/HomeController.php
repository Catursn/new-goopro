<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Properti;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\KategoriHunian;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::where('status','aktif')->orderBy('id_slider','DESC')->get();
        $berita = Berita::where('status','aktif')->orderBy('id_berita','DESC')->limit('3')->get();
        $properti = Properti::orderBy('id_properti','DESC')->limit('3')->get();
        $hunian = KategoriHunian::where('status','aktif')->orderBy('id_hunian','DESC')->get();
        return view('front.home',compact('slider','hunian','properti','berita'));
    }

    public function berita($judul){
        $berita = Berita::where('slug','/berita/'.$judul)->first();
        $terkait = Berita::where('kategori',$berita->kategori)->limit('4')->get();
        $terkini = Berita::orderBy('id_berita','DESC')->limit('6')->get();
        $populer = Berita::orderBy('id_berita','ASC')->limit('10')->get();
        $kategori = KategoriBerita::orderBy('id_kategori','DESC')->get();
        return view('front.berita',compact('berita','terkait','terkini','populer','kategori'));
    }
    
    public function dijual(){
        $properti = Properti::where('kategori','Dijual')->orderBy('id_properti','DESC')->get();
        return view('front.dijual',compact('properti'));
    }

    public function disewakan(){
        $properti = Properti::where('kategori','Disewakan')->orderBy('id_properti','DESC')->get();
        return view('front.disewakan',compact('properti'));
    }

    public function properti(){
        $properti = Properti::where('kategori','Properti Baru')->orderBy('id_properti','DESC')->get();
        return view('front.propertibaru',compact('properti'));
    }

    public function detail($slug){
        $properti = Properti::where('slug',$slug)->first();
        return view('front.detail',compact('properti'));
    }
}
