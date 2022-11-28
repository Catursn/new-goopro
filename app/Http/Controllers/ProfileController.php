<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = Profile::findOrFail($id);
        return view('back.profile.edit',compact('profil'));
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
        $profile = Profile::findOrFail($id);
        $data = $request->all();
        $nohp = $data['notelp'];
        if(!preg_match('/[^+0-9]/',trim($nohp))){
            // cek apakah no hp karakter 1 adalah 0
            if(substr(trim($nohp), 0, 1)=='0'){
                $nohp = '62'.substr(trim($nohp), 1);
            }
        }
        $data['notelp'] = $nohp;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_gambar = $file->getClientOriginalName();
            $lokasi = public_path('images/profile');
            $file->move($lokasi, $nama_gambar);
            $data['foto'] = '/profile/'.$nama_gambar;
        }
        $status=$profile->fill($data)->save();
        if($status){
            request()->session()->flash('success','profile successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created profile');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
