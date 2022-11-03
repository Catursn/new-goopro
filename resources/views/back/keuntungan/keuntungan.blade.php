@extends('back.includes.master')

@section('title')
  KEUNTUNGAN PENGGUNA | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">KEUNTUNGAN PENGGUNA </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Keuntungan Pengguna</a></li>
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
        <div class="row">     
            <div class="col-12">
            <form class="form-horizontal" data-toggle="validator" method="POST" action="{{route('keuntungan.update',$keuntungan->id_keuntungan)}}" enctype="multipart/form-data" >
            {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="card">
                    <div class="card-header">
                        KEUNTUNGAN PENGGUNA
                    </div>
                    <div class="card-body">
                        <textarea id="summernote" name="keuntungan" required>{{$keuntungan->keuntungan}}</textarea>
                    </div>
                    <div class="card-footer p-0">
                        <div class="card-footer-item card-footer-item-bordered">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
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