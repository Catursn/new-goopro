@extends('back.includes.master')

@section('title')
  ADD PROPERTI | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Add Properti </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Properti</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
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
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <form method="POST"action="{{route('properti.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
            <h5 class="card-header">Add Properti</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Judul <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="judul" required>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="status">Kategori Hunian <span class="text-danger">*</span></label>
                        <select name="hunian" class="form-control" required>
                            <option value="">--Pilih Kategori--</option required>
                            @foreach($hunian as $data)
                                <option value='{{$data->hunian}}'>{{$data->hunian}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="status">Kategori Properti <span class="text-danger">*</span></label>
                        <select name="kategori" class="form-control" required>
                            <option value="">--Pilih Kategori--</option required>
                            @foreach($kategori as $data)
                                <option value='{{$data->properti}}'>{{$data->properti}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="tempat" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Harga <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="harga" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat Tidur <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="tidur" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Kamar Mandi <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="mandi" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Informasi <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="informasi" required>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Pengembang <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="pengembang" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Harga Per M <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="perm" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Luas Bangunan <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="bangunan" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Luas Tanah <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="tanah" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Interior <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="interior" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Eksterior <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="eksterior" required>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Jumlah Lantai <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="lantai" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Sertifikat <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="sertifikat" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tahun Dibuat <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="dibuat" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Id Listing <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="listing" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Listrik <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="listrik" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat Parkir <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="parkir" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sarana Prasarana</label>
                    <textarea id="summernote" name="sarpras" required></textarea>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Video <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="video" required>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Latitude <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="latitude" required>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Longitude <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="longitude" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Foto 1<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto1" required>
                    </div>
                </div>    
                <div class="form-group">
                    <label class="col-form-label">Foto 2<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto2" required>
                    </div>
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 3<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto3" required>
                    </div>
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 4<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto4" required>
                    </div>
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 5<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto5" required>
                    </div>
                </div>   
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control" required>
                        <option value="">--Pilih Status--</option required>
                            <option value='aktif'>Aktif</option>
                            <option value='nonaktif'>Nonaktif</option>
                    </select>
                </div>
                <div style="float:right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>  
            </form>        
        </div>
    </div>
</div>
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