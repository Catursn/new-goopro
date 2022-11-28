@extends('back.includes.master')

@section('title')
  PROPERTI AKTIF | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">PROPERTI AKTIF </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Properti Aktif</a></li>
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
                            <h5 class="card-header">Properti Aktif Table <span class="cardright" style="float:right"><a href="{{route('properti.create')}}">Iklankan Properti</a></span></h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Foto</th>
                                                <th>Tempat</th>
                                                <th>Kategori Hunian</th>
                                                <th>Kategori Properti</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>   
                                        @foreach($properti as $ber)
                                            <tr>
                                                <td>{{$ber->judul}}</td>
                                                <td><img src="/images{{$ber->foto1}}" alt="" style="width:200px"></td>
                                                <td>{{$ber->tempat}}</td>
                                                <td>{{$ber->hunian}}</td>
                                                <td>{{$ber->kategori}}</td>
                                                <td>{{$ber->status}}</td>
                                                <td>
                                                <div class="btn-group ml-auto">
                                                    @if($ber->status != "terjual")
                                                    <a href="{{route('properti.edit',$ber->id_properti)}}" class="btn btn-sm btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a href="/admin/properti/terjual/{{$ber->id_properti}}" class="btn btn-sm btn-success" title="Terjual"><i class="fas fa-dollar-sign"></i></a>
                                                    @endif
                                                    <form method="POST" action="{{route('properti.destroy',$ber->id_properti)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger" data-id={{$ber->id_properti}} data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                                </td>
                                            </tr>
                                        @endforeach  
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Judul</th>
                                                <th>Foto</th>
                                                <th>Tempat</th>
                                                <th>Kategori Hunian</th>
                                                <th>Kategori Properti</th>
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