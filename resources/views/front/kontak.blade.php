@extends('front.includes.master')
@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Kontak Kami</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="karir">
        <h3>Formulir Kebutuhan atau Masukan Anda kepada Kami</h3>
            <div class="form">
                <div class="row">
                    <div class="col-40">
                        Nama Lengkap *
                    </div>
                    <div class="col-60">
                        <input type="text">
                    </div>
                    <div class="col-40">
                        Alamat Email *
                    </div>
                    <div class="col-60">
                        <input type="text">
                    </div>
                    <div class="col-40">
                        No Telepon *
                    </div>
                    <div class="col-60">
                        <input type="text">
                    </div>
                    <div class="col-40">
                        Status Sebagai *
                    </div>
                    <div class="col-60">
                        <select name="" id="">
                            <option value="0">Select</option>
                            <option value="MA">MA</option>
                            <option value="CA">CA</option>
                        </select>
                    </div>
                    <div class="col-40">
                        Nama Perusahaan *
                    </div>
                    <div class="col-60">
                        <input type="text">
                    </div>
                    <div class="col-40">
                        Status Agent *
                    </div>
                    <div class="col-60">
                        <input type="checkbox" name="" id="" checked>Saya sebagai independent agent
                    </div>
                    <div class="col-40">
                        Password *
                    </div>
                    <div class="col-60">
                        <input type="text">
                    </div>
                    <div class="col-40">
                        Konfirmasi Password *
                    </div>
                    <div class="col-60">
                        <input type="text">
                    </div>
                    <br><br>
                </div>
            </div>
            <a href="#">Submit</a>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush