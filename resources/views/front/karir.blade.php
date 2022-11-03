@extends('front.includes.master')

@section('title')
  KARIR | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Karir</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="karir">
            <h3>Formulir Karir GooPro</h3>
            <div class="box">
                <h2>Marketing/MA</h2>
                <h5>Goopro adalah perusahaan teknologi properti terbesar di Indonesia bersama dengan segenap anngota agensi terbaiks kami dan terkemuka yang mengoperasikan 
                    portal real estate di seluruh Indonesia.
                </h5>
            </div>
            <div class="box">
                <h2>Akunting / AC</h2>
                <h5>Goopro adalah perusahaan teknologi properti terbesar di Indonesia bersama dengan segenap anngota agensi terbaiks kami dan terkemuka yang mengoperasikan 
                    portal real estate di seluruh Indonesia.
                </h5>
            </div>
            <br><br>
            <h3>Formulir Karir GooPro</h3>
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
                        Alamat Rumah *
                    </div>
                    <div class="col-60">
                        <textarea name="" id="" cols="50" rows="10"></textarea>
                    </div>
                    <div class="col-40">
                        Curiculum Vitae *
                    </div>
                    <div class="col-60">
                        <input type="file">
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