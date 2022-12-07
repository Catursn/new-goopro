@extends('front.includes.master')

@section('title')
<?php echo strtoupper($properti->judul); ?>  | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#">{{$properti->kategori}} ></a>
        <a href="#">{{$properti->hunian}} ></a>
        <a href="#">{{$kota->kota}} ></a>
        <a href="#" class="active">{{$properti->judul}}</a>
    </div>
    <div class="bigimg">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @if(!empty($properti->foto1))
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @endif
                @if(!empty($properti->foto2))
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                @endif
                @if(!empty($properti->foto3))
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                @endif
                @if(!empty($properti->foto4))
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                @endif
                @if(!empty($properti->foto5))
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                @endif
                    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner">
                @if(!empty($properti->foto1))
                <div class="carousel-item active">
                    <img class="d-block" src="/images{{$properti->foto1}}" alt="First slide">
                </div>
                @endif
                @if(!empty($properti->foto2))
                <div class="carousel-item">
                    <img class="d-block" src="/images{{$properti->foto2}}" alt="Second slide">
                </div>
                @endif
                @if(!empty($properti->foto3))
                <div class="carousel-item">
                    <img class="d-block" src="/images{{$properti->foto3}}" alt="Third slide">
                </div>
                @endif
                @if(!empty($properti->foto4))
                <div class="carousel-item">
                    <img class="d-block" src="/images{{$properti->foto4}}" alt="Third slide">
                </div>
                @endif
                @if(!empty($properti->foto5))
                <div class="carousel-item">
                    <img class="d-block" src="/images{{$properti->foto5}}" alt="Third slide">
                </div>
                @endif
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
        <div class="row">
            <div class="col-60">
                <h3>{{$properti->judul}}</h3>
                <div class="sosmed row">
                    <div>
                        <a href="http://www.facebook.com/share.php?u=https://www.goopro.id/properti/detail/{{$properti->slug}}" target="_blank"><img src="/images/sosmed/facebook.png" alt=""></a>
                    </div>
                    <div>
                        <a href="https://wa.me/?text=https://www.goopro.id/properti/detail/{{$properti->slug}}" target="_blank"><img src="/images/sosmed/whatsapp.png" alt=""></a>
                    </div>
                </div>
                <div class="point">
                    <!-- <p><img src="/images/point.png" alt=""> {{$properti->tempat}}</p> -->
                    <h4>Rp {{ format_uang($properti->harga) }}</h4>
                    <p>{{$properti->informasi}}</p>
                </div>
                <div class="spesifikasi">
                    <h6>Detail Spesifikasi</h6>
                    <div class="row">
                        @if($properti->hunian == "Rumah")
                        <div class="col-50">
                            <h5>Tipe Properti</h5>
                            <h4>{{$properti->hunian}}</h4>
                            <h5>Lantai</h5>
                            <h4>{{$properti->lantai}}</h4>
                            <h5>Listrik</h5>
                            <h4>{{$properti->listrik}} watt</h4>
                            <h5>ID Listing</h5>
                            <h4>{{$properti->listing}}</h4>
                            <h5>Kamar Tidur</h5>
                            <h4>{{$properti->tidur}}</h4>
                            <h5>Tempat Parkir</h5>
                            <h4>{{$properti->bangunan}}m <sup>2</sup></h4>
                        </div><div class="col-50">
                            <h5>Kamar Mandi</h5>
                            <h4>{{$properti->mandi}}</h4>
                            <h5>Luas Bangunan</h5>
                            <h4>{{$properti->bangunan}} m <sup>2</sup></h4>
                            <h5>Luas Tanah</h5>
                            <h4>{{$properti->tanah}} m <sup>2</sup></h4>
                            <h5>Sertifikat</h5>
                            <h4>{{$properti->sertifikat}}</h4>
                        </div>
                        @elseif($properti->hunian == "Tanah")
                        <div class="col-50">
                            <h5>Tipe Properti</h5>
                            <h4>{{$properti->hunian}}</h4>
                            <h5>Luas Tanah</h5>
                            <h4>{{$properti->tanah}} m <sup>2</sup></h4>
                        </div><div class="col-50">
                            <h5>Sertifikat</h5>
                            <h4>{{$properti->sertifikat}}</h4>
                            <h5>ID Listing</h5>
                            <h4>{{$properti->listing}}</h4>
                        </div>
                        @else
                        <div class="col-50">
                            <h5>Tipe Properti</h5>
                            <h4>{{$properti->hunian}}</h4>
                            <h5>Tipe Properti</h5>
                            <h4>{{$properti->hunian}} {{$properti->kategori}}</h4>
                            <h5>Pengembang</h5>
                            <h4 class="grey">{{$properti->pengembang}}</h4>
                            <h5>Per M</h5>
                            <h4>Rp {{ format_uang($properti->perm) }}per m <sup>2</sup></h4>
                            <h5>Lantai</h5>
                            <h4>{{$properti->lantai}}</h4>
                            <h5>Tahun Dibuat</h5>
                            <h4>{{$properti->dibuat}}</h4>
                            <h5>Listrik</h5>
                            <h4>{{$properti->listrik}} watt</h4>
                            <h5>Tempat Parkir</h5>
                            <h4>{{$properti->parkir}}</h4>
                            <h5>Kamar Tidur</h5>
                            <h4>{{$properti->tidur}}</h4>
                            <h5>Tempat Parkir</h5>
                            <h4>{{$properti->bangunan}}m <sup>2</sup></h4>
                        </div><div class="col-50">
                            <h5>Kamar Mandi</h5>
                            <h4>{{$properti->mandi}}</h4>
                            <h5>ID Listing</h5>
                            <h4>{{$properti->listing}}</h4>
                            <h5>Luas Bangunan</h5>
                            <h4>{{$properti->bangunan}} m <sup>2</sup></h4>
                            <h5>Luas Tanah</h5>
                            <h4>{{$properti->tanah}} m <sup>2</sup></h4>
                            <h5>Interior</h5>
                            <h4>{{$properti->interior}}</h4>
                            <h5>Sertifikat</h5>
                            <h4>{{$properti->sertifikat}}</h4>
                            <h5>ID Listing</h5>
                            <h4>{{$properti->listing}}</h4>
                            <h5>Terdatar Pada</h5>
                            <h4>{{ tanggal_indonesia($properti->created_at, false) }}</h4>
                            <h5>Eksterior</h5>
                            <h4>{{$properti->eksterior}}</h4>
                        </div>
                        @endif
                    </div>
                    <br>
                    <br>
                    <h6>Deskripsi</h6>
                    <?php echo $properti->sarpras; ?>
                    <br>
                    <br>
                    <?php echo $properti->video; ?>
                    <br>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014694.0174272042!2d107.66538021074251!3d-6.951330520197916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d93d0b2725%3A0xbd5de86b7736a3bd!2sJustCo%20at%20The%20Plaza%20Office%20Tower%2C%20Coworking%20Space%20%26%20Hot%20Desking%2C%20Jakarta!5e0!3m2!1sid!2sid!4v1665383776140!5m2!1sid!2sid" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="kalkulator">
                        <div class="title">
                            <h2>Kalkulator KPR - GooPro.id</h2>
                        </div>
                        <div class="isi">
                            <div class="row">
                                <div class="col-30">
                                    <h5>Harga Properti (Rp.) :</h5>
                                    <input type="text">
                                    <br>
                                    <h5>Harga Properti (Rp.) :</h5>
                                    <select name="harga" id="harga">
                                        <option value="10%">10%</option>
                                        <option value="20%">20%</option>
                                        <option value="30%">30%</option>
                                        <option value="40%">40%</option>
                                        <option value="50%">50%</option>
                                    </select>
                                </div>
                                <div class="col-30">
                                    <h5>Uang Muka :</h5>
                                    <input type="text">
                                    <br>
                                    <h5>Jangka Waktu :</h5>
                                    <select name="harga" id="harga">
                                        <option value="10">10 Tahun</option>
                                        <option value="20">20 Tahun</option>
                                        <option value="30">30 Tahun</option>
                                        <option value="40">40 Tahun</option>
                                        <option value="50">50 Tahun</option>
                                    </select>
                                </div>
                                <div class="col-40">
                                    <div class="hasilkal">
                                        <h1>Rp 239.705.395 -p/b</h1>
                                        <h3>Jumlah Pinjaman : Rp 2.760.000.000</h3>
                                        <br><br>
                                        <p>Hasil dari kalkulator ini hanya merupakan perkiraan saja. Kalkulator ini, atau perhitungan yang dihasilkan, bukan merupakan suatu kesepakatan atau 
                                            penawaran dari setiap pemberi pinjaman untuk memberikan kredit. Perhitungan ini tidak mencakup ongkos-ongkos dan biaya-biaya apapun yang dapat dikenakan 
                                            oleh suatu pemberi pinjaman. PT Goopro Properti Indonesia dan kelompok perusahaan Goopro Group Ltd (Perseroan) tidak bertanggung jawab atas kalkulator atau 
                                            perhitungannya dan tidak membuat pernyataan-pernyataan baik secara tegas ataupun secara tersirat tentang kalkulator ataupun perhitungan tersebut. Perseroan 
                                            tidak memiliki tanggung jawab apapun atas kalkulator atau perhitungan tersebut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-40">
                <div class="penjual">
                    <div class="pic">
                        <img src="/images/{{$user->foto}}" alt="">
                        <h4>{{$user->namadepan}} {{$user->namabelakang}}</h4>
                        <h5>{{$user->agensi}}</h5>
                        <!-- <h4>{{$user->email}}</h4> -->
                        <!-- <h5>PT. GRIYA PROPERI LARIS MANIS</h5> -->
                        <br>
                        <a href="https://wa.me/{{$user->notelp}}" target="_blank" class="wa">Whatsapp</a>
                    </div>
                    <!-- <input type="text" placeholder="Nama Lengkap">
                    <input type="text" placeholder="No Telepon">
                    <input type="text" placeholder="Email">
                    <p>Dengan klik hubungi penjual, Anda akan menerima halaman <a href="#">Syarat dan Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> GooPro.</p>
                    <button>Kirim Pesan</button> -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush