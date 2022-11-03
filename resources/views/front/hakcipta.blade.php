@extends('front.includes.master')

@section('title')
  HAK CIPTA | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Hak Cipta</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="terms">
        <?php echo $hakcipta->hakcipta; ?>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush