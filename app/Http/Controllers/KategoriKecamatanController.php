<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKota;
use App\Models\KategoriKecamatan;

class KategoriKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = KategoriKecamatan::leftJoin('kategori_kotas', 'kategori_kotas.id_kota', '=', 'kategori_kecamatans.kota_id')
                ->orderBy('id_kecamatan','DESC')->get();
        return view('back.kategorikecamatan.kecamatan',compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = KategoriKota::orderBy('id_kota','ASC')->get();
        return view('back.kategorikecamatan.add',compact('kota'));
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
            'kecamatan'=>'required|string',
            'kota_id'=>'required',
        ],$messages);
        $data = $request->all();
        $count = KategoriKecamatan::where('kota_id',$data['kota_id'])->orderBy('id_kecamatan','DESC')->first();
        if(!empty($count->id_kecamatan)){
            $id = $count->id_kecamatan + 1;
        }else{
            $id = $data['kota_id']."01";
        }
        $kecamatan = new KategoriKecamatan;
        $data['id_kecamatan'] = $id;
        $status=$kecamatan->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kategori kecamatan successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created kategori kecamatan');
        }
        return redirect()->route('kategorikecamatan.index');
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
        $kota = KategoriKota::orderBy('id_kota','ASC')->get();
        $kecamatan=KategoriKecamatan::findOrFail($id);
        return view('back.KategoriKecamatan.edit',compact('kecamatan','kota'));
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
            'kecamatan'=>'required|string|min:5',
            'kota_id'=>'required',
        ],$messages);
        $kecamatan=KategoriKecamatan::findOrFail($id);
        $data = $request->all();
        $status=$kecamatan->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kategori kecamatan successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated kategori kecamatan');
        }
        return redirect()->route('kategorikecamatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan=KategoriKecamatan::findOrFail($id);
        $status=$kecamatan->delete();
        
        if($status){
            request()->session()->flash('success','Kategori kecamatan successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting kategori kecamatan ');
        }
        return redirect()->route('kategorikecamatan.index');
    }
}
