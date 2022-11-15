@extends('back.includes.master')

@section('title')
  PESAN {{$kontak->nama}} | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">PESAN {{$kontak->nama}} </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pesan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$kontak->nama}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Pesan {{$kontak->nama}}</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama</label>
                    <input id="inputText3" type="text" class="form-control" name="nama" value="{{$kontak->nama}}">
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Email</label>
                    <input id="inputText3" type="text" class="form-control" name="email" value="{{$kontak->email}}">
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nomor Telpon</label>
                    <input id="inputText3" type="text" class="form-control" name="notelp" value="{{$kontak->notelp}}">
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Topik</label>
                    <input id="inputText3" type="text" class="form-control" name="topik" value="{{$kontak->topik}}">
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Saran / Pesan / Pertanyaan</label><br>
                    <textarea name="" id="" cols="100" rows="10">{{$kontak->saran}}</textarea>
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