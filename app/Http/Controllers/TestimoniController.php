<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use File;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = testimoni::orderBy('id_testimoni','DESC')->get();
        return view('back.testimoni.testimoni',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.testimoni.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimoni = new Testimoni;
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/testimoni');
            $file->move($lokasi, $nama_gambar);
            $data['foto'] = '/testimoni/'.$nama_gambar;
        }
        $status=$testimoni->fill($data)->save();
        if($status){
            request()->session()->flash('success','Testimoni successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created testimoni');
        }
        return redirect()->route('testimoni.index');
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
        $testimoni=Testimoni::findOrFail($id);
        return view('back.testimoni.edit',compact('testimoni'));
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
        $testimoni = Testimoni::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/testimoni');
            $file->move($lokasi, $nama_gambar);
            $data['foto'] = '/testimoni/'.$nama_gambar;
        }
        $status=$testimoni->fill($data)->save();
        if($status){
            request()->session()->flash('success','Testimoni successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created testimoni');
        }
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni=Testimoni::findOrFail($id);
        File::delete('images'.$testimoni->foto);
        $status=$testimoni->delete();
        
        if($status){
            request()->session()->flash('success','Testimoni successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting testimoni ');
        }
        return redirect()->route('testimoni.index');
    }
}
