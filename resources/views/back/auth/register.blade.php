@extends('front.includes.master')
@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Login Admin</a>
    </div>
    <div class="bannerr">
        <img src="/images/register.png" alt="">
    </div>
    <div class="wadah">
        <div class="register">
            <div class="title">
                <h2>Lengkapi Formulir Registrasi <br> Keanggotaan GooPro</h2>
            </div>
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
            <form method="POST" class="register-form" id="register-form" action="/admin/regstore">
            @csrf
                <div class="row">
                    <div class="col-40">
                        <div class="label">
                            <h5>Nama Lengkap *</h5>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="input">
                            <input type="text" name="nama" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="col-40">
                        <div class="label">
                            <h5>Alamat Email *</h5>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="input">
                            <input type="email" name="email" placeholder="Nama@email.com">
                        </div>
                    </div>
                    <div class="col-40">
                        <div class="label">
                            <h5>Password *</h5>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="input">
                            <input type="password" name="password">
                        </div>
                    </div>
                    <div class="col-40">
                        <div class="label">
                            <h5>Konfirmasi Password *</h5>
                        </div>
                    </div>
                    <div class="col-60">
                        <div class="input">
                            <input type="password" name="password_confirmation">
                        </div>
                        <div class="submit">
                            <input type="submit" name="signup" value="Daftar">
                            <!-- <a href="#">Daftar</a> -->
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
            </form>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush