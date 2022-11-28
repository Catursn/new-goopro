@extends('back.includes.master')

@section('title')
  ADD KATEGORI KECAMATAN | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Add Kategori Kecamatan </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kategori Kecamatan</a></li>
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
        <form method="POST"action="{{route('kategorikecamatan.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }} {{ method_field('POST') }}
            <h5 class="card-header">Add Kategori kecamatan</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="kota_id">Kota <span class="text-danger">*</span></label>
                    <select name="kota_id" class="form-control" required>
                        <option value="">--Pilih kota--</option required>
                        @foreach($kota as $list)
                            <option value='{{$list->id_kota}}'>{{$list->kota}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Kecamatan</label>
                    <input id="inputText3" type="text" class="form-control" name="kecamatan" required>
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
@endpush
@push('scripts')
@endpush