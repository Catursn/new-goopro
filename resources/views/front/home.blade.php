@extends('front.includes.master')

@section('title')
  GOOPRO
@endsection

@section('main-content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
            @foreach ($slider as $key=>$ban)
              <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{(($key==0)? 'active' : '')}}"></li>
            @endforeach   
        </ol>
        <div class="carousel-inner">
            @foreach ($slider as $key=>$ban)
              <div class="carousel-item {{(($key==0)? 'active' : '')}}">
                <img class="d-block w-100" src="images{{$ban->slider}}">
                <div class="carousel-caption d-none d-md-block">
                    <div class="wadah">
                        
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="carousel-item active">
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
            </div> -->
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
        <div class="searchbar">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dijual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Disewakan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="properti-tab" data-toggle="tab" href="#properti" role="tab" aria-controls="properti" aria-selected="false">Properti Baru</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form method="GEt"action="/properti/cari" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('GET') }}
                        <input type="text" name="prop" value="Dijual" hidden>
                        <select name="hunian" id="hunian">
                            @foreach($hunian as $hun)
                            <option value="{{$hun->hunian}}">{{$hun->hunian}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="cari" placeholder="input text here">
                        <button type="submit" class="subb">Search</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form method="GEt"action="/properti/cari" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('GET') }}
                        <input type="text" name="prop" value="Disewakan" hidden>
                        <select name="hunian" id="hunian">
                            @foreach($hunian as $hun)
                            <option value="{{$hun->hunian}}">{{$hun->hunian}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="cari" placeholder="input text here">
                        <button type="submit" class="subb">Search</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="properti" role="tabpanel" aria-labelledby="properti-tab">
                    <form method="GEt"action="/properti/cari" enctype="multipart/form-data">
                        {{ csrf_field() }} {{ method_field('GET') }}
                        <input type="text" name="prop" value="Properti Baru" hidden>
                        <select name="hunian" id="hunian">
                            @foreach($hunian as $hun)
                            <option value="{{$hun->hunian}}">{{$hun->hunian}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="cari" placeholder="input text here">
                        <button type="submit" class="subb">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="properti">
            <div class="title">
                <h3>Kategori Properti</h3>
            </div>
            <div class="row">
                @foreach($hunian as $hun)
                <div class="col-12">
                    <a href="/properti/list/{{$hun->hunian}}" ><img src="/images{{$hun->icon}}" alt=""></a>
                    <p>{{$hun->hunian}}</p>
                </div>
                @endforeach
            </div>
        </div> 
    </div>
    <div class="hunian">
        <div class="title">
            <h3>PROPERTI HUNIAN ASRI</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide multi-item-carousel" id="theCarousel">
                    <div class="carousel-inner">
                    @foreach($properti as $key=>$pro)
                        <div class="item {{(($key==0)? 'active' : '')}}">
                            <div class="col-xs-4">
                                <a href="/properti/detail/{{$pro->slug}}"><img src="images{{$pro->foto1}}" alt=""></a>
                                <div class="caption">
                                    <h5>Tipe Properti : {{$pro->hunian}}</h5>
                                    <h6>Tempat Tidur : {{$pro->tidur}}, Kamar Mandi : {{$pro->mandi}}, Lantai : {{$pro->lantai}}, Bangunan : {{$pro->bangunan}}, Lahan : {{$pro->tanah}}</h6>
                                    <h6>Rp {{ format_uang($pro->harga) }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="wadah">
        <div class="place">
            <div class="title">
                <h3>Properti Perwilayah</h3>
            </div>
            <div class="row">
                <div class="col-25">
                    <img src="images/bandung.png" alt="">
                    <div class="caption">
                        <a href="/properti/wilayah/3273">Kota Bandung <br>>Properti Detail</a>
                    </div>
                </div>
                <div class="col-25">
                    <img src="images/kabbandung.png" alt="">
                    <div class="caption">
                        <a href="/properti/wilayah/3204">Kabupaten Bandung <br>>Properti Detail</a>
                    </div>
                </div>
                <div class="col-25">
                    <img src="images/cimahi.png" alt="">
                    <div class="caption">
                        <a href="/properti/wilayah/3277">Cimahi <br>>Properti Detail</a>
                    </div>
                </div>
                <div class="col-25">
                    <img src="images/jakarta.png" alt="">
                    <div class="caption">
                        <a href="/properti/wilayah/3173">Jakarta Pusat<br>>Properti Detail</a>
                    </div>
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
        <div class="cari">
            <div class="title">
                <h3>Cari Properti Berdasarkan Harga</h3>
            </div>
            <div class="row">
                <div class="col-15">
                    <a href="/properti/harga/0/sampai/500000000"><button><= 500 juta</button></a>
                </div>
                <div class="col-15">
                    <a href="/properti/harga/500000000/sampai/1000000000"><button>500 juta - 1 miliar</button></a>
                </div>
                <div class="col-15">
                    <a href="/properti/harga/1000000000/sampai/1500000000"><button>1 miliar - 1.5 miliar</button></a>
                </div>
                <div class="col-15">
                    <a href="/properti/harga/1500000000/sampai/2000000000"><button>1.5 miliar - 2 miliar`</button></a>
                </div>
                <div class="col-15">
                    <a href="/properti/harga/2000000000/sampai/3000000000"><button>2 miliar - 3 miliar</button></a>
                </div>
                <div class="col-15">
                    <a href="/properti/harga/3000000000/sampai/9999000000000"><button>>= 3 miliar</button></a>
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
    <div class="wadah">
        <div class="berita">
            <h3>Berita Properti Terbaru</h3>
            <div class="row">
                @foreach($berita as $ber)
                <div class="col-30">
                    <img src="images{{$ber->foto}}" alt="">
                    <h4>{{$ber->judul}}</h4>
                    <h5>{{ tanggal_indonesia($ber->tanggal, false) }}</h5>
                    <a href="{{$ber->slug}}">>Baca Selengkapnya</a>
                </div>
                @endforeach
                <!-- <div class="col-30">
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
                </div> -->
            </div>
        </div>
        <!-- <div class="kenapa">
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
        </div> -->
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
                            <p>2. <br> Lihat</p>
                        </div>
                    </div>
                    <div class="col-30" style="background-color: #eb9834;">
                        <div class="text">
                            <p>3. <br> Negosiasi</p>
                        </div>
                    </div>
                    <div class="col-30" style="background-color: #14A807;">
                        <div class="text">
                            <p>4. <br> Deal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="testimoni">
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
        </div> -->
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
<script>
    // Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
</script>
@endpush