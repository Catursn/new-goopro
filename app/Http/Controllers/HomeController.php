<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Properti;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\KategoriHunian;
use App\Models\Terms;
use App\Models\Privacy;
use App\Models\Syarat;
use App\Models\Keuntungan;
use App\Models\HakCipta;
use App\Models\CaraKerja;
use App\Models\Kontak;
use App\Models\User;

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
    
    public function dijual($hunian){
        if($hunian == "all"){
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                    ->select('users.*', 'propertis.*')
                                    ->where('kategori','Dijual')->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                ->select('users.*', 'propertis.*')
                                ->where('hunian',$hunian)->where('kategori','Dijual')
                                ->orderBy('id_properti','DESC')->paginate(10);
        }
        $count = $properti->count();
        return view('front.dijual',compact('properti','hunian','count'));
    }

    public function disewakan($hunian){
        if($hunian == "all"){
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                ->select('users.*', 'propertis.*')
                                ->where('kategori','Disewakan')->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                ->select('users.*', 'propertis.*')
                                ->where('hunian',$hunian)->where('kategori','Disewakan')->orderBy('id_properti','DESC')->paginate(10);
        }
        $count = $properti->count();
        return view('front.disewakan',compact('properti','hunian','count'));
    }

    public function properti($hunian){
        if($hunian == "all"){
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                ->select('users.*', 'propertis.*')
                                ->where('kategori','Properti Baru')->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                ->select('users.*', 'propertis.*')
                                ->where('hunian',$hunian)->where('kategori','Properti Baru')->orderBy('id_properti','DESC')->paginate(10);
        }
        $count = $properti->count();
        return view('front.propertibaru',compact('properti','hunian','count'));
    }

    public function list($hunian){
        if($hunian == "all"){
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                ->select('users.*', 'propertis.*')
                                ->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                                ->select('users.*', 'propertis.*')
                                ->where('hunian',$hunian)->orderBy('id_properti','DESC')->paginate(10);
        }
        $count = $properti->count();
        return view('front.properti',compact('properti','hunian','count'));
    }
    public function cari(Request $request){
        $data = $request->all();
        $properti = Properti::leftJoin('users', 'users.id', '=', 'propertis.agen')
                            ->select('users.*', 'propertis.*')
                            ->where('kategori',$data['prop'])->where('hunian',$data['hunian'])->where('judul','LIKE',"%".$data['cari']."%")->paginate(10);
        $hunian = $data['hunian'];
        return view('front.cari',compact('properti','hunian'));
    }

    public function detail($slug){
        $properti = Properti::where('slug',$slug)->first();
        $user = User::where('id',$properti->agen)->first();
        return view('front.detail',compact('properti','user'));
    }

    public function terms(){
        $terms = Terms::findorFail('1');
        return view('front.terms',compact('terms'));
    }

    public function privacy(){
        $privacy = Privacy::findorFail('1');
        return view('front.privacy',compact('privacy'));
    }

    public function syarat(){
        $syarat = Syarat::findorFail('1');
        return view('front.syarat',compact('syarat'));
    }

    public function keuntungan(){
        $keuntungan = Keuntungan::findorFail('1');
        return view('front.keuntunganagen',compact('keuntungan'));
    }

    public function hakcipta(){
        $hakcipta = HakCipta::findorFail('1');
        return view('front.hakcipta',compact('hakcipta'));
    }

    public function carakerja(){
        $carakerja = CaraKerja::findorFail('1');
        return view('front.carakerja',compact('carakerja'));
    }
    public function postkontak(Request $request){
        $this->validate($request,[
            // 'nama'=>'required|string|min:5',
            // 'email' => 'required',
            // 'notelp' => 'required',
            // 'topik' => 'required',
            // 'saran' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        $kontak = new Kontak;
        $data = $request->all();
        $status=$kontak->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kontak successfully sended');
        }
        else{
            request()->session()->flash('error','Eror while send kontak');
        }
        return redirect()->route('kontak');
    }
}
