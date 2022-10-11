@extends('front.includes.master')
@section('main-content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="wadah">
                        <div >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/banner2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="wadah">
                        <div >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="images/banner3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="wadah">
                        <div >
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="#">
                                        <select name="coba" id="coba">
                                            <option value="#">satu</option>
                                            <option value="#">dua</option>
                                        </select>
                                        <input type="text" placeholder="cobaa">
                                        <button type="submit" class="subb">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="wadah">
        <div class="place">
            <div class="title">
                <h3>Properti Perwilayah</h3>
            </div>
            <div class="row">
                <div class="col-25" style="background-image: url('images/bandung.png')">
                    <a href="#">Kota Bandung <br>>Properti Detail</a>
                </div>
                <div class="col-25" style="background-image: url('images/kabbandung.png')">
                    <a href="#">Kabupaten Bandung <br>>Properti Detail</a>
                </div>
                <div class="col-25" style="background-image: url('images/cimahi.png')">
                    <a href="#">Cimahi <br>>Properti Detail</a>
                </div>
                <div class="col-25" style="background-image: url('images/jakarta.png')">
                    <a href="#">Jakarta <br>>Properti Detail</a>
                </div>
            </div>
        </div>
        <div class="place">
            <div class="title">
                <h3>Proyek Terbaru</h3>
            </div>
            <div class="row">
                <div class="col-25">
                    <img src="images/griya.png" alt="">
                    <div class="caption">
                        <a href="#">Griya Buana <br>>Bandung</a>
                    </div>
                </div>
                <div class="col-25">
                    <img src="images/taman.png" alt="">
                    <div class="caption">
                        <a href="#">Taman Fidaus Asri <br>>Bandung</a>
                    </div>
                </div>
                <div class="col-25">
                    <img src="images/green.png" alt="">
                    <div class="caption">
                        <a href="#">Cimahi Green Park <br>>Cimahi</a>
                    </div>
                </div>
                <div class="col-25">
                    <img src="images/villa.png" alt="">
                    <div class="caption">
                        <a href="#">Villa Perdana Kusuma Permai <br>>Bogor</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="properti">
            <div class="title">
                <h3>Kategori Properti</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="images/apartemen.png" alt="">
                    <p>Apartemen</p>
                </div>
                <div class="col-12">
                    <img src="images/pabrik.png" alt="">
                    <p>Pabrik</p>
                </div>
                <div class="col-12">
                    <img src="images/rumah.png" alt="">
                    <p>Rumah</p>
                </div>
                <div class="col-12">
                    <img src="images/tanah.png" alt="">
                    <p>Tanah</p>
                </div>
                <div class="col-12">
                    <img src="images/gedung.png" alt="">
                    <p>Gedung Perkantoran</p>
                </div>
                <div class="col-12">
                    <img src="images/ruko.png" alt="">
                    <p>Ruko</p>
                </div>
                <div class="col-12">
                    <img src="images/gudang.png" alt="">
                    <p>Gudang</p>
                </div>
                <div class="col-12">
                    <img src="images/rukan.png" alt="">
                    <p>Rukan</p>
                </div>
            </div>
        </div>
        <div class="cari">
            <div class="title">
                <h3>Cari Properti Berdasarkan Harta</h3>
            </div>
            <div class="row">
                <div class="col-15">
                    <button><= 500 juta</button>
                </div>
                <div class="col-15">
                    <button class="active">500 juta - 1 miliar</button>
                </div>
                <div class="col-15">
                    <button>1 miliar - 1.5 miliar</button>
                </div>
                <div class="col-15">
                    <button>1.5 miliar - 2 miliar`</button>
                </div>
                <div class="col-15">
                    <button>2 miliar - 3 miliar</button>
                </div>
                <div class="col-15">
                    <button>>= 3 miliar</button>
                </div>
            </div>
        </div>
        <div class="fitur">
            <div class="row">
                <div class="col-30" style="background-image:url('images/kpr.png')">
                    <a href="#">Hitung Sekarang</a>
                </div>
                <div class="col-30" style="background-image:url('images/jual.png')">
                    <a href="#">Jual Sekarang</a>
                </div>
                <div class="col-30" style="background-image:url('images/properti.png')">
                    <a href="#">Ajukan Pertanyaan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hunian">
        <div class="title">
            <h3>PROPERTI HUNIAN ASRI</h3>
        </div>
        <div class="row">
            <div class="col-30">
                <img src="images/hunian1.png" alt="">
                <div class="caption">
                    <h5>Tipe Properti : Rumah</h5>
                    <h6>Tempat Tidur : 4, Kamar Mandi : 1, Lantai : 2, Bangunan : 50, Lahan : 100</h6>
                    <h6>Rp 1.650.000.000,00</h6>
                </div>
            </div>
            <div class="col-30">
                <img src="images/hunian2.png" alt="">
                <div class="caption">
                    <h5>Tipe Properti : Rumah</h5>
                    <h6>Tempat Tidur : 2, Kamar Mandi : 1, Lantai : 2, Bangunan : 50, Lahan : 100</h6>
                    <h6>Rp 350.000.000,00</h6>
                </div>
            </div>
            <div class="col-30">
                <img src="images/hunian3.png" alt="">
                <div class="caption">
                    <h5>Tipe Properti : Apartemen</h5>
                    <h6>Tempat Tidur : 1, Kamar Mandi : 1, Lantai : 2, Bangunan : 50</h6>
                    <h6>Rp 550.000.000,00</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="wadah">
        <div class="berita">
            <h3>Berita Properti Terbaru</h3>
            <div class="row">
                <div class="col-30">
                    <img src="images/pemerintah.png" alt="">
                    <h4>Pemerintah Menurunkan Suku Bunga Properti</h4>
                    <h5>18 Desember 2021</h5>
                    <a href="#">>Baca Selengkapnya</a>
                </div>
                <div class="col-30">
                    <img src="images/apa.png" alt="">
                    <h4>Apa & Kenapa Harus Investasi Properti</h4>
                    <h5>21 Desember 2021</h5>
                    <a href="#">>Baca Selengkapnya</a>
                </div>
                <div class="col-30">
                    <img src="images/kotabaru.png" alt="">
                    <h4>Kota Baru Parahyangan menggelar JABAR Properti Expo 2022</h4>
                    <h5>22 Desember 2021</h5>
                    <a href="#">>Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="kenapa">
            <h3>Kenapa Beli Rumah di Goopro?</h3>
            <div class="row">
                <div class="col-70">
                    <div class="text">
                        <p>Baik</p>
                    </div>
                </div>
                <div class="col-70">
                    <div class="text">
                        <p>Jasa Profesional</p>
                    </div>
                </div>
                <div class="col-70">
                    <div class="text">
                        <p>Siap Huni</p>
                    </div>
                </div>
                <div class="col-70">
                    <div class="text">
                        <p>Amanah</p>
                    </div>
                </div>
                <div class="col-70">
                    <div class="text">
                        <p>Siap KPR</p>
                    </div>
                </div>
                <div class="col-70">
                    <div class="text">
                        <p>100% Aman</p>
                    </div>
                </div>
                <div class="col-70">
                    <div class="text">
                        <p>Pasti dan Jelas</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cara">
            <h3>Cara Beli Properti di Goopro? Mudah</h3>
            <div class="center">
                <div class="row">
                    <div class="col-30" style="background-color: #FFC700;">
                        <div class="text">
                            <p>1. <br> Cari</p>
                        </div>
                    </div>
                    <div class="col-30" style="background-color: #158FFF;">
                        <div class="text">
                            <p>2. <br> Lihat Properti</p>
                        </div>
                    </div>
                    <div class="col-30" style="background-color: #14A807;">
                        <div class="text">
                            <p>3. <br> Deal Properti</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimoni">
            <h3>Testimoni atas kepercayaan selama ini....</h3>
            <div class="row">
                <div class="col-30">
                    <div class="row">
                        <div class="col-40">
                            <img src="images/testi1.png" alt="">
                        </div>
                        <div class="col-60">
                            <h4>Andrianti Sobirin</h4>
                            <h4>39 Tahun-Bandung</h4>
                            <h5>Gak ribet, cepat gak pake neko-neko beberapa hari saja langsung huni apartemennya. Thx!</h5>
                        </div>
                    </div>
                </div>
                <div class="col-30">
                    <div class="row">
                        <div class="col-40">
                            <img src="images/testi2.png" alt="">
                        </div>
                        <div class="col-60">
                            <h4>Budiyana Setiawan</h4>
                            <h4>28 Tahun-Bandung</h4>
                            <h5>Nikah muda bukan halangan untuk punya rumah impian.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-30">
                    <div class="row">
                        <div class="col-40">
                            <img src="images/testi3.png" alt="">
                        </div>
                        <div class="col-60">
                            <h4>Dewi Setiawati</h4>
                            <h4>42 Tahun-Bandung</h4>
                            <h5>Buru-buru jual rumah karena butuh duit, untungnya besok langsung cair</h5>
                        </div>
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