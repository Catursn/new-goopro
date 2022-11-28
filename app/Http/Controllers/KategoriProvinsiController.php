<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProvinsi;

class KategoriProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = KategoriProvinsi::orderBy('id_provinsi','DESC')->get();
        return view('back.kategoriprovinsi.provinsi',compact('provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.KategoriProvinsi.add');
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
        ];
        $this->validate($request,[
            'provinsi'=>'required|string',
        ],$messages);
        $provinsi = new KategoriProvinsi;
        $data = $request->all();
        $status=$provinsi->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kategori provinsi successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created kategori provinsi');
        }
        return redirect()->route('kategoriprovinsi.index');
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
        $provinsi=KategoriProvinsi::findOrFail($id);
        return view('back.kategoriprovinsi.edit',compact('provinsi'));
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
        ];
        $this->validate($request,[
            'provinsi'=>'required|string',
        ],$messages);
        $provinsi=KategoriProvinsi::findOrFail($id);
        $data = $request->all();
        $status=$provinsi->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kategori provinsi successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated kategori provinsi');
        }
        return redirect()->route('kategoriprovinsi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi=KategoriProvinsi::findOrFail($id);
        $status=$provinsi->delete();
        
        if($status){
            request()->session()->flash('success','Kategori provinsi successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting kategori provinsi ');
        }
        return redirect()->route('kategoriprovinsi.index');
    }
}
