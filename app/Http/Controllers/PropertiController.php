<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properti;
use App\Models\KategoriProperti;
use App\Models\KategoriHunian;
use App\Models\KategoriProvinsi;
use App\Models\KategoriKota;
use App\Models\KategoriKecamatan;
use File;
use Storage;
use Illuminate\Support\Str;

class PropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Auth()->user()->id;
        $properti = Properti::where('agen',$author)->where('status','aktif')->orderBy('id_properti','DESC')->get();
        return view('back.properti.propertiaktif',compact('properti'));
    }

    public function nonaktif(){
        $author = Auth()->user()->id;
        $properti = Properti::where('agen',$author)->where('status','nonaktif')->orderBy('id_properti','DESC')->get();
        return view('back.properti.propertiaktif',compact('properti'));
    }

    public function terjual(){
        $author = Auth()->user()->id;
        $properti = Properti::where('agen',$author)->where('status','terjual')->orderBy('id_properti','DESC')->get();
        return view('back.properti.propertiaktif',compact('properti'));
    }

    public function kota($id){
        $kota = KategoriKota::where('provinsi_id','=',$id)->get();
        // $re = json_encode($kota);
        // dd($re);
        return response()->json($kota);
    }

    public function kecamatan($id){
        $kecamatan = KategoriKecamatan::where('kota_id','=',$id)->get();
        // $re = json_encode($kecamatan);
        // dd($re);
        return response()->json($kecamatan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriProperti::where('status','aktif')->orderBy('id_kategori','DESC')->get();
        $hunian = KategoriHunian::where('status','aktif')->orderBy('id_hunian','DESC')->get();
        $provinsi = KategoriProvinsi::orderBy('id_provinsi','ASC')->get();
        return view('back.properti.add',compact('kategori','hunian','provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $properti = new properti;
        $data = $request->all();
        $data['harga'] = str_replace(".","",$data['harga']);
        $data['perm'] = str_replace(".","",$data['perm']);
        // dd($data);
        if ($request->hasFile('foto1')) {
            $file = $request->file('foto1');
            $nama_gambar = $data['judul'].'1.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto1'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto2')) {
            $file = $request->file('foto2');
            $nama_gambar = $data['judul'].'2.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto2'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto3')) {
            $file = $request->file('foto3');
            $nama_gambar = $data['judul'].'3.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto3'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto4')) {
            $file = $request->file('foto4');
            $nama_gambar = $data['judul'].'4.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto4'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto5')) {
            $file = $request->file('foto5');
            $nama_gambar = $data['judul'].'5.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto5'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        $slug=Str::slug($request->judul);
        $count=properti::where('slug',$slug)->count();
        $data['agen'] = Auth()->user()->id;
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $status=$properti->fill($data)->save();
        $id = $properti->id_properti;
        $properti= Properti::findOrFail($id);
        $data['listing'] = $id;
        $status=$properti->fill($data)->save();
        if($status){
            request()->session()->flash('success','properti successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created properti');
        }
        return redirect()->route('properti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $properti= Properti::findOrFail($id);
        $kategori = KategoriProperti::where('status','aktif')->orderBy('id_kategori','DESC')->get();
        $hunian = KategoriHunian::where('status','aktif')->orderBy('id_hunian','DESC')->get();
        $provinsi = KategoriProvinsi::orderBy('id_provinsi','ASC')->get();
        $kota = KategoriKota::orderBy('id_kota','ASC')->get();
        $kecamatan = KategoriKecamatan::orderBy('id_kecamatan','ASC')->get();
        return view('back.properti.edit',compact('properti','kategori', 'hunian','provinsi','kota','kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $properti= Properti::findOrFail($id);
        $data = $request->all();
        $data['harga'] = str_replace(".","",$data['harga']);
        $data['perm'] = str_replace(".","",$data['perm']);
        if ($request->hasFile('foto1')) {
            $file = $request->file('foto1');
            $nama_gambar = $data['judul'].'1.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto1'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto2')) {
            $file = $request->file('foto2');
            $nama_gambar = $data['judul'].'2.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto2'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto3')) {
            $file = $request->file('foto3');
            $nama_gambar = $data['judul'].'3.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto3'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto4')) {
            $file = $request->file('foto4');
            $nama_gambar = $data['judul'].'4.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto4'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        if ($request->hasFile('foto5')) {
            $file = $request->file('foto5');
            $nama_gambar = $data['judul'].'5.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto5'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        $slug=Str::slug($request->judul);
        $count=Properti::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $status=$properti->fill($data)->save();
        if($status){
            request()->session()->flash('success','properti successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created properti');
        }
        return redirect()->route('properti.index');
    }

    public function subterjual($id){
        $properti= Properti::findOrFail($id);
        $data['status'] = "terjual";
        $status=$properti->fill($data)->save();
        if($status){
            request()->session()->flash('success','Status properti successfully changed');
        }
        else{
            request()->session()->flash('error','Eror while changed properti');
        }
        return redirect()->route('properti.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properti= Properti::findOrFail($id);
        File::delete('images'.$properti->foto1);
        File::delete('images'.$properti->foto2);
        File::delete('images'.$properti->foto3);
        File::delete('images'.$properti->foto4);
        File::delete('images'.$properti->foto5);
        $status=$properti->delete();
        
        if($status){
            request()->session()->flash('success','Properti successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting properti ');
        }
        return redirect()->route('properti.index');
    }
}
