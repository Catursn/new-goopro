<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Hash;
use Session;
use Auth;
use App\Models\User;
use App\Models\Profile;
use App\Mail\ResetMail;

class AuthController extends Controller
{
    public function frontregister(){
        return view('front.register');
    }
    public function frontregisterSubmit(Request $request){
        // return $request->all();
        // $messages = [
        //     'required' => ':attribute wajib diisi !!!',
        //     'min' => ':attribute harus diisi minimal :min karakter !!!',
        //     'unique' => ':atribute sudah pernah dipakai',
        //     'numeric' => ':atribute harus menggunakan angka',
        //     'confirmed' => 'konfirmasi password salah',
        // ];
        $this->validate($request,[
            'nama'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|confirmed',
        ]);
        // $file = $request->file('photo');
        $data=$request->all();
        // dd($data['role']);
        $check= User::create([
            'name'=>$data['nama'],
            'email'=>$data['email'],
            'role'=>'2',
            'password'=>Hash::make($data['password']),
            ]);
        $profil= Profile::create([
            'id_profile'=>$check->id,
            ]);
        if($check){
            Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('properti.index');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    public function register(){
        return view('back.auth.register');
    }

    public function registerSubmit(Request $request){
        // return $request->all();
        // $messages = [
        //     'required' => ':attribute wajib diisi !!!',
        //     'min' => ':attribute harus diisi minimal :min karakter !!!',
        //     'unique' => ':atribute sudah pernah dipakai',
        //     'numeric' => ':atribute harus menggunakan angka',
        //     'confirmed' => 'konfirmasi password salah',
        // ];
        $this->validate($request,[
            'nama'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|confirmed',
        ]);
        // $file = $request->file('photo');
        $data=$request->all();
        // dd($data['role']);
        $check= User::create([
            'name'=>$data['nama'],
            'email'=>$data['email'],
            'role'=>'1',
            'password'=>Hash::make($data['password']),
            ]);
        $profil= Profile::create([
            'id_profile'=>$check->id,
            ]);
        if($check){
            Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('admin');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function login(){
        if(Auth::check()){
            return redirect()->route('admin');
        }else{
            return view('back.auth.login');
        } 
    }

    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            // dd($data);
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully login');
            if (Auth()->user()->role == "1"){
                return redirect()->route('admin');
            }
            else{
                return redirect()->route('properti.index');
            }
        }
        else{
            request()->session()->flash('error','Invalid email and password please try again!');
            return back();
        }
    }

    public function gantipassword(Request $request){
        if(Auth::check()){
            $id = Auth()->user()->id;
            $user = User::findOrFail($id);
            return view('back.gantipassword',compact('user'));
        }else{
            return view('back.auth.login');
        } 
    }

    public function resetpassword(Request $request, $id){
        $user = User::findOrFail($id);
        $this->validate($request,[
            'password'=>'required|confirmed',
        ]);
        $data=$request->all();
        if(Hash::check($data['passwordlama'], Auth::user()->password)){
            $data['password'] = Hash::make($data['password']);
            $status=$user->fill($data)->save();
            if($status){
                request()->session()->flash('success','Successfully change password');
            }
            else{
                request()->session()->flash('error','Eror while change password');
            }
            return redirect()->route('admin');
        }else{
            request()->session()->flash('error','Old password false');
            return back();
        }
    }

    public function resetmail(Request $request){
        $token = Str::random(50);
        $data = $request->all();
        $data['remember_token'] = $token;
        $user = User::where('email',$data['email'])->first();
        $status = $user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cek email anda');
            Mail::to($data['email'])->send(new ResetMail($token));
        }
        else{
            request()->session()->flash('error','Email tidak ada dalam sistem');
        }
        return back();
    }

    public function reset($token){
        $user = User::where('remember_token',$token)->first();
        return view('front.reset',compact('user'));
    }

    public function resetsubmit(Request $request){
        $this->validate($request,[
            'password'=>'required|confirmed',
        ]);
        $data = $request->all();
        $user = User::where('email',$data['email'])->first();
        $data['remember_token'] = "";
        $pass = $data['password'];
        $data['password'] = Hash::make($pass);
        $status = $user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Password sudah di ganti');
        }
        else{
            request()->session()->flash('error','Ganti Password gagal');
        }
        return redirect()->route('login');
    }
}
