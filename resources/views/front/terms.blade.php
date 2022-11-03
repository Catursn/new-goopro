@extends('front.includes.master')

@section('title')
  TERMS AND CONDITIONS | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Terms and Conditions</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="terms">
        <?php echo $terms->terms; ?>
            <!-- <h5>Pendahuluan</h5>
            <h6>Situs dan Layanan disediakan kepada anda dengan tunduk kepada Syarat dan Ketentuan Umum ini. “Anda” atau “Pengguna” berarti setiap orang yang menggunakan atau 
                mengakses Layanan atau Situs baik secara manual maupun melalui sistem otomatis, termasuk setiap orang yang melihat-lihat Layanan dan materi di dalamnya, 
                memberikan komentar terhadap materi atau merespon terhadap iklan yang dipasang di dalam Situs.
            </h6>
            <h6>Dengan menggunakan Layanan dan mengakses Situs ini, Anda mengkonfirmasi pemahaman Anda mengenai syarat dan ketentuan. Dengan tidak disetujuinya Syarat & 
                Ketentuan Umum ini, kami mempersilahkan anda untuk tidak melanjutkan penggunaan Layanan.
            </h6>
            <h6>Dengan menggunakan Layanan dan mengakses Situs ini, Anda setuju untuk taat kepada Syarat dan Ketentuan Umum ini dan setiap ketentuan serta petunjuk lain 
                yang berlaku untuk Layanan, yang mungkin diubah atau diperbarui oleh Lamudi Indonesia dari waktu ke waktu atas kebijaksanaannya sendiri.
            </h6>
            <h6>Kami berhak untuk mengubah, memodifikasi, menambah, atau menghapus bagian dari syarat dan ketentuan setiap saat. Pembaharuan akan berlaku saat diunggah di situs 
                tanpa pemberitahuan sebelumnya. Harap untuk memeriksa persyaratan dan ketentuan penggunaan secara rutin atas setiap pembaharuan. Dengan terus menggunakan situs 
                ini dan mengikuti pembaharuan syarat dan ketentuan penggunaan ini, Anda setuju untuk taat pada Syarat dan Ketentuan umum beserta setiap pembaharuannya.
            </h6>
            <h5>Batasan Tanggung Jawab Lamudi Indonesia</h5>
            <ol type="1">
                <li>Lamudi Indonesia tidak bertanggung jawab atas semua jaminan dan kondisi, termasuk segala implikasi dari jaminan, kualitas, kelayakan atas informasi yang 
                    disampaikan pemasang iklan. Dalam keadaan apapun, Lamudi Indonesia tidak bertanggung jawab atas kerugian, baik langsung, tidak langsung ataupun yang bersifat 
                    konsekuensial, maupun kerugian atau kerusakan apapun sebagai akibat dari kerugian atas pemakaian, data atau keuntungan, baik dalam tindakan perjanjian, 
                    kelalaian atau tindakan kesalahan lainnya, yang muncul dari penggunaan atau kinerja dari informasi dan/atau gambar yang disediakan oleh pemasang iklan
                </li>
                <li>Lamudi Indonesia tidak bertanggung jawab atau berkewajiban atas penyerahan barang atau jasa, termasuk kepatuhan pembeli dan pemasang iklan dengan ketentuan 
                    perundang-undangan yang berlaku di Republik Indonesia baik dalam hal penawaran ataupun penjualan barang dan jasa ataupun transaksi lainnya.
                </li>
            </ol>
            <h5>Tanggung Jawab Pengguna</h5>
            <h6>Pengguna wajib menjaga data pribadi miliknya dari kerusakan/kehilangan, termasuk tapi tidak terbatas pada upaya pencegahan agar data pribadi miliknya tidak 
                disalahgunakan oleh pihak lain.
            </h6>
            <h6>Pengguna dengan ini mengetahui dan menyetujui bahwa Lamudi Indonesia tidak dapat dimintai pertanggungjawaban oleh pengguna dan/atau pihak manapun atas 
                hal-hal yang terjadi, termasuk tapi tidak terbatas pada:
            </h6>
            <ul>
                <li>Kehilangan data pribadi;</li>
                <li>Kehilangan data pribadi;</li>
                <li>Pemalsuan data pribadi pengguna;</li>
                <li>Kehilangan penghasilan atau pendapatan;</li>
                <li>Kehilangan bisnis;</li>
                <li>Kehilangan laba atau suatu perikatan;</li>
                <li>Kehilangan penghematan yang telah diantisipasi sebelumnya;</li>
                <li>Kehilangan data;</li>
                <li>Kehilangan itikad baik;</li>
                <li>Waktu manajemen atau kantor yang tersia-siakan;</li>
                <li>Kehilangan atau kerugian lain apapun jenisnya, terlepas dari bagaimana hal itu timbul dan apakah disebabkan oleh kelalaian, pelanggaran terhadap suatu 
                    perikatan atau lainnya, meskipun dapat diperkirakan sebelumnya;
                </li>
                <li>Segala kerugian sebagai akibat dari penggunaan data pribadi atau akun milik pengguna yang terindikasi melanggar hukum dan/atau penyalahgunaan oleh pihak 
                    yang tidak berwenang; dan
                </li>
            </ul>
            <h6>Segala kerugian dan atau kerusakan karena tidak beroperasinya dan/atau terdapat gangguan terhadap layanan Lamudi Indonesia akibat terjadinya force majeure, 
                yang termasuk tapi tidak terbatas pada:
            </h6>
            <ul>
                <li>Bencana alam;</li>
                <li>Peristiwa kebakaran;</li>
                <li>Pemogokan;</li>
                <li>Perang;</li>
                <li>Huru-hara;</li>
                <li>Pemberontakan atau tindakan militer lainnya;</li>
                <li>Tindakan pihak yang berwenang yang mempengaruhi kelangsungan penyelenggaraan Layanan;</li>
                <li>Tindakan pihak ketiga yang menyebabkan Lamudi Indonesia tidak dapat menyediakan Layanan; dan</li>
            </ul>
            <h6>Adanya keputusan atau perubahan keputusan dari instansi terkait termasuk pemerintah yang berdampak pada pelaksanaan Layanan ini.</h6>
            <h6>Pengguna pada saat memasang iklan wajib memastikan bahwa setiap produk dan/atau jasa yang diiklankan serta Materi iklan telah:</h6>
            <ul>
                <li>memperoleh persetujuan dan/atau perizinan yang dipersyaratkan,</li>
                <li>persetujuan dan/atau perizinan yang dipersyaratkan tersebut masih berlaku dan</li>
                <li>produk dan/atau jasa yang diiklankan bukan merupakan produk dan/atau jasa yang dilarang untuk diperjualbelikan secara umum berdasarkan ketentuan peraturan 
                    perundang-undangan.
                </li>
            </ul> -->
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush