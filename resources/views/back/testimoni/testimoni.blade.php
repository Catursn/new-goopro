@extends('back.includes.master')

@section('title')
  TESTIMONI | DASHBOARD GOOPRO
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Testimoni </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Testimoni</a></li>
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
                            <h5 class="card-header">Testimoni Table <span class="cardright" style="float:right"><a href="{{route('testimoni.create')}}">New</a></span></h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Umur</th>
                                                <th>Kota</th>
                                                <th>Testimoni</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>   
                                            @foreach($testimoni as $list)
                                            <tr>
                                                <td><img src="/images{{$list->foto}}" alt="" style="width:200px"></td>
                                                <td>{{$list->nama}}</td>
                                                <td>{{$list->umur}}</td>
                                                <td>{{$list->kota}}</td>
                                                <td><?php echo $list->testimoni; ?></td>
                                                <td>{{$list->status}}</td>
                                                <td>
                                                    <div class="btn-group ml-auto">
                                                        <a href="{{route('testimoni.edit',$list->id_testimoni)}}" class="btn btn-sm btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                                                        <form method="POST" action="{{route('testimoni.destroy',$list->id_testimoni)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-dangers" data-id={{$list->id_testimoni}} data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="far fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Umur</th>
                                                <th>Kota</th>
                                                <th>Testimoni</th>
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