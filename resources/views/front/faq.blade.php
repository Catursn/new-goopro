@extends('front.includes.master')

@section('title')
  FAQ | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">FAQ</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="terms">
        <?php echo $faq->faq; ?>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush