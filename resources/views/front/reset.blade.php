@extends('front.includes.master')

@section('title')
  RESET PASSWORD | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Reset Password</a>
    </div>
    <div class="bannerr">
        <img src="/images/register.png" alt="">
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
    <div class="wadah">
        <form method="POST" class="register-form" id="register-form" action="/resetsubmit">
        @csrf
        <div class="register">
            <div class="title">
                <h2>Lupa Kode Sandi</h2>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="label">
                        <h5>Alamat Email *</h5>
                    </div>
                </div>
                <div class="col-60">
                    <div class="input">
                        <input type="text" name="email" value="{{$user->email}}" readonly>
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
                        <input type="submit" value="Daftar">
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush