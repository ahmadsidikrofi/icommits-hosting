<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.Firstnavbar')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="/image/hero/hero-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5><span class="shadow rounded-4 bg-danger p-1 get-packet">Mulai</span> Rp100/jam</h5>
                                <h2>Efektifkan mimpi ANDA<br /> dengan sentuhan hosting bersama kami.</h2>
                                <a href="#" class="primary-btn">Get started now</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="/image/hero/hero-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="image/hero/hero-1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5><span class="shadow rounded-4 bg-danger p-1 get-packet">Mulai</span> Rp9000/bulan</h5>
                                <h2>Efektifkan mimpi ANDA<br /> dengan sentuhan hosting bersama kami.</h2>
                                <a href="#" class="primary-btn">Get started now</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="/image/hero/hero-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Button WA START -->
    @include('wa')
    <!-- Button WA End -->

    <!-- Register Domain Section Begin -->
    <section class="register-domain spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="register__text">
                        <div class="section-title">
                            <h3>Daftarkan Domainmu Sekarang!</h3>
                        </div>
                        <div class="register__form">
                            <form action="#">
                                <input type="text" placeholder="ex: cloudhost">
                                <div class="change__extension">
                                    .com
                                    <ul>
                                        <li>.net</li>
                                        <li>.org</li>
                                        <li>.me</li>
                                    </ul>
                                </div>
                                <button type="submit" class="site-btn">Search</button>
                            </form>
                        </div>
                        <div class="register__result">
                            <ul>
                                <li class="fs-3">.com <span class="text-secondary fw-semibold fs-6">Rp249.000</span></li>
                                <li class="fs-3">.net <span class="text-secondary fw-semibold fs-6">Rp199.000</span></li>
                                <li class="fs-3">.org <span class="text-secondary fw-semibold fs-6">Rp169.000</span></li>
                                <li class="fs-3">.store <span class="text-secondary fw-semibold fs-6">Rp279.000</span></li>
                                <li class="fs-3">.tech <span class="text-secondary fw-semibold fs-6">Rp299.000</span></li>
                            </ul>
                        </div>
                        <p>Temukan nama domain situs web premium yang sempurna dari Icommits & dapatkan kehadiran terbaik di internet.
                            Dengan investasi kecil mendapatkan keuntungan besar!.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Domain Section End -->

    <!-- Services Section Begin -->
    {{-- <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Pilihan Hosting Terbaikmu</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <h5>Shared Hosting</h5>
                        <span>Rp9000/bln</span>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <h5>Wordpress Hosting</h5>
                        <span>Mulai Rp9000/bln</span>
                        <p>Website Siap Pakai Ketika Hosting Aktif</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <h5>Dedicated Hosting</h5>
                        <span>Mulai Rp9000/bln</span>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <h5>SSL certificate</h5>
                        <span>Mulai Rp9000/bln</span>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <h5>Web Hosting</h5>
                        <span>Mulai Rp9000/bln</span>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <h5>Cloud server</h5>
                        <span>Mulai Rp9000/bln</span>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Paket Web Hosting Section Start -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="section-title normal-title">
                        <h3>Pilih Paket Web Hosting</h3>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="pricing__swipe-btn">
                        <label for="jam" class="active">Jam
                            <input type="radio" id="jam">
                        </label>
                        <label for="bulanan">Bulanan
                            <input type="radio" id="bulanan">
                        </label>
                    </div>
                </div>
            </div>
            <!-- Paket perJam -->
            <div class="row paket_perjam active">
                @foreach ( $paketUnlimited as $paketWebHosting )
                    @if ($paketWebHosting->durasi === "jam")
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="harga_paket">
                                <h4>{{ $paketWebHosting->nama_paket }}</h4>
                                <p>{{ $paketWebHosting->deskripsi_paket }}</p>
                                <h3>Rp{{ $paketWebHosting->harga_paket }} <span>/ jam</span></h3>
                                <h5 class="fw-bold">Paket Unggulan</h5>
                                <p>{!! $paketWebHosting->paket_unggulan !!}</p>

                                {{-- <ul>
                                    <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                                    <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                                    <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                                    <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                                    <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                                    <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                                    <li><span class="fa fa-check text-primary"></span>3 Database</li>
                                </ul> --}}
                                <h5 class="fw-bold">Performa</h5>
                                <ul>
                                    <li><span class="fa fa-check text-primary"></span> Ram 1 GB</li>
                                    <li><span class="fa fa-check text-primary"></span> 1 CPU Core</li>
                                    <li><span class="fa fa-check text-primary"></span> Dedicated Resource</li>
                                    <li><span class="fa fa-check text-primary"></span> Alamat IP Dedicated</li>
                                </ul>
                                <h5 class="fw-bold">Keamanan</h5>
                                <ul>
                                    <li><span class="fa fa-check text-primary"></span> Nameserver Dilindungi Cloudflare</li>
                                    <li><span class="fa fa-check text-primary"></span> Pemindai Malware</li>
                                </ul>
                                <h5 class="fw-bold">Bonus Gratis</h5>
                                <ul>
                                    <li><span class="fa fa-check text-primary"></span> Email Gratis</li>
                                </ul>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Paket Bulanan -->
            <div class="row paket_bulanan">
                @foreach ( $paketUnlimited as $paketWebHosting )
                    @if ($paketWebHosting->durasi === "bulan")
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="harga_paket">
                                <p>{{ $paketWebHosting->durasi }}</p>
                                <h4>{{ $paketWebHosting->nama_paket }}</h4>
                                <p>{{ $paketWebHosting->deskripsi_paket }}</p>
                                <h3>Rp{{ $paketWebHosting->harga_paket }} <span>/ jam</span></h3>
                                <h5 class="fw-bold">Paket Unggulan</h5>
                                <p>{!! $paketWebHosting->paket_unggulan !!}</p>

                                {{-- <ul>
                                    <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                                    <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                                    <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                                    <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                                    <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                                    <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                                    <li><span class="fa fa-check text-primary"></span>3 Database</li>
                                </ul> --}}
                                <h5 class="fw-bold">Performa</h5>
                                <ul>
                                    <li><span class="fa fa-check text-primary"></span> Ram 1 GB</li>
                                    <li><span class="fa fa-check text-primary"></span> 1 CPU Core</li>
                                    <li><span class="fa fa-check text-primary"></span> Dedicated Resource</li>
                                    <li><span class="fa fa-check text-primary"></span> Alamat IP Dedicated</li>
                                </ul>
                                <h5 class="fw-bold">Keamanan</h5>
                                <ul>
                                    <li><span class="fa fa-check text-primary"></span> Nameserver Dilindungi Cloudflare</li>
                                    <li><span class="fa fa-check text-primary"></span> Pemindai Malware</li>
                                </ul>
                                <h5 class="fw-bold">Bonus Gratis</h5>
                                <ul>
                                    <li><span class="fa fa-check text-primary"></span> Email Gratis</li>
                                </ul>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--  Paket Web Hosting Section End -->

    <!-- Kelebihan Penyedia Hosting Icommits Start -->
    <section class="kelebihan-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="fw-bold mx-5">Kelebihan IcommitsHost</h2>
                    <p class="fw-bold fs-6 mt-3">Layanan hosting terbaik dengan performa dan keamanan yang terjamin</p>
                </div>
            </div>
            <div class="row mb-4 mx-4 d-flex justify-content-center kelebihan-items" data-aos="fade-down-right" data-aos-duration="400000">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 mx-5 mt-5 mb-5 kelebihan-2">
                        <div class="col-lg-5">
                            <p class="fs-5 fw-semibold">Kinerja Cepat</p>
                        </div>

                        <h3 class="fw-bold mb-4">Bekerja lebih cepat dari manapun</h3>
                        <p class="fw-semibold" style="text-align: justify;">
                            Memberikan kinerja cepat yang mengesankan untuk situs web Anda.
                            Dengan menggunakan infrastruktur terkini dan teknologi terdepan, server kami dioptimalkan secara khusus untuk memberikan
                            waktu muat yang singkat, dan memastikan pengalaman pengguna yang lancar.
                            Jaringan yang kuat dan sumber daya yang dipersembahkan secara efisien.
                        </p>
                    </div>
                    <div class="col-lg-4 mt-3 kelebihan-2-img mt-5">
                        <div class="my-2 mx-3">
                            <img src="/image/kelebihan-2.png" class="rounded-5 mt-3"  alt="" >
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-5 kelebihan-1-img">
                    <div class="my-2">
                        <img src="/image/kelebihan-1.jpg" class="rounded-5 img" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mx-5 mt-5">
                    <div class="col-lg-5">
                        <p class="fs-5 fw-semibold">Daily Backup</p>
                    </div>
                    <h3 class="fw-bold mb-4">Backup kapanpun dimanapun</h3>
                    <p class="fw-semibold" style="text-align: justify;">
                        Jangan biarkan risiko kehilangan data atau kerusakan situs web mengganggu.
                        Dengan daily backup, kami secara otomatis melakukan salinan cadangan harian dari semua file dan data situs web Anda.
                        Tidak perlu khawatir tentang kehilangan data berharga atau waktu yang dihabiskan untuk mengembalikan situs web secara manual.
                    </p>
                </div>

                <div class="col-lg-6 mt-4 mx-5 mt-5">
                    <h4 class="fw-bold">Biaya Transparan</h4>
                    <p class="fw-semibold" style="text-align: justify;">
                        Kami percaya bahwa kejelasan dan keterbukaan adalah kunci dalam membangun hubungan yang kuat dengan pelanggan kami.
                        Tanpa ada biaya tersembunyi atau kejutan tak terduga, kami menyajikan paket harga yang jelas dan terinci,
                        sehingga dapat dengan mudah memahami apa yang Anda bayar dan apa yang didapatkan sebagai bagian dari layanan kami.
                    </p>
                </div>
                <div class="col-lg-3 mt-5">
                    <div class="my-2 mx-5">
                        <img src="/image/kelebihan-3.svg" class="rounded-5 img" alt="">
                    </div>
                </div>
        </div>
    </section>
    <!-- Kelebihan Penyedia Hosting Icommits End -->

    <!-- Discount Forever Start -->
    <section class="up-to-discount spad">
        <div class="container">
            <div class="row bg-dark p-5 rounded-5">
                <div class="col-lg-6 col-md-6">
                    <img src="/image/choose-plan.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="plan__text ">
                        <h3 class="text-white">Diskon hingga 70% dengan Domain Gratis yang dapat didaftarkan</h3>
                        <ul>
                            <li class="text-white"><span class="fa fa-check"></span> Gratis Nama Domain</li>
                            <li class="text-white"><span class="fa fa-check"></span> Gratis ALamat Email</li>
                            <li class="text-white"><span class="fa fa-check"></span> Ruang penyimpanan yang unlimited</li>
                            <li class="text-white"><span class="fa fa-check"></span> Gratis Website Builder</li>
                            <li class="text-white"><span class="fa fa-check"></span> Sekali klik buat install Wordpress</li>
                            <li class="text-white"><span class="fa fa-check"></span> Garansi 30 hari uang kembali</li>
                        </ul>
                        <a href="#" class="primary-btn">Dapatkan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount Forever Start -->

    <!-- Featured Partners Start -->
{{-- @if ($check_promo < 1)
<section></section>
@elseif ($check_promo >= 1) --}}
    <section class="services-section spad">
        <div class="container">
            <div class="row ">
                @foreach ($partner as $item )
                <div class="col-lg-12">
                    <div class="section-title-partner">
                        <h3>{{ $item->judul_section }}</h3>
                    </div>
                </div>
                @endforeach

                <div class="col">
                    <div class="swiper featured_customer mx-4">
                        <div class="swiper-wrapper">
                            @foreach ($partner as $partnerItem )
                                <div class="swiper-slide">
                                    <img src="/image/partner/{{ $partnerItem->logo }}" class="img-fluid" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="p-2"></div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- @endif --}}
    <!-- Featured Partners End -->

    <!-- FAQ Start -->
    <section class="faq spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex align-items-center">
                    <img src="/image/faq.png" alt="">
                    {{-- <h1 class="text-center fw-bold mx-5 text-light">FAQ <br>
                        <span><p class="text-light fw-bold fs-5">Frequently Ask Question</p></span>
                    </h1> --}}
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="faq-body rounded-4 p-3 mb-5">
                        <div class="faq-title">
                            <a href="#faqOne" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqOne">
                                <h4 class="text-light fw-bold mb-0">Apa itu hosting?</h4>
                            </a>
                            <a href="#faqOne" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqOne" onclick="toggleIcon(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </a>
                        </div>
                        <hr style="border: 2px solid;">
                        <div class="faq-answer collapse" id="faqOne">
                            <p class="text-light">Hosting adalah layanan penyimpanan data website sehingga dapat diakses secara online oleh semua orang. Tanpa hosting, Anda tidak akan bisa membuat website. Kualitas layanan hosting menentukan cepat atau lambatnya suatu website diakses. Penyedia layanan hosting harus bertanggung jawab atas kecepatan dan uptime dari server yang dikelola. Oleh karena itu, saran kami selalu pilih penyedia layanan hosting terbaik untuk menemani perjalanan Anda di dunia digital!</p>
                        </div>
                    </div>
                    <div class="faq-body rounded-4 p-3 mb-5">
                        <div class="faq-title">
                            <a href="#faqTwo" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqTwo">
                                <h4 class="text-light fw-bold mb-0">Mengapa saya harus menggunakan web hosting dari Icommits hosting?</h4>
                            </a>
                            <a href="#faqTwo" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqTwo" onclick="toggleIcon(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </a>
                        </div>
                        <hr style="border: 2px solid;">
                        <div class="faq-answer collapse" id="faqTwo">
                            <p class="text-light">Icommits Hosting menyediakan beberapa siklus pembayaran web hosting Indonesia yang akan sangat memudahkan Anda, yaitu siklus pembayaran 1 jam, 2 bulan, dan 1 tahun.
                                Bagi Anda yang akan sedang mencoba layanan kami bisa memilih siklus pembayaran mulai 1 jam, jika berlanjut Anda bisa mengganti dengan siklus tahunan.</p>
                        </div>
                    </div>
                    <div class="faq-body rounded-4 p-3 mb-5">
                        <div class="faq-title">
                            <a href="#faqThree" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqThree">
                                <h4 class="text-light fw-bold mb-0">Mengapa bisnis dan UMKM harus memiliki website?</h4>
                            </a>
                            <a href="#faqThree" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqThree" onclick="toggleIcon(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </a>
                        </div>
                        <hr style="border: 2px solid;">
                        <div class="faq-answer collapse" id="faqThree">
                            <p class="text-light">Website adalah salah satu bentuk digital marketing yang paling populer saat ini, dengan memiliki website Anda bisa menjangkau pembeli tidak hanya di Indonesia saja, tetapi Anda bisa menjangkau target pasar yang lebih luas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Start -->

</body>
@include('partials.jsPlugin')
@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 2000, // Atur delay di sini (dalam milidetik)
            disableOnInteraction: false, // Biarkan slide berjalan walaupun ada interaksi pengguna
        },
        direction: 'horizontal',
        loop: false,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            // clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
        },
        slidesPerView: 4,
        spaceBetween: 30,
    });
</script>



</html>
