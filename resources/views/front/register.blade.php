@extends('front.includes.master')
@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Iklankan Properti</a>
    </div>
    <div class="bannerr">
        <img src="/images/register.png" alt="">
    </div>
    <div class="wadah">
        <div class="register">
            <div class="title">
                <h2>Lengkapi Formulir Registrasi <br> Keanggotaan GooPro</h2>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="label">
                        <h5>Nama Lengkap *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="text">
                    </div>
                </div>
                <div class="col-40">
                    <div class="label">
                        <h5>Alamat Email *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="text">
                    </div>
                </div>
                <div class="col-40">
                    <div class="label">
                        <h5>No Telepon *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="text">
                    </div>
                </div>
                <div class="col-40">
                    <div class="label">
                        <h5>Nama Perusahaan *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="text">
                    </div>
                </div>
                <div class="col-40">
                    <div class="label">
                        <h5>Status Agent *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="checkbox">Saya sebagai independent agent
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
                </div>
                <div class="col-40">
                    <div class="label">
                        <h5>Konfirmasi Password *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="password">
                    </div>
                    <div class="submit">
                        <a href="#">Daftar</a>
                    </div>
                    <div class="tnc">
                        <div class="row">
                            <div class="col-10">
                                <input type="checkbox">
                            </div>
                            <div class="col-90">
                                <h4>Ya, kirimkan saya informasi perumahan baru, data properti terkini dan penawaran dari partner Saya setuju untuk Rumah's Persyaratan Layanan 
                                dan Kebijakan Privasi termasuk pengumpulan, penggunaan, dan pengungkapan informasi pribadi saya.</h4>
                            </div>
                        </div>
                        <h4>Dengan mendaftar, saya menyetujui Kebijakan Privasi</h4>
                        <h4>Sudah terdaftar ?<a href="/login"> Log In</a></h4> 
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