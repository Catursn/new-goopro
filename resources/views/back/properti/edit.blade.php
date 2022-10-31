@extends('back.includes.master')

@section('title')
  EDIT {{$properti->judul}}  | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit {{$properti->judul}} </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Properti</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$properti->judul}}</li>
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
            <form class="form-horizontal" data-toggle="validator" method="POST" action="{{route('properti.update',$properti->id_properti)}}" enctype="multipart/form-data" >
            {{ csrf_field() }} {{ method_field('PATCH') }}
            <h5 class="card-header">Edit {{$properti->judul}}</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Judul <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="judul" value="{{$properti->judul}}" required>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="status">Kategori Hunian <span class="text-danger">*</span></label>
                        <select name="hunian" class="form-control" required>
                            <option value="">--Pilih Kategori--</option required>
                            @foreach($hunian as $data)
                                <option value='{{$data->hunian}}' {{(($properti->hunian==$data->hunian)? 'selected' : '')}}>{{$data->hunian}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="status">Kategori Properti <span class="text-danger">*</span></label>
                        <select name="kategori" class="form-control" required>
                            <option value="">--Pilih Kategori--</option required>
                            @foreach($kategori as $data)
                                <option value='{{$data->properti}}' {{(($properti->kategori==$data->properti)? 'selected' : '')}}>{{$data->properti}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="tempat" value="{{$properti->tempat}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Harga <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="harga" value="{{$properti->harga}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat Tidur <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="tidur" value="{{$properti->tidur}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Kamar Mandi <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="mandi" value="{{$properti->mandi}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Informasi <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="informasi" value="{{$properti->informasi}}" required>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Pengembang <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="pengembang" value="{{$properti->pengembang}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Harga Per M <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="perm" value="{{$properti->perm}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Luas Bangunan <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="bangunan" value="{{$properti->bangunan}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Luas Tanah <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="tanah" value="{{$properti->tanah}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Interior <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="interior" value="{{$properti->interior}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Eksterior <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="eksterior" value="{{$properti->eksterior}}" required>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Jumlah Lantai <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="lantai" value="{{$properti->lantai}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Sertifikat <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="sertifikat" value="{{$properti->sertifikat}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tahun Dibuat <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="dibuat" value="{{$properti->dibuat}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Id Listing <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="listing" value="{{$properti->listing}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Listrik <span class="text-danger">*</span></label>
                        <input id="inputText3" type="number" class="form-control" name="listrik" value="{{$properti->listrik}}" required>
                    </div>
                    <div class="form-group col-lg-6 col-sm-12">
                        <label for="inputText3" class="col-form-label">Tempat Parkir <span class="text-danger">*</span></label>
                        <input id="inputText3" type="text" class="form-control" name="parkir" value="{{$properti->parkir}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sarana Prasarana</label>
                    <textarea id="summernote" name="sarpras" required>{{$properti->sarpras}}</textarea>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Video <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="video" value="{{$properti->video}}" required>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Latitude <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="latitude" value="{{$properti->latitude}}" required>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Longitude <span class="text-danger">*</span></label>
                    <input id="inputText3" type="text" class="form-control" name="longitude" value="{{$properti->longitude}}" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Foto 1</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto1">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto1}}" alt="">
                </div>    
                <div class="form-group">
                    <label class="col-form-label">Foto 2</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto2">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto2}}" alt="">
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 3</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto3">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto3}}" alt=""> 
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 4</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto4">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto4}}" alt="">
                </div>   
                <div class="form-group">
                    <label class="col-form-label">Foto 5</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="foto5">
                    </div>
                    <h2>Foto properti Lama</h2>
                    <img src="/images{{$properti->foto5}}" alt="">
                </div>   
                <div class="form-group">
                    <label for="status">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control" required>
                        <option value="">--Pilih Status--</option required>
                            <option value="aktif" {{(($properti->status=='aktif')? 'selected' : '')}}>Aktif</option>
                            <option value="nonaktif" {{(($properti->status=='nonaktif')? 'selected' : '')}}>Nonaktif</option>
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