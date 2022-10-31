<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKota;

class KategoriKotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = KategoriKota::orderBy('id_kota','DESC')->get();
        return view('back.kategorikota.kota',compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategorikota.add');
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
            'kota'=>'required|string|min:5',
            'status'=>'required',
        ],$messages);
        $kota = new KategoriKota;
        $data = $request->all();
        $status=$kota->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kategori kota successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created kategori kota');
        }
        return redirect()->route('kategorikota.index');
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
        $kota=KategoriKota::findOrFail($id);
        return view('back.kategorikota.edit',compact('kota'));
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
            'kota'=>'required|string|min:5',
            'status'=>'required',
        ],$messages);
        $kota=KategoriKota::findOrFail($id);
        $data = $request->all();
        $status=$kota->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kategori kota successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated kategori kota');
        }
        return redirect()->route('kategorikota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kota=KategoriKota::findOrFail($id);
        $status=$kota->delete();
        
        if($status){
            request()->session()->flash('success','Kategori kota successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting kategori kota ');
        }
        return redirect()->route('kategorikota.index');
    }
}
