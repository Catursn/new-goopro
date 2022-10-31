@extends('back.includes.master')

@section('title')
  GANTI PASSWORD | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Ganti Password </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Setting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
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
        <form method="POST"action="/admin/{{$user->id}}/resetpassword" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
            <h5 class="card-header">Ganti Password</h5>
            <div class="card-body">
                <div class="form-group">
                    <label class="col-form-label">Password Lama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="passwordlama">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Password Baru</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Konfirmasi Password Baru</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="password_confirmation">
                    </div>
                </div>
                <div style="float:right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <!-- <a class="btn btn-primary">Submit</a> -->
                </div>
            </div> 
        </form>        
        </div>
    </div>
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush