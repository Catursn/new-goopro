@extends('back.includes.master')

@section('title')
  PROFILE {{$user->email}} | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Profile {{$user->email}}</h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$user->email}}</li>
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
                                <input id="inputText3" type="text" class="form-control" name="namadepan" value="{{$user->namadepan}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Nama Belakang</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="namabelakang" value="{{$user->namabelakang}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Handphone / WA</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="number" class="form-control" min="1" name="notelp" value="{{$user->notelp}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Instagram</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="instagram" value="{{$user->instagram}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Email</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="email" value="{{$user->email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Ubah Foto</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="file" class="form-control" name="foto" value="{{$user->foto}}" readonly>
                            </div>
                        </div><br><br><br>
                        <h5>usere Agensi</h5>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Nama Agensi</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="agensi" value="{{$user->agensi}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Kota</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="kota" value="{{$user->kota}}" readonly>
                            </div>
                        </div><div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Instagram</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="instagramagensi" value="{{$user->instagramagensi}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Website</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="websiteagensi" value="{{$user->websiteagensi}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Alamat Lengkap</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <input id="inputText3" type="text" class="form-control" name="alamatagensi" value="{{$user->alamatagensi}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <label for="inputText3" class="col-form-label">Deskripsi Agen</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                                <?php echo$user->deskripsi; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12" style="text-align:center;">
                        @if($user->foto == "")
                        <img src="/images/user.PNG" alt="" height="25%">
                        @else
                        <img src="/images{{$user->foto}}" alt="" height="25%">
                        @endif
                        @if($user->namadepan == "")
                        <h1>{{$user->email}}</h1>
                        @else
                        <h1>{{$user->namadepan}} {{$user->namabelakang}}</h1>
                        @endif
                    </div>
                </div>  
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