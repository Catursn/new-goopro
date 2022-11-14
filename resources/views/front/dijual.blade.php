@extends('front.includes.master')

@section('title')
  DIJUAL | GOOPRO
@endsection

@section('main-content')
<div class="titleproperti">
    <h3>DIJUAL</h3>
</div>
<div class="wadah">
    <div class="properti">
        <div class="row">
            <div class="col-12">
                <a href="/dijual/Apartemen" class="{{(($hunian=='Apartemen')? 'active' : '')}}"><img src="/images/apartemen.png" alt=""></a>
                <p>Apartemen</p>
            </div>
            <div class="col-12">
                <a href="/dijual/Pabrik" class="{{(($hunian=='Pabrik')? 'active' : '')}}"><img src="/images/pabrik.png" alt=""></a>
                <p>Pabrik</p>
            </div>
            <div class="col-12">
                <a href="/dijual/Rumah" class="{{(($hunian=='Rumah')? 'active' : '')}}"><img src="/images/rumah.png" alt=""></a>
                <p>Rumah</p>
            </div>
            <div class="col-12">
                <a href="/dijual/Tanah" class="{{(($hunian=='Tanah')? 'active' : '')}}"><img src="/images/tanah.png" alt=""></a>
                <p>Tanah</p>
            </div>
            <div class="col-12">
                <a href="/dijual/Gedung Perkantoran" class="{{(($hunian=='Gedung Perkantoran')? 'active' : '')}}"><img src="/images/gedung.png" alt=""></a>
                <p>Gedung Perkantoran</p>
            </div>
            <div class="col-12">
                <a href="/dijual/Ruko" class="{{(($hunian=='Ruko')? 'active' : '')}}"><img src="/images/ruko.png" alt=""></a>
                <p>Ruko</p>
            </div>
            <div class="col-12">
                <a href="/dijual/Gudang" class="{{(($hunian=='Gudang')? 'active' : '')}}"><img src="/images/gudang.png" alt=""></a>
                <p>Gudang</p>
            </div>
            <div class="col-12">
                <a href="/dijual/Rukan" class="{{(($hunian=='Rukan')? 'active' : '')}}"><img src="/images/rukan.png" alt=""></a>
                <p>Rukan</p>
            </div>
        </div>
    </div>
</div>
<div class="contentt">
    <div class="row">
        <div class="leftbar">
            <h3>Harga :</h3>
            <div class="row">
                <div class="col-50">
                    <button><= 500 juta</button>
                </div>
                <div class="col-50">
                    <button class="active">500 juta - 1 miliar</button>
                </div>
                <div class="col-50">
                    <button>1 miliar - 1,5 miliar</button>
                </div>
                <div class="col-50">
                    <button>1,5 miliar - 2 miliar</button>
                </div>
                <div class="col-50">
                    <button>2 miliar - 3 miliar</button>
                </div>
                <div class="col-50">
                    <button>>= 3 miliar</button>
                </div>
            </div>
            <br>
            <br>
            <h3>Kamar Tidur :</h3>
            <div class="row">
                <div class="col-20">
                    <button>1</button>
                </div>
                <div class="col-20">
                    <button>2</button>
                </div>
                <div class="col-20">
                    <button>3</button>
                </div>
                <div class="col-20">
                    <button>4</button>
                </div>
                <div class="col-20">
                    <button>5+</button>
                </div>
            </div>
            <br>
            <br>
            <h3>Daerah :</h3>
            <div class="row">
                <div class="col-50">
                    <button>Bandung</button>
                </div>
                <div class="col-50">
                    <button class="active">Cimahi</button>
                </div>
                <div class="col-50">
                    <button>Kab. Bandung</button>
                </div>
                <div class="col-50">
                    <button>Kab. Bandung Barat</button>
                </div>
                <div class="col-50">
                    <button>Sumedang</button>
                </div>
                <div class="col-50">
                    <button>Subang</button>
                </div>
                <div class="col-50">
                    <button>Jakarta</button>
                </div>
                <div class="col-50">
                    <button>Bogor</button>
                </div>
                <div class="col-50">
                    <button>Depok</button>
                </div>
                <div class="col-50">
                    <button>Tangerang</button>
                </div>
                <div class="col-50">
                    <button>Bekasi</button>
                </div>
                <div class="col-50">
                    <button>Sukabumi</button>
                </div>
            </div>
        </div>
        <div class="rightbar">
            <h3>{{ $properti->total() }} {{$hunian}} Dijual</h3>
            @foreach($properti as $prop)
            <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="/images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="/images/play.png" alt=""> 2</a>
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
                    <h5>Tempat Tidur : <b><strong>{{$prop->tidur}}</strong></b>, Kamar Mandi : <b><strong>{{$prop->mandi}}</strong></b>, Bangunan : <b><strong>{{$prop->bangunan}}</strong></b> m <sup>2</sup></h5>
                    <h3>Rp. {{$prop->harga}}</h3>
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
            @endforeach
            <!-- <div class="row">
                <div class="col-40">
                    <div class="icon">
                        <a href="#"><img src="/images/gallery.png" alt=""> 2 </a>
                        <a href="#"><img src="images/play.png" alt=""> 2</a>
                    </div>
                    <img src="images/villa.png" alt="">
                </div>
                <div class="col-60">
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
                    <h2>Dijual Rumah Siap Huni di Pusat Kota Bandung. Cluster Parahyangan</h2>
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
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush