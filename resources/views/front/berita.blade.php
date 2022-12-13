@extends('front.includes.master')

@section('title')
<?php echo strtoupper($berita->judul); ?>  | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#">Berita ></a>
        <a href="#" class="active">{{$berita->judul}}</a>
    </div>
    <div class="wadah">
        <div class="row">
            <div class="pagesberita">
                <img src="/images{{$berita->foto}}" alt="">
                <h1>{{$berita->judul}}</h1>
                <h6>Tanggal &nbsp;&nbsp;: {{ tanggal_indonesia($berita->tanggal, false) }}</h6>
                <h6>Oleh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$berita->author}}</h6>
                <h6>Kategori &nbsp;: {{$berita->kategori}}</h6>
                <br>
                <?php echo $berita->deskripsi; ?>
                <div class="beritaterkait">
                    <h2>BERITA TERKAIT LAINNYA ...</h2>
                    <div class="row">
                        @foreach($terkait as $ter)
                        <div class="col-50">
                            <img src="/images{{$ter->foto}}" alt="">
                            <h5>{{$ter->judul}}</h5>
                            <p>{{ tanggal_indonesia($ter->tanggal, false) }}</p>
                            <a href="{{$ter->slug}}">> Baca Selengkapnya</a>
                        </div>
                        @endforeach
                        <!-- <div class="col-50">
                            <img src="/images/berita2.png" alt="">
                            <h5>Apa & Kenapa Harus Investasi Properti?</h5>
                            <p>18 Desember 2022</p>
                            <a href="#">> Baca Selengkapnya</a>
                        </div>
                        <div class="col-50">
                            <img src="/images/berita3.png" alt="">
                            <h5>Kota Baru Parahyangan menggelar JABAR Property Expo 2022</h5>
                            <p>18 Desember 2022</p>
                            <a href="#">> Baca Selengkapnya</a>
                        </div>
                        <div class="col-50">
                            <img src="/images/berita4.png" alt="">
                            <h5>Kota Baru Parahyangan menggelar JABAR Property Expo 2022</h5>
                            <p>18 Desember 2022</p>
                            <a href="#">> Baca Selengkapnya</a>
                        </div> -->
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
                        <!-- <div class="row list">
                            <img src="/images/terkini1.png" alt="">
                            <div class="text">
                                <h4>Kebutuhan Rumah Tapak Di Penyangga Jakarta Terus Meningkat </h4>
                                <p>10 Oktober 2022</p>
                            </div>
                        </div>
                        <div class="row list">
                            <img src="/images/terkini2.png" alt="">
                            <div class="text">
                                <h4>Ratusan Juta Harga per Rumah Di Indonesia mendapat diskon special </h4>
                                <p>7 Oktober 2022</p>
                            </div>
                        </div>
                        <div class="row list">
                            <img src="/images/terkini3.png" alt="">
                            <div class="text">
                                <h4>Jual dan jual Ribuan Rumah Saat ini. Segera! </h4>
                                <p>4 Oktober 2022</p>
                            </div>
                        </div>
                        <div class="row list">
                            <img src="/images/terkini4.png" alt="">
                            <div class="text">
                                <h4>Ribuan Genereasi Muda untuk beli Rumah Baru </h4>
                                <p>2 Oktober 2022</p>
                            </div>
                        </div>
                        <div class="row list">
                            <img src="/images/terkini5.png" alt="">
                            <div class="text">
                                <h4>Ribuan Rumah Di Sulawesi Tengah Dapat Program Bedah Rumah Permanen</h4>
                                <p>1 Oktober 2022</p>
                            </div>
                        </div> -->
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
                        <!-- <div class="list">
                            <h4>Kebutuhan Rumah Tapak Di Penyangga Jakarta Terus Meningkat </h4>
                            <p>10 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Ratusan Juta Harga per Rumah Di Indonesia mendapat diskon special</h4>
                            <p>7 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Puluhan Rumah Di Jawa Barat Dapat Program Terbaik </h4>
                            <p>6 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Ribuan Rumah Di Sulawesi Tengah Dapat Program</h4>
                            <p>4 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Mau Apartemen Laku, Ini Strateginya  </h4>
                            <p>3 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Ribuan Genereasi Muda untuk beli Rumah Baru </h4>
                            <p>3 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Mau Apartemen laris manis, Ini cara jitunya!  </h4>
                            <p>2 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Ribuan Genereasi Muda menjadi Developer dgn modal nol. </h4>
                            <p>2 Oktober 2022</p>
                        </div>
                        <div class="list">
                            <h4>Mau Memulai Bisnis Properti, Mulai Aja!  </h4>
                            <p>1 Oktober 2022</p>
                        </div> -->
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
                        <!-- <div class="row list">
                            <h4>Berita & Pasar Properti</h4>
                        </div>
                        <div class="row list">
                            <h4>Renovasi Properti</h4>
                        </div>
                        <div class="row list">
                            <h4>Informasi Keagenan</h4>
                        </div>
                        <div class="row list">
                            <h4>Tip & Trik Properti</h4>
                        </div>
                        <div class="row list">
                            <h4>Kisah Sukses Agen</h4>
                        </div> -->
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