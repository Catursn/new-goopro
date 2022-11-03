@extends('front.includes.master')

@section('title')
  LUPA PASSWORD | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Lupa Kata Sandi</a>
    </div>
    <div class="bannerr">
        <img src="/images/register.png" alt="">
    </div>
    <div class="wadah">
        <div class="register">
            <div class="title">
                <h2>Lupa Kode Sandi</h2>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="label">
                        <h5>Alamar Nama Email *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="email">
                    </div>
                    <div class="submit">
                        <a href="#">Kirim Kode Sandi</a>
                    </div>
                    <div class="tnc">
                        <h4>Sudah menjadi member GooPro ?<a href="/login"> Klik masuk</a></h4> 
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