@extends('front.includes.master')

@section('title')
  CARA KERJA | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Cara Kerja</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="terms">
        <?php echo $carakerja->carakerja; ?>
            <div class="carakerja">
                <a href="#">Start Searching Now</a>
            </div>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush