@extends('back.includes.master')

@section('title')
  EDIT {{$kota->kota}} | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Edit {{$kota->kota}} </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kota</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$kota->kota}}</li>
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
        <form class="form-horizontal" data-toggle="validator" method="POST" action="{{route('kategorikota.update',$kota->id_kota)}}" enctype="multipart/form-data" >
            {{ csrf_field() }} {{ method_field('PATCH') }}
            <h5 class="card-header">Edit kategori kota</h5>
            <div class="card-body">
                <div class="form-group">
                    <label for="provinsi_id">Provinsi <span class="text-danger">*</span></label>
                    <select name="provinsi_id" class="form-control" required>
                        <option value="">--Pilih Provinsi--</option required>
                        @foreach($provinsi as $list)
                            <option value='{{$list->id_provinsi}}' {{(($kota->provinsi_id==$list->id_provinsi)? 'selected' : '')}}>{{$list->provinsi}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Kota</label>
                    <input id="inputText3" type="text" class="form-control" name="kota" value="{{$kota->kota}}" required>
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