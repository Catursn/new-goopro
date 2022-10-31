<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProperti;

class KategoriPropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriProperti::orderBy('id_kategori','DESC')->get();
        return view('back.kategoriproperti.kategori',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategoriproperti.add');
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
            'properti'=>'required|string|min:5',
            'status'=>'required',
        ],$messages);
        $kategori = new KategoriProperti;
        $data = $request->all();
        $status=$kategori->fill($data)->save();
        if($status){
            request()->session()->flash('success','kategori successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created kategori');
        }
        return redirect()->route('kategoriproperti.index');
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
        $kategori=KategoriProperti::findOrFail($id);
        return view('back.kategoriproperti.edit',compact('kategori'));
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
            'properti'=>'required|string|min:5',
            'status'=>'required',
        ],$messages);
        $kategori=KategoriProperti::findOrFail($id);
        $data = $request->all();
        $status=$kategori->fill($data)->save();
        if($status){
            request()->session()->flash('success','kategori successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated kategori');
        }
        return redirect()->route('kategoriproperti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properti=KategoriProperti::findOrFail($id);
        $status=$properti->delete();
        
        if($status){
            request()->session()->flash('success','Kategori properti successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting kategori properti ');
        }
        return redirect()->route('kategoriproperti.index');
    }
}
