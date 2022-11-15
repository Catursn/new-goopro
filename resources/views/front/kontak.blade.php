@extends('front.includes.master')

@section('title')
  KONTAK | GOOPRO
@endsection

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
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form method="POST"action="/postkontak" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
            <div class="form">
                <div class="row">
                    <div class="col-40">
                        Nama Lengkap
                    </div>
                    <div class="col-60">
                        <input type="text" name="nama">
                    </div>
                    <div class="col-40">
                        Alamat Email
                    </div>
                    <div class="col-60">
                        <input type="text" name="email">
                    </div>
                    <div class="col-40">
                        No Telepon
                    </div>
                    <div class="col-60">
                        <input type="text" name="notelp">
                    </div>
                    <div class="col-40">
                        Topik
                    </div>
                    <div class="col-60">
                        <input type="text" name="topik">
                    </div>
                    <div class="col-40">
                        Pertanyaan / Saran / Pesan
                    </div>
                    <div class="col-60">
                        <textarea name="saran" id="" cols="40" rows="10"></textarea>
                    </div>
                    <div class="col-40">
                    </div>
                    <div class="col-60">
                        <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                    </div>
                    <br><br>
                </div>
            </div>
            <input type="submit" value="Submit">
        </form>
        </div>
    </div>
@endsection
@push('styles')
{!! ReCaptcha::htmlScriptTagJsApi() !!}
@endpush
@push('scripts')
@endpush