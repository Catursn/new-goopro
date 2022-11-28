<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKota;
use App\Models\KategoriProvinsi;

class KategoriKotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = KategoriKota::leftJoin('kategori_provinsis', 'kategori_provinsis.id_provinsi', '=', 'kategori_kotas.provinsi_id')
                ->orderBy('id_kota','DESC')->get();
        return view('back.kategorikota.kota',compact('kota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinsi = KategoriProvinsi::orderBy('id_provinsi','ASC')->get();
        return view('back.kategorikota.add',compact('provinsi'));
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
            'kota'=>'required|string',
            'provinsi_id'=>'required',
        ],$messages);
        $data = $request->all();
        $count = KategoriKota::where('provinsi_id',$data['provinsi_id'])->orderBy('id_kota','DESC')->first();
        if(!empty($count->id_kota)){
            $id = $count->id_kota + 1;
        }else{
            $id = $data['provinsi_id']."01";
        }
        $kota = new KategoriKota;
        $data['id_kota'] = $id;
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
        $provinsi = KategoriProvinsi::orderBy('id_provinsi','ASC')->get();
        $kota=KategoriKota::findOrFail($id);
        return view('back.kategorikota.edit',compact('kota','provinsi'));
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
            'kota'=>'required|string|min:5',
            'provinsi_id'=>'required',
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
