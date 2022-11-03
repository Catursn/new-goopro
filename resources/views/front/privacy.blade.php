@extends('front.includes.master')

@section('title')
  PRIVACY POLICY | GOOPRO
@endsection

@section('main-content')
    <div class="breadcrumb">
        <a href="#">Halaman Utama ></a>
        <a href="#" class="active">Privasi dan Kerahasiaan</a>
    </div>
    <div class="bannerr">
        <img src="/images/Group.png" alt="">
    </div>
    <div class="wadah">
        <div class="terms">
        <?php echo $privacy->privacy; ?>
            <!-- <h6>Terimakasih telah mengakses lamudi.co.id, situs yang dioperasikan oleh PT. Lamudi Classifieds Indonesia. Kami menghormati privasi Anda dan ingin melindungi 
                informasi pribadi Anda. Untuk mempelajari lebih lanjut, silakan baca kebijakan privasi ini. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, 
                menggunakan dan (di bawah kondisi tertentu) mengungkapkan informasi pribadi Anda. Kebijakan Privasi ini juga menjelaskan langkah-langkah yang telah kami ambil 
                untuk mengamankan informasi pribadi Anda. Akhirnya, kebijakan privasi ini menjelaskan pilihan mengenai pengumpulan, penggunaan dan pengungkapan informasi pribadi 
                Anda. Dengan mengunjungi situs secara langsung atau melalui situs lain, Anda menerima kebijakan ini. Perlindungan data adalah masalah kepercayaan dan privasi Anda 
                penting bagi kami. Oleh karena itu kami hanya bisa menggunakan nama dan informasi lainnya yang berhubungan dengan Anda sesuai dengan yang telah ditetapkan dalam 
                kebijakan privasi ini. Kami hanya akan mengumpulkan informasi jika diperlukan dan kami hanya akan mengumpulkan informasi jika relevan kepada hubungan kami dengan 
                Anda. Kami hanya akan menyimpan informasi Anda selama memang oleh hukum atau selama hal itu relevan untuk tujuan yang telah ditetapkan. Anda dapat mengunjungi 
                situs dan menelusuri tanpa harus memberikan informasi pribadi. Selama kunjungan Anda ke situs Anda tetap anonim dan kita tidak akan dapat mengidentifikasi Anda 
                kecuali jika Anda memiliki akun di situs dan mencatat nama pengguna dan kata sandi.
            </h6>
            <h5>Data yang kami kumpulkan</h5>
            <h6>Kami dapat mengumpulkan berbagai potongan informasi jika Anda berusaha untuk memesan produk kami di situs. Kami mengumpulkan, menyimpan dan memproses data untuk 
                memproses pembelian Anda pada situs dan jika terdapat keluhan lebih lanjut, dan menyediakan layanan untuk Anda. Kami mungkin mengumpulkan informasi pribadi 
                termasuk, namun tidak terbatas pada judul, nama, jenis kelamin, tanggal lahir, alamat email, alamat pos, pengiriman alamat (jika berbeda), nomor telepon, 
                Nomer HP, Nomer fax, rincian pembayaran, rincian kartu pembayaran atau rincian rekening bank.
            </h6>
            <h5>Keamanan</h5>
            <h6>Kami memiliki langkah-langkah teknis dan keamanan di tempat yang sesuai untuk mencegah akses yang tidak sah atau melanggar hukum atau kecelakaan kehilangan atau 
                kerusakan atau kerusakan informasi anda. Ketika kami mengumpulkan data melalui Situs, kami mengumpulkan informasi pribadi anda pada server yang aman. Kami 
                menggunakan firewall pada server kami. Ketika kami mengumpulkan rincian kartu pembayaran elektronik, kami menggunakan enkripsi dengan menggunakan Secure Socket 
                Layer (SSL) coding. Sementara kami tidak dapat menjamin keamanan 100%, ini menyulitkan bagi hacker untuk mendekripsi data anda. Anda sangat disarankan untuk 
                tidak mengirim kartu kredit atau kartu debit penuh rincian dalam komunikasi elektronik terenkripsi dengan kami. Kami menjaga pengamanan fisik, elektronik dan 
                prosedural sehubungan dengan pengumpulan, penyimpanan dan pengungkapan informasi Anda. Prosedur keamanan kami berarti bahwa kami terkadang meminta bukti 
                identitas sebelum kita mengungkapkan informasi pribadi kepada anda. Anda bertanggung jawab untuk perlindungan terhadap akses tidak sah ke password Anda dan ke 
                komputer Anda.
            </h6>
            <h5>Hak-hak anda</h5>
            <h6>Jika anda khawatir tentang data anda, anda memiliki hak untuk meminta akses ke data pribadi yang kami simpan atau proses tentang anda. Anda memiliki hak untuk 
                meminta kami untuk memperbaiki ketimpangan dalam data anda secara gratis. Pada setiap tahap anda juga berhak untuk meminta kami untuk berhenti menggunakan data 
                pribadi anda untuk tujuan pemasaran langsung. Lamudi.co.id
            </h6>
            <h6>Umum</h6>
            <h6>Kami dapat mengubah Kebijakan Privasi ini setiap saat dengan memposting ketentuan yang diubah pada situs ini.</h6> -->
        </div>
    </div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush