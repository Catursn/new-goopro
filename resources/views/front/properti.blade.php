@extends('front.includes.master')

@section('title')
Daftar {{$hunian}} {{$kategori}} | GOOPRO
@endsection

@section('main-content')
<div class="titleproperti">
    <h3>Daftar {{$hunian}} {{$kategori}}</h3>
</div>
<div class="wadah">
    <div class="properti">
        <div class="row">
        @php
        $kathunian = DB::table('kategori_hunians')->where('status','aktif')->orderBy('id_hunian','DESC')->get();
        @endphp
        @foreach($kathunian as $kat)
            <div class="col-12">
                <a href="{{$url}}/list/{{$kat->hunian}}" class="{{(($hunian==$kat->hunian)? 'active' : '')}}"><img src="/images{{$kat->icon}}" alt=""></a>
                <p>{{$kat->hunian}}</p>
            </div>
        @endforeach
            <!-- <div class="col-12">
                <a href="{{$url}}/list/Apartemen" class="{{(($hunian=='Apartemen')? 'active' : '')}}"><img src="/images/kategoriproperti/apartemen.png" alt=""></a>
                <p>Apartemen</p>
            </div>
            <div class="col-12">
                <a href="{{$url}}/list/Pabrik" class="{{(($hunian=='Pabrik')? 'active' : '')}}"><img src="/images/kategoriproperti/pabrik.png" alt=""></a>
                <p>Pabrik</p>
            </div>
            <div class="col-12">
                <a href="{{$url}}/list/Rumah" class="{{(($hunian=='Rumah')? 'active' : '')}}"><img src="/images/kategoriproperti/rumah.png" alt=""></a>
                <p>Rumah</p>
            </div>
            <div class="col-12">
                <a href="{{$url}}/list/Tanah" class="{{(($hunian=='Tanah')? 'active' : '')}}"><img src="/images/kategoriproperti/tanah.png" alt=""></a>
                <p>Tanah</p>
            </div>
            <div class="col-12">
                <a href="{{$url}}/list/Gedung Perkantoran" class="{{(($hunian=='Gedung Perkantoran')? 'active' : '')}}"><img src="/images/kategoriproperti/gedung.png" alt=""></a>
                <p>Gedung Perkantoran</p>
            </div>
            <div class="col-12">
                <a href="{{$url}}/list/Ruko" class="{{(($hunian=='Ruko')? 'active' : '')}}"><img src="/images/kategoriproperti/ruko.png" alt=""></a>
                <p>Ruko</p>
            </div>
            <div class="col-12">
                <a href="{{$url}}/list/Gudang" class="{{(($hunian=='Gudang')? 'active' : '')}}"><img src="/images/kategoriproperti/gudang.png" alt=""></a>
                <p>Gudang</p>
            </div>
            <div class="col-12">
                <a href="{{$url}}/list/Rukan" class="{{(($hunian=='Rukan')? 'active' : '')}}"><img src="/images/kategoriproperti/rukan.png" alt=""></a>
                <p>Rukan</p>
            </div> -->
        </div>
    </div>
