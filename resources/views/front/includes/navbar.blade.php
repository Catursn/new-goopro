<nav class="navbar sticky-top navbar-expand-lg navbar-light">
  <a class="navbar-brand mr-auto" href="/"><img src="/images/logo.jpeg" alt="" height="100%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbardijual" role="button" data-toggle="dijual" aria-haspopup="true" aria-expanded="false">
          Dijual
        </a>
        <div class="dropdown-menu" aria-labelledby="navbardijual">
          <a class="dropdown-item" href="/dijual/list/all">Semuanya</a>
          <a class="dropdown-item" href="/dijual/list/Rukan">Rukan</a>
          <a class="dropdown-item" href="/dijual/list/Gudang">Gudang</a>
          <a class="dropdown-item" href="/dijual/list/Tanah">Tanah</a>
          <a class="dropdown-item" href="/dijual/list/Ruko">Ruko</a>
          <a class="dropdown-item" href="/dijual/list/Gedung Perkantoran">Gedung Perkantoran</a>
          <a class="dropdown-item" href="/dijual/list/Pabrik">Pabrik</a>
          <a class="dropdown-item" href="/dijual/list/Rumah">Rumah</a>
          <a class="dropdown-item" href="/dijual/list/Apartemen">Apartemen</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbardisewa" role="button" data-toggle="disewa" aria-haspopup="true" aria-expanded="false">
          Disewakan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbardisewa">
          <a class="dropdown-item" href="/disewakan/list/all">Semuanya</a>
          <a class="dropdown-item" href="/disewakan/list/Rukan">Rukan</a>
          <a class="dropdown-item" href="/disewakan/list/Gudang">Gudang</a>
          <a class="dropdown-item" href="/disewakan/list/Tanah">Tanah</a>
          <a class="dropdown-item" href="/disewakan/list/Ruko">Ruko</a>
          <a class="dropdown-item" href="/disewakan/list/Gedung Perkantoran">Gedung Perkantoran</a>
          <a class="dropdown-item" href="/disewakan/list/Pabrik">Pabrik</a>
          <a class="dropdown-item" href="/disewakan/list/Rumah">Rumah</a>
          <a class="dropdown-item" href="/disewakan/list/Apartemen">Apartemen</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarproperty" role="button" data-toggle="property" aria-haspopup="true" aria-expanded="false">
          Property Baru
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarproperty">
          <a class="dropdown-item" href="/propertibaru/list/all">Semuanya</a>
          <a class="dropdown-item" href="/propertibaru/list/Rukan">Rukan</a>
          <a class="dropdown-item" href="/propertibaru/list/Gudang">Gudang</a>
          <a class="dropdown-item" href="/propertibaru/list/Tanah">Tanah</a>
          <a class="dropdown-item" href="/propertibaru/list/Ruko">Ruko</a>
          <a class="dropdown-item" href="/propertibaru/list/Gedung Perkantoran">Gedung Perkantoran</a>
          <a class="dropdown-item" href="/propertibaru/list/Pabrik">Pabrik</a>
          <a class="dropdown-item" href="/propertibaru/list/Rumah">Rumah</a>
          <a class="dropdown-item" href="/propertibaru/list/Apartemen">Apartemen</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" id="direktori">Direktori</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#" id="direktori">Cari Agen</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarinformasi" role="button" data-toggle="informasi" aria-haspopup="true" aria-expanded="false">
          Berita Property
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarinformasi">
          @foreach($kategoriberita as $kat)
          <a class="dropdown-item" href="/berita/kategori/{{$kat->kategori}}">{{$kat->kategori}}</a>
          @endforeach
          <!-- <a class="dropdown-item" href="/berita">Property News</a>
          <a class="dropdown-item" href="#">Isue Article</a>
          <a class="dropdown-item" href="#">Event</a>
          <a class="dropdown-item" href="#">Property Trend</a>
          <a class="dropdown-item" href="#">Infographis</a>
          <a class="dropdown-item" href="#">Investment</a>
          <a class="dropdown-item" href="#">Property Dictionary</a>
          <a class="dropdown-item" href="#">Write for Us</a>
          <a class="dropdown-item" href="#">Guide</a> -->
          <a class="dropdown-item" href="/faq">FAQ</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="navbarpanduan" role="button" data-toggle="panduan" aria-haspopup="true" aria-expanded="false">
          Panduan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarpanduan">
          <a class="dropdown-item" href="#">Simulasi KPR</a>
          <a class="dropdown-item" href="#">Tanyakan Properti</a>
          <a class="dropdown-item" href="#">Iklankan</a>
          <a class="dropdown-item" href="#">Penawaran Produk</a>
          <a class="dropdown-item" href="#">Keagenan</a>
          <a class="dropdown-item" href="/kontak">Kontak</a>
        </div>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
        <div class="right">
            <a href="/login">Login / Daftar</a>
            <a href="/login" class="iklan">Iklankan Property</a>
        </div>
    </div>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>