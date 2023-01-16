@extends('back.includes.master')

@section('title')
  Admin
@endsection

@section('main-content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Dashboard </h2>
            <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Halaman Pribadi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                            <h5 class="card-header">Selamat datang kembali, ANTO SOLIHIN </h5>
                            <div class="card-body">
                              <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <!-- ============================================================== -->
                                    <!-- pie chart  -->
                                    <!-- ============================================================== -->
                                    <div class="col-12">
                                        <div class="card">
                                            <h5 class="card-header">Jumlah properti berdasarkan kategori hunian <br><span style="font-size:12px; font-weight:300;">Menampilkan jumlah semua properti anda menurut kategori hunian</span></h5>
                                            <div class="card-body">
                                                <div id="piechart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end pie chart  -->
                                    <!-- ============================================================== -->

                                    <!-- ============================================================== -->
                                    <!-- basic table  -->
                                    <!-- ============================================================== -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Performasi Listing Properti Dijual <br><span style="font-size:12px; font-weight:300;">Menampilkan top 5 listing Anda berdasarkan jumlah views.</span></h5>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered first">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Properti</th>
                                                                <th>Dilihat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>   
                                                            <?php
                                                                $no = 1; 
                                                            ?>
                                                            @foreach($dijual as $list)
                                                            <tr>
                                                                <td>{{$no++}}</td>
                                                                <td>{{$list->judul}}</td>
                                                                <td>{{$list->views}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Properti</th>
                                                                <th>Dilihat</th>
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
                                    <!-- ============================================================== -->
                                    <!-- basic table  -->
                                    <!-- ============================================================== -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Performasi Listing Properti Disewakan<br><span style="font-size:12px; font-weight:300;">Menampilkan top 5 listing Anda berdasarkan jumlah views.</span></h5>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered first">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Properti</th>
                                                                <th>Dilihat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>   
                                                            <?php
                                                                $no = 1; 
                                                            ?>
                                                            @foreach($disewakan as $list)
                                                            <tr>
                                                                <td>{{$no++}}</td>
                                                                <td>{{$list->judul}}</td>
                                                                <td>{{$list->views}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Properti</th>
                                                                <th>Dilihat</th>
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
                                    <!-- ============================================================== -->
                                    <!-- basic table  -->
                                    <!-- ============================================================== -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Performasi Listing Properti Properti Baru<br><span style="font-size:12px; font-weight:300;">Menampilkan top 5 listing Anda berdasarkan jumlah views.</span></h5>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered first">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Properti</th>
                                                                <th>Dilihat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>   
                                                            <?php
                                                                $no = 1; 
                                                            ?>
                                                            @foreach($baru as $list)
                                                            <tr>
                                                                <td>{{$no++}}</td>
                                                                <td>{{$list->judul}}</td>
                                                                <td>{{$list->views}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Properti</th>
                                                                <th>Dilihat</th>
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
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body" style="background-color:#FFC700; padding:10%; text-align:center;">
                                                <h3 class="card-title" style="color:white;">Tingkatkan Tampilan dengan Premium Listing! Anda memiliki Halaman Amazing!</h3>
                                                <a href="#" class="btn btn-success" style="padding-left:10%; padding-right:10%; margin-top:10%; margin-bottom:10px; border:2px solid black;">Tertarik !</a>
                                            </div>
                                            <div class="card-body" style="background-color:#FDFFE1; padding:10%;">
                                                <h4 class="card-title">Dapatkan lebih banyak leads dengan tips berikut:</h4>
                                                <ul style="color:black;">
                                                    <li>Tambahkan lokasi Area ke listing Anda.</li>
                                                    <li>Selalu gunakan gambar yang berkualitas tinggi.Selalu gunakan gambar yang berkualitas tinggi.</li>
                                                    <li>Unggah logo agensi dan jadilah mitra yang tersertifikasi.</li>
                                                </ul>
                                                <div style="margin:10%; text-align:center; color:black;">
                                                    <p>Ingin mendapatkan solusi halaman Premium dari Goopro ? <a href="#" style="color:#2ec551 !important;">Klik bantuan</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body" style="background-color:#FFC700; padding:10%; text-align:center;">
                                                <h3 class="card-title" style="color:white;">Tingkatkan Performasi Listing Properti Anda dengan memperbaharui Listing properti Anda</h3>
                                                <a href="#" class="btn btn-success" style="padding-left:10%; padding-right:10%; margin-top:10%; margin-bottom:10px; border:2px solid black;">Perbaharui Listing</a>
                                            </div>
                                            <div class="card-body" style="background-color:#FDFFE1; padding:10%;">
                                                <h4 class="card-title">Listing yang berkualitas tinggi lebih banyak dilihat dan mendapat leads!</h4>
                                                <ul style="color:black;">
                                                    <li>Lengkapi info listing untuk tampil pada filter pencarian.</li>
                                                    <li>Gunakan kata kunci yang umum pada judul.</li>
                                                    <li>Masukkan harga terbaik untuk listing Anda.</li>
                                                </ul>
                                                <div style="margin:10%; text-align:center; color:black;">
                                                    <p>Ingin mendapatkan solusi dari Goopro ? <a href="#" style="color:#2ec551 !important;">Klik bantuan</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@push('scripts')
<script src="/backend/charts/c3charts/c3.min.js"></script>
<script src="/backend/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="/backend/charts/c3charts/C3chartjs.js"></script>
<script>
    (function(window, document, $, undefined) {
    "use strict";
    $(function() {
        if ($('#piechart').length) {
            var chart = c3.generate({
                bindto: "#piechart",
                data: {
                    columns: [
                        @php
                        foreach($coba as $list){
                            echo "['".$list['hunian']."', ".$list['count']."], ";
                        }
                        @endphp 
                    ],
                    type: 'pie',

                    colors: {
                         data1: '#486ed9',
                        data2: '#ff407b'


                    }
                },
                pie: {
                    label: {
                        format: function(value, ratio, id) {
                            return d3.format('')(value);
                        }
                    }
                }
            });
        }
    });

})(window, document, window.jQuery);
</script>
@endpush