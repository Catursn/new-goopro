<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBerita;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriBerita::orderBy('id_kategori','DESC')->get();
        return view('back.kategoriberita.kategori',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategoriberita.add');
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
            'kategori'=>'required|string|min:5',
            'status'=>'required',
        ],$messages);
        $kategori = new KategoriBerita;
        $data = $request->all();
        
        $status=$kategori->fill($data)->save();
        if($status){
            request()->session()->flash('success','kategori successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created kategori');
        }
        return redirect()->route('kategoriberita.index');
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
        $kategori=KategoriBerita::findOrFail($id);
        return view('back.kategoriberita.edit',compact('kategori'));
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
            'kategori'=>'required|string|min:5',
            'status'=>'required',
        ],$messages);
        $kategori=KategoriBerita::findOrFail($id);
        $data = $request->all();
        
        $status=$kategori->fill($data)->save();
        if($status){
            request()->session()->flash('success','kategori successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated kategori');
        }
        return redirect()->route('kategoriberita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=KategoriBerita::findOrFail($id);
        $status=$berita->delete();
        
        if($status){
            request()->session()->flash('success','Kategori Berita successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting kategori berita ');
        }
        return redirect()->route('kategoriberita.index');
    }
}
