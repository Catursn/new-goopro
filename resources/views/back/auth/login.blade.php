@extends('front.includes.master')
@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Login</a>
    </div>
    <div class="bannerr">
        <img src="/images/register.png" alt="">
    </div>
    <div class="wadah">
        <div class="register">
            <div class="title">
                <h2>Login Masuk Halaman Sendiri</h2>
            </div>
            @if(session('success'))
                <div class="alert alert-success alert-dismissable fade show text-center">
                    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                    {{session('success')}}
                </div>
            @endif


            @if(session('error'))
                <div class="alert alert-danger alert-dismissable fade show text-center">
                    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                    {{session('error')}}
                </div>
            @endif
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" class="register-form" id="login-form" action="loginstore">
            @csrf
                <div class="row">
                    <div class="col-40">
                        <div class="label">
                            <h5>Nama Email *</h5>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="input">
                            <input type="email" name="email" placeholder="nama@email.com">
                        </div>
                    </div>
                    <div class="col-40">
                        <div class="label">
                            <h5>Password *</h5>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="input">
                            <input type="password" name="password" id="myInput"><br>
                            <input type="checkbox" onclick="myFunction()">Show Password
                        </div>
                        <div class="submit">
                            <input type="submit" name="signup" value="Masuk">
                            <!-- <a href="#">Masuk</a> -->
                        </div>
                        <div class="tnc">
                            <h4>Lupa Password ?<a href="/lupapassword"> Klik disini</a></h4> 
                            <h4>Belum Daftar ?<a href="/register"> Daftar Gratis</a></h4> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
@endpush