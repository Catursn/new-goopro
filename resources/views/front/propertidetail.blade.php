@extends('front.includes.master')
@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#">Properti Baru ></a>
        <a href="#">Rumah ></a>
        <a href="#">Kota Bandung ></a>
        <a href="#" class="active">Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan</a>
    </div>
    <div class="bigimg">
        <div class="row">
            <div class="col-60">
                <img src="images/hunian2.png" alt="">
            </div>
            <div class="col-40">
                <img src="images/ruangtamu.png" alt="">
                <br>
                <br>
                <img src="images/dapur.png" alt="">
            </div>
            <div class="col-60">
                <h3>Rumah Siap Huni di Pusat Kota Bandung Cluster Parahyangan</h3>
                <div class="row">
                    <div class="col-30">
                        <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                        <h4>Rp 350.000.000,00</h4>
                    </div>
                    <div class="col-70">
                        <button>Rumah</button>
                        <br>
                        <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    </div>
                </div>
                <h6>Informasi :</h6>
                <p>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses. Akses 2 Mobil, Raedy Stok, 100 Meter Dr Jl Raya Utama</p>
                <div class="spesifikasi">
                    <h6>Detail Spesifikasi :</h6>
                    <div class="row">
                        <div class="col-50">
                            <h5>Tipe Properti</h5>
                            <h4>Rumah Dijual</h4>
                            <h5>Pengembang</h5>
                            <h4 class="grey">N/A</h4>
                            <h5>Per M</h5>
                            <h4>Rp 10.777.000 per M</h4>
                            <h5>Lantai</h5>
                            <h4>1</h4>
                            <h5>Tahun Dibuat</h5>
                            <h4>1998</h4>
                            <h5>Listrik</h5>
                            <h4>950 watt</h4>
                            <h5>Tempat Parkir</h5>
                            <h4>2</h4>
                        </div><div class="col-50">
                            <h5>Luas Bangunan</h5>
                            <h4>58 M</h4>
                            <h5>Luas Tanah</h5>
                            <h4>65 M</h4>
                            <h5>Interior</h5>
                            <h4>Tak Berperabot</h4>
                            <h5>Sertifikat</h5>
                            <h4>SHM - Sertifikat Hak Milik</h4>
                            <h5>ID Listing</h5>
                            <h4>187</h4>
                            <h5>Terdatar Pada</h5>
                            <h4>20/10/2022</h4>
                            <h5>Eksterior</h5>
                            <h4>Ada</h4>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h6>Sarana Prasarana :</h6>
                    <p>Keamanan 24 Jam</p>
                    <p>Taman</p>
                    <p>AC</p>
                    <p>Wifi</p>
                    <p>Masjid</p>
                    <p>Kolam Renang</p>
                    <br>
                    <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mSaxsQdE64g" title="YouTube video player" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014694.0174272042!2d106.68476197565994!3d-6.565972568669816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d93d0b2725%3A0xbd5de86b7736a3bd!2sJustCo%20at%20The%20Plaza%20Office%20Tower%2C%20Coworking%20Space%20%26%20Hot%20Desking%2C%20Jakarta!5e0!3m2!1sid!2sid!4v1665383776140!5m2!1sid!2sid" 
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
                        <img src="/images/testi1.png" alt="">
                        <h4>Aris Dilanto Kusumo</h4>
                        <h5>PT. GRIYA PROPERI LARIS MANIS</h5>
                        <H5>Anggota Sejak Tahun 2019</H5>
                        <h5>+62 8213334949</h5>
                    </div>
                    <input type="text" placeholder="Nama Lengkap">
                    <input type="text" placeholder="No Telepon">
                    <input type="text" placeholder="Email">
                    <p>Dengan klik hubungi penjual, Anda akan menerima halaman <a href="#">Syarat dan Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> GooPro.</p>
                    <button>Kirim Pesan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush