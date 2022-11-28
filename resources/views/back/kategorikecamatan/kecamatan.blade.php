@extends('back.includes.master')

@section('title')
  KATEGORI KECAMATAN | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">KATEGORI KECAMATAN </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kategori Kecamatan</a></li>
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
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Kategori Kecamatan Table <span class="cardright" style="float:right"><a href="{{route('kategorikecamatan.create')}}">New</a></span></h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Kota</th>
                                                <th>Kecamatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>   
                                            @foreach($kecamatan as $list)
                                            <tr>
                                                <td>{{$list->kota}}</td>
                                                <td>{{$list->kecamatan}}</td>
                                                <td>
                                                    <div class="btn-group ml-auto">
                                                        <a href="{{route('kategorikecamatan.edit',$list->id_kecamatan)}}" class="btn btn-sm btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                        <form method="POST" action="{{route('kategorikecamatan.destroy',$list->id_kecamatan)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger" data-id={{$list->id_kecamatan}} data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kota</th>
                                                <th>Kecamatan</th>
                                                <th>Aksi</th>
                                            </tr>                                       
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
    </div>
</div>
@endsection
@push('styles')
<link rel="stylesheet" type="text/css" href="/backend/datatables/css/dataTables.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="/backend/datatables/css/buttons.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="/backend/datatables/css/select.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="/backend/datatables/css/fixedHeader.bootstrap4.css">
@endpush
@push('scripts')
<script src="/backend/js/jquery.dataTables.min.js"></script>
<script src="/backend/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="/backend/js/dataTables.buttons.min.js"></script>
<script src="/backend/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="/backend/datatables/js/data-table.js"></script>
<script src="/backend/datatables/js/buttons.html5.min.js"></script>
<script src="/backend/datatables/js/buttons.print.min.js"></script>
<script src="/backend/datatables/js/buttons.colVis.min.js"></script>
<script src="/backend/datatables/js/dataTables.rowGroup.min.js"></script>
<script src="/backend/datatables/js/dataTables.select.min.js"></script>
<script src="/backend/datatables/js/dataTables.fixedHeader.min.js"></script>
@endpush