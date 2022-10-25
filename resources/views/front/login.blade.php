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
            <div class="row">
                <div class="col-40">
                    <div class="label">
                        <h5>Nama Email *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="email">
                    </div>
                </div>
                <div class="col-40">
                    <div class="label">
                        <h5>Password *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="password">
                    </div>
                    <div class="submit">
                        <a href="#">Masuk</a>
                    </div>
                    <div class="tnc">
                        <h4>Lupa Password ?<a href="/lupapassword"> Klik disini</a></h4> 
                        <h4>Belum Daftar ?<a href="/register"> Daftar Gratis</a></h4> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush