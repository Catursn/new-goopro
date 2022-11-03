@extends('back.includes.master')

@section('title')
  ADD BERITA | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Add Berita </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Berita</a></li>
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
        <form method="POST"action="{{route('berita.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
            <h5 class="card-header">Add Berita</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Judul <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="judul" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Foto <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                </div>    
                <div class="form-group">
                    <label>Tanggal <small class="text-muted">DD MMMM YYYY</small> <span class="text-danger">*</span></label>
                    <input type="date" class="tm form-control date-inputmask" data-date-format="DD MMMM YYYY" id="date-mask" placeholder="" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea id="summernote" name="deskripsi" required></textarea>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Author <span class="text-danger">*</span><span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="author" value="{{Auth()->user()->name}}" readonly>
                </div>
                <div class="form-group">
                    <label for="status">Kategori <span class="text-danger">*</span></label>
                    <select name="kategori" class="form-control" required>
                        <option value="">--Pilih Kategori--</option required>
                        @foreach($kategori as $data)
                            <option value='{{$data->kategori}}'>{{$data->kategori}}</option>
                        @endforeach
                    </select>
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
    height: 500,
  });
});
</script>
<script>
    
    $(".tm").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
    }).trigger("change")

</script>
@endpush