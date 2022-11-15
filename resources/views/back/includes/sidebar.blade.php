<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<?php
    $role = Auth()->user()->role;
?>
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="{{route('admin')}}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <!-- <li class="nav-divider">
                        Menu
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{route('admin')}}"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-divider">
                        PROPERTI
                    </li>
                    <!-- <li class="nav-item ">
                        <a class="nav-link" href="#"><i class="fa fa-fw fa-user-circle"></i>Listing Aktif<span class="badge badge-success">6</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#properti" aria-controls="properti"><i class="fas fa-fw fa-file"></i>PROPERTI</a>
                        <div id="properti" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{route('iklan.index')}}">Iklan Property</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('properti.index')}}">Listing Aktif</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('nonaktif')}}">Listing TIdak Aktif</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tersimpan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Favorit</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @if($role == '1')
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#kontak" aria-controls="kontak"><i class="fas fa-fw fa-file"></i>KONTAK</a>
                        <div id="kontak" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('pesan.index')}}">Pesan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#prospek" aria-controls="prospek"><i class="fas fa-fw fa-file"></i>PROSPEK</a>
                        <div id="prospek" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Kelola Klien</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#pages" aria-controls="pages"><i class="fas fa-fw fa-file"></i>PAGES LAINNYA</a>
                        <div id="pages" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('terms.index')}}">Terms & Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('privacy.index')}}">Privacy & Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('syarat.index')}}">Syarat Penggunaan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('keuntungan.index')}}">Keuntungan Pengguna</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('hakcipta.index')}}">Hak Cipta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('carakerja.index')}}">Cara Kerja</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#media" aria-controls="media"><i class="fas fa-fw fa-file"></i>MEDIA</a>
                        <div id="media" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('slider.index')}}">Slider</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Profile Web</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('berita.index')}}">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('testimoni.index')}}">Testimoni</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#properties" aria-controls="properties"><i class="fas fa-fw fa-file"></i>KATEGORI</a>
                        <div id="properties" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('kategoriberita.index')}}">Kategori Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('kategoriproperti.index')}}">Kategori Properti</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('kategorihunian.index')}}">Kategori Hunian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('kategorikota.index')}}">Kategori Kota</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#setting" aria-controls="setting"><i class="fas fa-fw fa-file"></i>SETTING</a>
                        <div id="setting" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Akun Saya</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/gantipassword">Ganti Password</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->