<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::orderBy('id_slider','DESC')->get();
        return view('back.slider.slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slider.add');
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
            'slider' => 'required',
        ],$messages);
        $slider = new Slider;
        $data = $request->all();
        if ($request->hasFile('slider')) {
            $file = $request->file('slider');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/slider');
            $file->move($lokasi, $nama_gambar);
            $data['slider'] = '/slider/'.$nama_gambar;
        }
        $status=$slider->fill($data)->save();
        if($status){
            request()->session()->flash('success','Slider successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created slider');
        }
        return redirect()->route('slider.index');
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
        $slider=Slider::findOrFail($id);
        return view('back.slider.edit',compact('slider'));
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
            'slider' => 'required',
        ],$messages);
        $slider=Slider::findOrFail($id);
        $data = $request->all();
        if ($request->hasFile('slider')) {
            $file = $request->file('slider');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/slider');
            $file->move($lokasi, $nama_gambar);
            $data['slider'] = '/slider/'.$nama_gambar;
        }
        $status=$slider->fill($data)->save();
        if($status){
            request()->session()->flash('success','Slider successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated slider');
        }
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=Slider::findOrFail($id);
        File::delete('images'.$slider->slider);
        $status=$slider->delete();
        
        if($status){
            request()->session()->flash('success','Slider successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting slider ');
        }
        return redirect()->route('slider.index');
    }
}
