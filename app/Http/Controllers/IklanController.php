<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use File;
use Storage;
use Illuminate\Support\Str;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan = Iklan::orderBy('id_iklan','DESC')->get();
        return view('back.iklan.iklan',compact('iklan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.iklan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iklan = new Iklan;
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_gambar = $data['judul'].'.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/iklan');
            $file->move($lokasi, $nama_gambar);
            $data['foto'] = '/iklan/'.$nama_gambar;
        }if ($request->hasFile('media')) {
            $file = $request->file('media');
            $nama_gambar = $data['judul'].'.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/media');
            $file->move($lokasi, $nama_gambar);
            $data['media'] = '/media/'.$nama_gambar;
        }
        $status=$iklan->fill($data)->save();
        if($status){
            request()->session()->flash('success','Iklan successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created iklan');
        }
        return redirect()->route('iklan.index');
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
        $iklan= Iklan::findOrFail($id);
        return view('back.iklan.edit',compact('iklan'));
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
        $iklan= Iklan::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_gambar = $data['judul'].'.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/iklan');
            $file->move($lokasi, $nama_gambar);
            $data['foto'] = '/iklan/'.$nama_gambar;
        }if ($request->hasFile('media')) {
            $file = $request->file('media');
            $nama_gambar = $data['judul'].'.'.$file->getClientOriginalExtension();
            $lokasi = public_path('images/media');
            $file->move($lokasi, $nama_gambar);
            $data['media'] = '/media/'.$nama_gambar;
        }
        $status=$iklan->fill($data)->save();
        if($status){
            request()->session()->flash('success','Iklan successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created iklan');
        }
        return redirect()->route('iklan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iklan= Iklan::findOrFail($id);
        File::delete('images'.$iklan->foto);
        File::delete('images'.$iklan->media);
        $status=$iklan->delete();
        
        if($status){
            request()->session()->flash('success','iklan successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting iklan ');
        }
        return redirect()->route('iklan.index');
    }
}