</div>
<div class="contentt">
    <form method="GEt"action="/properti/filtered" enctype="multipart/form-data">
        {{ csrf_field() }} {{ method_field('GET') }}
        <input type="text" name="hunian" value="{{$hunian}}" hidden>
        <input type="text" name="kategori" value="{{$kategori}}" hidden>
    <div class="row">
        <div class="leftbar">
            <h3>Harga :</h3>
                <ul class="donate-now" style="height:150px">
                    <li>
                        <input type="checkbox" id="h1" value="1" name="harga" {{(($harga =='1')? 'checked' : '')}}/>
                        <label for="h1"><= 500 juta</label>
                    </li>
                    <li>
                        <input type="checkbox" id="h2" value="2" name="harga" {{(($harga =='2')? 'checked' : '')}}/>
                        <label for="h2">500 juta - 1 miliar</label>
                    </li>
                    <li>
                        <input type="checkbox" id="h3" value="3" name="harga" {{(($harga =='3')? 'checked' : '')}}/>
                        <label for="h3">1 miliar - 1,5 miliar</label>
                    </li>
                    <li>
                        <input type="checkbox" id="h4" value="4" name="harga" {{(($harga =='4')? 'checked' : '')}}/>
                        <label for="h4">1,5 miliar - 2 miliar</label>
                    </li>
                    <li>
                        <input type="checkbox" id="h5" value="5" name="harga" {{(($harga =='5')? 'checked' : '')}}/>
                        <label for="h5">2 miliar - 3 miliar</label>
                    </li>
                    <li>
                        <input type="checkbox" id="h6" value="6" name="harga" {{(($harga =='6')? 'checked' : '')}}/>
                        <label for="h6">>= 3 miliar</label>
                    </li>
                </ul>
            <h3>Kamar Tidur :</h3>
                <ul class="donate-now" style="height:150px">
                    <li>
                        <input type="checkbox" id="t1" value="1" name="tidur" {{(($tidur =='1')? 'checked' : '')}}/>
                        <label for="t1">1</label>
                    </li>
                    <li>
                        <input type="checkbox" id="t2" value="2" name="tidur" {{(($tidur =='2')? 'checked' : '')}}/>
                        <label for="t2">2</label>
                    </li>
                    <li>
                        <input type="checkbox" id="t3" value="3" name="tidur" {{(($tidur =='3')? 'checked' : '')}}/>
                        <label for="t3">3</label>
                    </li>
                    <li>
                        <input type="checkbox" id="t4" value="4" name="tidur" {{(($tidur =='4')? 'checked' : '')}}/>
                        <label for="t4">4</label>
                    </li>
                    <li>
                        <input type="checkbox" id="t5" value="5" name="tidur" {{(($tidur =='5')? 'checked' : '')}}/>
                        <label for="t5">5</label>
                    </li>
                </ul>
            <h3>Daerah :</h3>
                <ul class="donate-now" style="height:300px">
                <li>
                    <input type="checkbox" id="d1" value="3273" name="daerah" {{(($daerah =='3273')? 'checked' : '')}}/>
                    <label for="d1">Kota Bandung</label>
                </li>
                <li>
                    <input type="checkbox" id="d2" value="3277" name="daerah" {{(($daerah =='3277')? 'checked' : '')}}/>
                    <label for="d2">Kota Cimahi</label>
                </li>
                <li>
                    <input type="checkbox" id="d3" value="3204" name="daerah" {{(($daerah =='3204')? 'checked' : '')}}/>
                    <label for="d3">Kab. Bandung</label>
                </li>
                <li>
                    <input type="checkbox" id="d4" value="3217" name="daerah" {{(($daerah =='3217')? 'checked' : '')}}/>
                    <label for="d4">Kab. Bandung Barat</label>
                </li>
                <li>
                    <input type="checkbox" id="d5" value="3211" name="daerah" {{(($daerah =='3211')? 'checked' : '')}}/>
                    <label for="d5">Kabupaten Sumedang</label>
                </li>
                <li>
                    <input type="checkbox" id="d6" value="3213" name="daerah" {{(($daerah =='3213')? 'checked' : '')}}/>
                    <label for="d6">Kabupaten Subang</label>
                </li>
                <li>
                    <input type="checkbox" id="d6" value="3173" name="daerah" {{(($daerah =='3173')? 'checked' : '')}}/>
                    <label for="d6">Jakarta Pusat</label>
                </li>
                <li>
                    <input type="checkbox" id="d6" value="3272" name="daerah" {{(($daerah =='3272')? 'checked' : '')}}/>
                    <label for="d6">Kota Sukabumi</label>
                </li>
                <li>
                    <input type="checkbox" id="d6" value="3271" name="daerah" {{(($daerah =='3271')? 'checked' : '')}}/>
                    <label for="d6">Kota Bogor</label>
                </li>
                <li>
                    <input type="checkbox" id="d6" value="3276" name="daerah" {{(($daerah =='3276')? 'checked' : '')}}/>
                    <label for="d6">Kota Depok</label>
                </li>
                <li>
                    <input type="checkbox" id="d6" value="3671" name="daerah" {{(($daerah =='3671')? 'checked' : '')}}/>
                    <label for="d6">Kota Tangerang</label>
                </li>
                <li>
                    <input type="checkbox" id="d6" value="3275" name="daerah" {{(($daerah =='3275')? 'checked' : '')}}/>
                    <label for="d6">Bekasi</label>
                </li>
            </ul>
            <div class="terapkan">
                <button class="active">Terapkan Filter</button>
            </div>
        </div>
        <div class="rightbar">
            <h3>{{ $properti->total() }} {{$hunian}} {{$kategori}}</h3>
            @foreach($properti as $prop)
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        @if($prop->status == "terjual")
                        <div class="ribbon">SOLD OUT</div>
                        @endif
                        <!-- <a href="#"><img src="/images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="/images/play.png" alt=""> 2</a> -->
                    </div>
                    <img src="/images{{$prop->foto1}}" alt="">
                </div>
                <div class="col-60">
                    <a href="/properti/detail/{{$prop->slug}}">{{$prop->judul}}</a>
                    <p><img src="/images/point.png" alt=""> {{$prop->tempat}}</p>
                    <br>
                    <h4>Tipe Properti : {{$prop->hunian}}</h4>
                    <h5>{{$prop->informasi}}</h5>
                    <br>
                    @if($prop->hunian != "Tanah")
                    <h5>Kamar Tidur : <b><strong>{{$prop->tidur}}</strong></b>, Kamar Mandi : <b><strong>{{$prop->mandi}}</strong></b>, Bangunan : <b><strong>{{$prop->bangunan}}</strong></b> m <sup>2</sup></h5>
                    @else
                    <h5>Luas Tanah : <b><strong>{{$prop->tanah}}m <sup>2</sup></strong></b>, Sertifikat : <b><strong>{{$prop->sertifikat}}</strong></b></h5>
                    @endif
                    <h3>Rp. {{ format_uang($prop->harga) }}</h3>
                    <div class="row">
                        <div class="col-20">
                            <a href="https://wa.me/{{$prop->notelp}}">Kontak Agent</a>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh {{$prop->namadepan}} {{$prop->namabelakang}} <br>
                            Tayang sejak {{ tanggal_indonesia($prop->created_at, false) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Baru Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
                    <p><img src="images/point.png" alt=""> Dago, Bandung</p>
                    <br>
                    <h4>Tipe Properti : Rumah</h4>
                    <h5>Rumah minimalis seken siap huni dan asri, lokasi startegis d pusat kota Bandung dengan fasilitas umum yang mudah diakses.</h5>
                    <br>
                    <h5>Tempat Tidur : <b><strong>2</strong></b>, Kamar Mandi : <b><strong>1</strong></b>, Bangunan : <b><strong>50</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. 350.000.000,00</h3>
                    <div class="row">
                        <div class="col-20">
                            <button>Kontak Agent</button>
                        </div>
                        <div class="col-80">
                            <p>Didaftarkan oleh Budiyono Prasetya <br>
                            Anggota sejak tahun 2017 <br>
                            Tayang sejak 06 Mei 2022</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="paginationn">
                <div class="row">
                    <div class="col-40">
                        <h4>Menampilkan {{ $properti->firstItem() }}-{{ $properti->lastItem() }} properti</h4>
                    </div>
                    <div class="col-60 right">
                        <a href="?page=1"><<</a>
                        <a href="{{ $properti->previousPageUrl() }}"><</a>
                        <a href="?page{{ $properti->currentPage() }}" class="active">{{ $properti->currentPage() }}</a>
                        <a href="{{ $properti->nextPageUrl() }}">></a>
                        <a href="?page{{ $properti->lastPage() }}">>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
<script>
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
        });
</script>
@endpush