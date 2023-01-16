<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properti;
use App\Models\KategoriHunian;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Auth()->user()->id;
        $role = Auth()->user()->role;
        if ($role == "1"){
            $dijual = Properti::where('kategori','Dijual')->orderBy('views','DESC')->limit(5)->get();
            $disewakan = Properti::where('kategori','Disewakan')->orderBy('views','DESC')->limit(5)->get();
            $baru = Properti::where('kategori','Properti Baru')->orderBy('views','DESC')->limit(5)->get();
            $prop = Properti::get();
            $hunian = KategoriHunian::where('status','aktif')->get();
            $name = array();
            foreach($hunian as $key => $list){
                $count = Properti::where('hunian',$list->hunian)->count();
                $i = 0;
                while( $i<=1 ){
                    $name['hunian'] = $list->hunian;
                    $name['count'] = $count;
                    $i++;
                }
                $coba[++$key] = $name;
            }
        }else{
            $dijual = Properti::where('agen',$author)->where('kategori','Dijual')->orderBy('views','DESC')->limit(5)->get();
            $disewakan = Properti::where('agen',$author)->where('kategori','Disewakan')->orderBy('views','DESC')->limit(5)->get();
            $baru = Properti::where('agen',$author)->where('kategori','Properti Baru')->orderBy('views','DESC')->limit(5)->get();
            $prop = Properti::where('agen',$author)->get();
            $hunian = KategoriHunian::where('status','aktif')->get();
            $name = array();
            foreach($hunian as $key => $list){
                $count = Properti::where('agen',$author)->where('hunian',$list->hunian)->count();
                $i = 0;
                while( $i<=1 ){
                    $name['hunian'] = $list->hunian;
                    $name['count'] = $count;
                    $i++;
                }
                $coba[++$key] = $name;
            }
        }
        // dd($dijual);
        return view('back.dashboard',compact('dijual','disewakan','baru','hunian','coba'));
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
        //
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
        //
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
