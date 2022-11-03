@extends('front.includes.master')

@section('title')
  KEUNTUNGAN AGEN | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Keuntungan Pengguna</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="terms">
        <?php echo $keuntungan->keuntungan; ?>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush