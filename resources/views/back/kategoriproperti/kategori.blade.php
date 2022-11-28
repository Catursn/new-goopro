@extends('back.includes.master')

@section('title')
  KATEGORI PROPERTI | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">KATEGORI PROPERTI </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kategori Properti</a></li>
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
                            <h5 class="card-header">Kategori Properti Table <span class="cardright" style="float:right"><a href="{{route('kategoriproperti.create')}}">New</a></span></h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>   
                                            @foreach($kategori as $list)
                                            <tr>
                                                <td>{{$list->properti}}</td>
                                                <td>{{$list->status}}</td>
                                                <td>
                                                    <div class="btn-group ml-auto">
                                                        <a href="{{route('kategoriproperti.edit',$list->id_kategori)}}" class="btn btn-sm btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                        <form method="POST" action="{{route('kategoriproperti.destroy',$list->id_kategori)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-dangers" data-id={{$list->id_kategori}} data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kategori</th>
                                                <th>Status</th>
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