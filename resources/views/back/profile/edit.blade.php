@extends('back.includes.master')

@section('title')
  PROFILE {{Auth()->user()->email}} | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Profile {{Auth()->user()->email}}</h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{Auth()->user()->email}}</li>
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
<form class="form-horizontal" data-toggle="validator" method="POST" action="{{route('profile.update',$profil->id_profile)}}" enctype="multipart/form-data" >
{{ csrf_field() }} {{ method_field('PATCH') }}
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h5>Akun Profile Saya</h5>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Nama Depan</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="namadepan" value="{{$profil->namadepan}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Nama Belakang</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="namabelakang" value="{{$profil->namabelakang}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Handphone / WA</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="number" class="form-control" min="1" name="notelp" value="{{$profil->notelp}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Instagram</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="instagram" value="{{$profil->instagram}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Email</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="email" value="{{Auth()->user()->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Ubah Foto</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="file" class="form-control" name="foto" value="{{$profil->foto}}">
                            </div>
                        </div><br><br><br>
                        <h5>Profile Agensi</h5>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Nama Agensi</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="agensi" value="{{$profil->agensi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Kota</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="kota" value="{{$profil->kota}}">
                            </div>
                        </div><div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Instagram</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="instagramagensi" value="{{$profil->instagramagensi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Website</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="websiteagensi" value="{{$profil->websiteagensi}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Alamat Lengkap</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="alamatagensi" value="{{$profil->alamatagensi}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi Agen</label><br>
                            <textarea id="summernote" name="deskripsi">{{$profil->deskripsi}}</textarea><br>
                         </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" style="text-align:center;">
                        @if($profil->foto == "")
                        <img src="/images/user.PNG" alt="" height="25%">
                        @else
                        <img src="/images{{$profil->foto}}" alt="" height="25%">
                        @endif
                        @if($profil->namadepan == "")
                        <h1>{{Auth()->user()->name}}</h1>
                        @else
                        <h1>{{$profil->namadepan}} {{$profil->namabelakang}}</h1>
                        @endif
                    </div>
                    <div style="float:right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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