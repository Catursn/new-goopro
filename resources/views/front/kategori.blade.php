@extends('front.includes.master')

@section('title')
{{$kat}} | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#">Berita ></a>
        <a href="#">Kategori ></a>
        <a href="#" class="active">{{$kat}}</a>
    </div>
    <div class="wadah">
        <div class="row">
            <div class="kategoriberita">
                <h3>Berita Properti Terbaru</h3>
                <div class="row">
                    @foreach($berita as $ber)
                    <div class="col-30">
                        <img src="/images{{$ber->foto}}" alt="">
                        <h4>{{$ber->judul}}</h4>
                        <h5>{{ tanggal_indonesia($ber->tanggal, false) }}</h5>
                        <a href="{{$ber->slug}}">>Baca Selengkapnya</a>
                    </div>
                    @endforeach
                </div> 
                <div class="paginationn">
                    <div class="row">
                        <div class="col-40">
                            <h4>Menampilkan {{ $berita->firstItem() }}-{{ $berita->lastItem() }} properti</h4>
                        </div>
                        <div class="col-60 right">
                            <a href="?page=1"><<</a>
                            <a href="{{ $berita->previousPageUrl() }}"><</a>
                            <a href="?page{{ $berita->currentPage() }}" class="active">{{ $berita->currentPage() }}</a>
                            <a href="{{ $berita->nextPageUrl() }}">></a>
                            <a href="?page{{ $berita->lastPage() }}">>></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="beritakanan">
                <div class="boxberita">
                    <div class="title">
                        BERITA PROPERTI TERKINI
                    </div>
                    <div class="isi">
                        @foreach($terkini as $ter)
                        <div class="row list">
                            <img src="/images{{$ter->foto}}" alt="">
                            <div class="text">
                                <h4><a href="{{$ter->slug}}">{{$ter->judul}}</a></h4>
                                <p>{{ tanggal_indonesia($ter->tanggal, false) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="boxberita">
                    <div class="title">
                        BERITA PROPERTI POPULER
                    </div>
                    <div class="isi">
                        @foreach($populer as $pop)
                        <div class="list">
                            <h4><a href="{{$pop->slug}}">{{$pop->judul}}</a></h4>
                            <p>{{ tanggal_indonesia($pop->tanggal, false) }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="boxberita">
                    <div class="title">
                        KATEGORI BERITA PROPERTI
                    </div>
                    <div class="isi">
                        @foreach($kategori as $kat)
                        <div class="row list">
                            <h4><a href="/berita/kategori/{{$kat->kategori}}">{{$kat->kategori}}</a></h4>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush