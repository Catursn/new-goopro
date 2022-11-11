@extends('back.includes.master')

@section('title')
EDIT {{$iklan->judul}}  | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">EDIT {{$iklan->judul}} </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Iklankan Property</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$iklan->judul}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form class="form-horizontal" data-toggle="validator" method="POST" action="{{route('iklan.update',$iklan->id_iklan)}}" enctype="multipart/form-data" >
{{ csrf_field() }} {{ method_field('PATCH') }}
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Informasi Utama</h5>
                    <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <label for="jenis" class="col-form-label">Silahkan mulai mengisi data properti Anda </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="jenis" class="col-form-label">Jenis Iklan</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="jenis" class="custom-control-input" value="jual" {{(($iklan->jenis=='jual')? 'checked' : '')}}><span class="custom-control-label">Jual</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="jenis" class="custom-control-input" value="sewa" {{(($iklan->jenis=='sewa')? 'checked' : '')}}><span class="custom-control-label">Sewa</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Tipe Properti</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="tipe" value="{{$iklan->tipe}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Apakah ini sitaan / lelang</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="sitaan" value="{{$iklan->sitaan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Judul</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="judul" value="{{$iklan->judul}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label><br>
                        <label for="exampleFormControlTextarea1">Jangan menambahkan nomor telepon, URL alamat website, atau mencantumkan harga dalam kolom deskripsi pada iklan.</label>
                        <textarea id="summernote" name="deskripsi">{{$iklan->deskripsi}}</textarea><br>
                        <label for="exampleFormControlTextarea1">Silahkan tambah detail informasi seperti harga, jumlah kamar dll. Lebih akurat informasi yang diberikan – lebih banyak lead!</label>
                    </div><br><br>
                    <h5>Tambahkan detil informasi</h5>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Tunjukkan harga</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <select name="pilihharga" class="form-control">
                                <option value="#">--Pilih Harga--</option>
                                    <option value='1' {{(($iklan->pilihharga=='1')? 'selected' : '')}}>1</option>
                                    <option value='2' {{(($iklan->pilihharga=='2')? 'selected' : '')}}>2</option>
                                    <option value='3' {{(($iklan->pilihharga=='3')? 'selected' : '')}}>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Harga</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="harga" value="{{$iklan->harga}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Tersedia Sejak</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="sejak" value="{{$iklan->sejak}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Id Objek</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="objek" value="{{$iklan->objek}}">
                        </div>
                    </div>
                </div>  
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Foto & Media</h5>
                    <div class="form-group">
                        <label for="jenis" class="col-form-label">Pencari proyek akan mengabaikan proyek tanpa foto. Buatlah proyek Anda lebih menarik dengan mengunggah foto atau, bahkan video! </label>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Unggah foto properti Anda (jpg & png)</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Unggah media lainnya (pdf)</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="media">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Tempelkan URL video YouTube Anda dan unggah</label>
                        <input id="inputText3" type="text" class="form-control" name="youtube" value="{{$iklan->youtube}}">
                    </div>
                    <div class="form-group">
                        <label for="inputText3" class="col-form-label">Tempelkan URL virtual tour</label>
                        <input id="inputText3" type="text" class="form-control" name="virtual" value="{{$iklan->virtual}}">
                    </div>
                </div>  
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Dimana lokasi properti Anda?</h5>
                    <div class="form-group">
                        <label for="jenis" class="col-form-label">Untuk pencari rumah, lokasi adalah segalanya! Berikan informasi lokasi selengkapnya, agar para pencari properti dapat dengan mudah menemukan properti Anda.</label>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Provinsi</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <select name="provinsi" class="form-control">
                                <option value="">--Pilih Harga--</option>
                                    <option value='1' {{(($iklan->provinsi=='1')? 'selected' : '')}}>1</option>
                                    <option value='2' {{(($iklan->provinsi=='2')? 'selected' : '')}}>2</option>
                                    <option value='3' {{(($iklan->provinsi=='3')? 'selected' : '')}}>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Kota</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <select name="kota" class="form-control">
                                <option value="">--Pilih Harga--</option>
                                    <option value='1' {{(($iklan->kota=='1')? 'selected' : '')}}>1</option>
                                    <option value='2' {{(($iklan->kota=='2')? 'selected' : '')}}>2</option>
                                    <option value='3' {{(($iklan->kota=='3')? 'selected' : '')}}>3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Area</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="area" value="{{$iklan->area}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="alamatproperti" value="{{$iklan->alamatproperti}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Latitude</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="latitude" value="{{$iklan->latitude}}">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Longitude</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="longitude" value="{{$iklan->longitude}}">
                        </div>
                    </div>
                </div>  
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Mohon tinjau kembali kontak detil Anda</h5>
                    <div class="form-group">
                        <label for="jenis" class="col-form-label">Pastikan detil Anda terupdate dengan baik sehingga para pencari property dapat dengan mudah menghubungi Anda di jalur yang tepat.</label>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Nama</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="nama" value="{{$iklan->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Email</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="email" value="{{$iklan->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="alamat" value="{{$iklan->alamat}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Handphone</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="handphone" value="{{$iklan->handphone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <label for="inputText3" class="col-form-label">Telepon Kantor</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-12">
                            <input id="inputText3" type="text" class="form-control" name="kantor" value="{{$iklan->kantor}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis" class="col-form-label">Saya tidak bersedia dengan tepat menampilkan lokasi properti saya di dalam peta (Kami akan memindahkan lokasi dengan radius 250m dari tempat asal)</label>
                    </div>
                    <div style="float:left">
                        <button type="submit" class="btn btn-success">Publikasikan iklan properti</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-outline-success">Batalkan</button>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</form>        
@endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="/backend/css/summernote.min.css">
<link rel="stylesheet" type="text/css" href="/backend/css/summernote-lite.min.css">
@endpush
@push('scripts')
<script src="/backend/js/moment.min.js"></script>
<script src="/backend/js/summernote.min.js"></script>
<script src="/backend/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="/backend/js/summernote-lite.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    placeholder: 'Type here.....',
    tabsize: 2,
    height: 200,
  });
});
</script>
@endpush