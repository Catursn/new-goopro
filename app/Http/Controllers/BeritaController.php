<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Models\Berita;
use File;
use Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth()->user()->role;
        if($role == '1'){
            $author = Auth()->user()->name;
            $berita = Berita::orderBy('id_berita','DESC')->get();
            return view('back.berita.berita',compact('berita'));
        }else{
            request()->session()->flash('error','Anda tidak memiliki akses tersebut');
            return redirect()->route('admin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBerita::where('status','aktif')->orderBy('id_kategori','DESC')->get();
        return view('back.berita.add',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'min' => ':attribute harus diisi minimal :min karakter !!!',
        ];
        $this->validate($request,[
            'judul'=>'required|string|min:5',
            'tanggal' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'status'=>'required',
        ],$messages);
        $berita = new Berita;
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        $data['views'] = "0";
        $slug=Str::slug($request->judul);
        $count=Berita::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']="/berita/detail/".$data['kategori'].$slug;
        $status=$berita->fill($data)->save();
        if($status){
            request()->session()->flash('success','Berita successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created berita');
        }
        return redirect()->route('berita.index');
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
        $berita=Berita::findOrFail($id);
        $kategori = KategoriBerita::where('status','aktif')->orderBy('id_kategori','DESC')->get();
        return view('back.berita.edit',compact('berita','kategori'));
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
        $messages = [
            'required' => ':attribute wajib diisi !!!',
            'min' => ':attribute harus diisi minimal :min karakter !!!',
        ];
        $this->validate($request,[
            'judul'=>'required|string|min:5',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'status'=>'required',
        ],$messages);
        $berita = Berita::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/'.$data['kategori']);
            $file->move($lokasi, $nama_gambar);
            $data['foto'] = '/'.$data['kategori'].'/'.$nama_gambar;
        }
        $slug=Str::slug($request->judul);
        $count=Berita::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']="/berita/detail/".$data['kategori'].$slug;
        $status=$berita->fill($data)->save();
        if($status){
            request()->session()->flash('success','Berita successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created berita');
        }
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::findOrFail($id);
        File::delete('images'.$berita->foto);
        $status=$berita->delete();
        
        if($status){
            request()->session()->flash('success','Berita successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting berita ');
        }
        return redirect()->route('berita.index');
    }
}
