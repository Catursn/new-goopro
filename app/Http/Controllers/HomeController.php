<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Properti;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\KategoriHunian;
use App\Models\KategoriKota;
use App\Models\KategoriKecamatan;
use App\Models\Terms;
use App\Models\Privacy;
use App\Models\Syarat;
use App\Models\Keuntungan;
use App\Models\HakCipta;
use App\Models\CaraKerja;
use App\Models\Kontak;
use App\Models\User;
use App\Models\Profile;

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
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                    ->select('profiles.*', 'propertis.*')
                                    ->where('kategori','Dijual')->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                ->select('profiles.*', 'propertis.*')
                                ->where('hunian',$hunian)->where('kategori','Dijual')
                                ->orderBy('id_properti','DESC')->paginate(10);
        }
        $kategori = "Dijual";
        $url = "/dijual";
        $count = $properti->count();
        $harga = " ";
        $daerah = " ";
        $tidur = " ";
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }

    public function disewakan($hunian){
        if($hunian == "all"){
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                ->select('profiles.*', 'propertis.*')
                                ->where('kategori','Disewakan')->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                ->select('profiles.*', 'propertis.*')
                                ->where('hunian',$hunian)->where('kategori','Disewakan')->orderBy('id_properti','DESC')->paginate(10);
        }
        $kategori = "Disewakan";
        $url = "/disewakan";
        $count = $properti->count();
        $harga = " ";
        $daerah = " ";
        $tidur = " ";
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }

    public function properti($hunian){
        if($hunian == "all"){
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                ->select('profiles.*', 'propertis.*')
                                ->where('kategori','Properti Baru')->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                ->select('profiles.*', 'propertis.*')
                                ->where('hunian',$hunian)->where('kategori','Properti Baru')->orderBy('id_properti','DESC')->paginate(10);
        }
        $kategori = "Properti Baru";
        $url = "/propertibaru";
        $count = $properti->count();
        $harga = " ";
        $daerah = " ";
        $tidur = " ";
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }

    public function list($hunian){
        if($hunian == "all"){
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                ->select('profiles.*', 'propertis.*')
                                ->orderBy('id_properti','DESC')->paginate(10);
            $hunian = " ";
        }else{
            $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                                ->select('profiles.*', 'propertis.*')
                                ->where('hunian',$hunian)->orderBy('id_properti','DESC')->paginate(10);
        }
        $kategori = "Properti";
        $url = "/properti";
        $count = $properti->count();
        $harga = " ";
        $daerah = " ";
        $tidur = " ";
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }
    public function harga($awal,$akhir){
        $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                            ->select('profiles.*', 'propertis.*')
                            ->whereBetween('harga', [$awal, $akhir])->orderBy('id_properti','DESC')->paginate(10);
        $hunian = "Properti";
        $kategori = " ";
        $url = "/properti";
        $count = $properti->count();
        $harga = " ";
        $daerah = " ";
        $tidur = " ";
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }
    public function wilayah($wilayah){
        $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                            ->select('profiles.*', 'propertis.*')
                            ->where('propertis.kota', $wilayah)->orderBy('id_properti','DESC')->paginate(10);
        $hunian = " ";
        $kategori = "Properti";
        $url = "/properti";
        $count = $properti->count();
        $harga = " ";
        $daerah = " ";
        $tidur = " ";
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }
    public function cari(Request $request){
        $data = $request->all();
        $properti = Properti::leftJoin('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                            ->select('profiles.*', 'propertis.*')
                            ->where('kategori',$data['prop'])->where('hunian',$data['hunian'])->where('judul','LIKE',"%".$data['cari']."%")->paginate(10);
        $hunian = $data['hunian'];
        $kategori = $data['prop'];
        $url = "/properti";
        $count = $properti->count();
        $harga = " ";
        $daerah = " ";
        $tidur = " ";
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }
    public function filtered(Request $request){
        $data = $request->all();
        if(empty($data['daerah'])){
            $daerah = " ";
        }else{
            $daerah = $data['daerah'];
        }
        if(empty($data['harga'])){
            $harga = " ";
        }else{
            $harga = $data['harga'];
            if($data['harga'] == "1"){
                $data['awal'] = "0";
                $data['akhir'] = "500.000.000";
            }elseif($data['harga'] == "2"){
                $data['awal']= "500.000.000";
                $data['akhir'] = "1.000.000.000";
            }elseif($data['harga'] == "3"){
                $data['awal']= "1.000.000.000";
                $data['akhir'] = "1.500.000.000";
            }elseif($data['harga'] == "4"){
                $data['awal']= "1.500.000.000";
                $data['akhir'] = "2.000.000.000";
            }elseif($data['harga'] == "5"){
                $data['awal']= "2.000.000.000";
                $data['akhir'] = "3.000.000.000";
            }elseif($data['harga'] == "6"){
                $data['awal']= "3.000.000.000";
                $data['akhir'] = "9.999.000.000.000";
            }
        }
        if(empty($data['tidur'])){
            $tidur = " ";
        }else{
            $tidur = $data['tidur'];
        }
        if(empty($data['kategori'])){
            $kategori = " ";
            $url = "/properti";
        }elseif($data['kategori'] == "Properti"){
            $kategori = " ";
            $url = "/properti";
        }elseif($data['kategori'] == "Dijual"){
            $kategori = $data['kategori'];
            $url = "/dijual";
        }elseif($data['kategori'] == "Disewakan"){
            $kategori = $data['kategori'];
            $url = "/disewakan";
        }elseif($data['kategori'] == "Properti Baru"){
            $kategori = $data['kategori'];
            $url = "/propertibaru";
        }
        if(empty($data['hunian'])){
            $hunian = " ";
        }else{
            $hunian = $data['hunian'];
        }
        // dd($url);
        $properti = Properti::join('profiles', 'profiles.id_profile', '=', 'propertis.agen')
                            ->select('profiles.*', 'propertis.*')
                            ->when(!empty($data['kategori']) , function ($query) use($data){
                                return $query->where('propertis.kategori',$data['kategori']);
                                })
                            ->when(!empty($data['hunian']) , function ($query) use($data){
                                return $query->where('propertis.hunian',$data['hunian']);
                                })
                            ->when(!empty($data['daerah']) , function ($query) use($data){
                                return $query->where('propertis.kota',$data['daerah']);
                                })
                            ->when(!empty($data['tidur']) , function ($query) use($data){
                                return $query->where('tidur',$data['tidur']);
                                })
                            ->when(!empty($data['harga']) , function ($query) use($data){
                                return $query->whereBetween('propertis.harga', [$data['awal'], $data['akhir']]);
                                })
                            ->paginate(10);
        $count = $properti->count();
        return view('front.properti',compact('properti','hunian','count','kategori','url','harga','daerah','tidur'));
    }

    public function detail($slug){
        // $properti = Properti::where('slug',$slug)->leftJoin('kategori_kotas', 'kategori_kotas.id_kota', '=', 'propertis.kota')->first();
        $properti = Properti::where('slug',$slug)->first();
        $kota = KategoriKota::where('id_kota',$properti->kota)->first();
        $kecamatan = KategoriKecamatan::where('id_kecamatan',$properti->kecamatan)->first();
        $user = Profile::where('id_profile',$properti->agen)->first();
        // dd($kota);
        return view('front.detail',compact('properti','user','kota','kecamatan'));
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
