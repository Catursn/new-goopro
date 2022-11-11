@extends('back.includes.master')

@section('title')
  EDIT {{$testimoni->nama}} TESTIMONI | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit {{$testimoni->nama}} Testimoni </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Testimoni</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Add</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$testimoni->nama}}</li>
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
        <form class="form-horizontal" data-toggle="validator" method="POST" action="{{route('testimoni.update',$testimoni->id_testimoni)}}" enctype="multipart/form-data" >
            {{ csrf_field() }} {{ method_field('PATCH') }}
            <h5 class="card-header">Add Testimoni</h5>
            <div class="card-body">
                <div class="form-group">
                    <label class="col-form-label">Foto</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto">
                    </div>
                </div>    
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Nama <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="nama" value="{{$testimoni->nama}}" required>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Umur <span class="text-danger">*</span></label>
                    <input id="inputText3" type="number" class="form-control" name="umur" value="{{$testimoni->umur}}" required>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Kota <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="kota" value="{{$testimoni->kota}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Testimoni</label>
                    <textarea id="summernote" name="testimoni" required>{{$testimoni->testimoni}}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control" required>
                        <option value="">--Pilih Status--</option required>
                            <option value='aktif' {{(($testimoni->status=='aktif')? 'selected' : '')}}>Aktif</option>
                            <option value='nonaktif' {{(($testimoni->status=='nonaktif')? 'selected' : '')}}>Nonaktif</option>
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
@endpush