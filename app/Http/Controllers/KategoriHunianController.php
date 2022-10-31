<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriHunian;

class KategoriHunianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hunian = KategoriHunian::orderBy('id_hunian','DESC')->get();
        return view('back.kategorihunian.hunian',compact('hunian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategorihunian.add');
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
            'hunian'=>'required|string|min:2',
            'status'=>'required',
        ],$messages);
        $hunian = new KategoriHunian;
        $data = $request->all();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/kategoriproperti');
            $file->move($lokasi, $nama_gambar);
            $data['icon'] = '/kategoriproperti/'.$nama_gambar;
        }
        $status=$hunian->fill($data)->save();
        if($status){
            request()->session()->flash('success','hunian successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created hunian');
        }
        return redirect()->route('kategorihunian.index');
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
        $hunian=KategoriHunian::findOrFail($id);
        return view('back.kategorihunian.edit',compact('hunian'));
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
            'hunian'=>'required|string|min:2',
            'status'=>'required',
        ],$messages);
        $hunian=KategoriHunian::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/kategoriproperti');
            $file->move($lokasi, $nama_gambar);
            $data['icon'] = '/kategoriproperti/'.$nama_gambar;
        }
        $status=$hunian->fill($data)->save();
        if($status){
            request()->session()->flash('success','hunian successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated hunian');
        }
        return redirect()->route('kategorihunian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hunian=KategoriHunian::findOrFail($id);
        $status=$hunian->delete();
        
        if($status){
            request()->session()->flash('success','Kategori hunian successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting kategori hunian ');
        }
        return redirect()->route('kategorihunian.index');
    }
}
