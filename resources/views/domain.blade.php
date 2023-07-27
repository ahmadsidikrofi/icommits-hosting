<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<link rel="stylesheet" href="/css/plan_pro.css">
<body>
    @include('partials.Firstnavbar')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="">
            <div class="hero_item_domain set-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="cek_domain">
                                <div class="section-title">
                                    <h3 class="fs-4 mt-5"> {{ $hero->title_hero }} </h3>
                                    <p class="text-light fs-6 mt-2">{{ $hero->mini_title }}</p>
                                </div>
                                <div class="form_cek_domain">
                                    <form action="#">
                                        <input type="text" placeholder="Cek Nama Domain">
                                        <button type="submit" class="site-btn">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Card Extension Start -->
    <section class="card_extension spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-8 mb-5">
                    <div class="plan">
                        <div class="inner">
                            <span class="pricing">
                                <span>
                                    20% <small>OFF</small>
                                </span>
                            </span>
                            <img src="/image/extension_id.png" class="mb-3" alt="">
                            <p class="info">Domain ekstensi Indonesia yang ringkas dan dapat dengan mudah diingat</p>
                            <ul class="features">
                                <small class="text-decoration-line-through text-center">Rp 275.000</small>
                                <strong class="text-center fw-1"> Rp 210.000 <span>/tahun</span></strong>
                            </ul>
                            <div class="action">
                            <a class="button" href="#">
                                Beli
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-8 mb-5">
                    <div class="plan">
                        <div class="inner">
                            <span class="pricing">
                                <span>
                                    20% <small>OFF</small>
                                </span>
                            </span>
                            <img src="/image/extension_com.png" class="mb-3 w-50" alt="">
                            <p class="info">Menciptakan kepercayaan melalui penggunaan domain terbaik</p>
                            <p class="domain_terpopuler">Terpopuler</p>
                            <ul class="features">
                                <small class="text-decoration-line-through text-center">Rp 145.000</small>
                                <strong class="text-center fw-1"> Rp 107.700 <span>/tahun</span></strong>
                            </ul>
                            <div class="action">
                            <a class="button" href="#">
                                Beli
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-8">
                    <div class="plan">
                        <div class="inner">
                            <span class="pricing mb-5">
                                <span>
                                    20% <small>OFF</small>
                                </span>
                            </span>
                            <img src="/image/extension_xyz.png" class="mb-3 mt-1" width="180" alt="">
                            <p class="info">Domain yang unik & sedang tren untuk kesuksesan bisnis Anda.</p>
                            <ul class="features">
                                <small class="text-decoration-line-through text-center">Rp 55.000</small>
                                <strong class="text-center fw-1"> Rp 46.200 <span>/tahun</span></strong>
                            </ul>
                            <div class="action">
                            <a class="button" href="#">
                                Beli
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Extension End -->

    <section class="get_domain_migration spad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/image/migration_truck.png" alt="">
                </div>
                <div class="col-sm-6">
                    <h4 class="mb-3">Migrasi Domainmu Ke IcommitHost</h4>
                    <p> Dapatkan kenyamanan yang lebih dengan menggabungkan hosting dan domain dalam satu layanan.
                        Migrasikan nama domain yang Anda miliki ke namahost
                    </p>
                    <a class="btn btn-light" href="#">Migrasi Hosting</a>
                </div>
            </div>
        </div>
    </section>

    <section class="keuntungan_section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="fw-bold mx-5">Apa Keuntungan Membeli Domain melalui namahost?</h3>
                    <p class="fw-bold fs-6 mt-3">Layanan hosting terbaik dengan performa dan keamanan yang terjamin</p>
                </div>
            </div>
            <div class="row mb-4 mx-4 d-flex justify-content-center keuntungan-items" data-aos="fade-down-right" data-aos-duration="400000">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 mx-5 mt-5 mb-5 keuntungan-1">
                        <div class="col-lg-5">
                            <p class="fs-5 fw-semibold">Terpercaya</p>
                        </div>

                        <h3 class="fw-bold mb-4">Bekerja lebih cepat dari manapun</h3>
                        <p class="fw-semibold" style="text-align: justify;">
                            namahost telah disertifikasi oleh ICANN sebagai pihak yang sah dalam menyediakan domain berkualitas.
                            Di samping itu, namahost juga memberikan layanan hosting web yang beragam untuk memenuhi kebutuhan Anda.
                        </p>
                    </div>
                    <div class="col-lg-4 mt-3 keuntungan-1-img mt-5">
                        <div class="my-2 mx-3">
                            <img src="/image/keuntungan-1.png" class="rounded-5 mt-3"  alt="" >
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-5 keuntungan-2-img">
                    <div class="my-2">
                        <img src="/image/keuntungan-2.png" width="280" class="rounded-5 img" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mx-5 mt-5 keuntungan-2">
                    <div class="col-lg-5">
                        <p class="fs-5 fw-semibold">Limpahan extensi</p>
                    </div>
                    <h3 class="fw-bold mb-4">Banyak Pilihan Ekstensi</h3>
                    <p class="fw-semibold" style="text-align: justify;">
                        Melalui namahost, Anda memiliki akses lebih dari 50 ekstensi domain yang berbeda,
                        memberi peluang yang luas untuk mendapatkan nama domain terbaik yang sesuai dengan kebutuhan Anda.
                        Jangan lewatkan kesempatan untuk memiliki domain untuk mencerminkan identitas Anda atau bisnis Anda.
                    </p>
                </div>

                <div class="col-lg-6 mt-4 mx-5 mt-5">
                    <h3 class="fw-bold mb-4">Aktivasi Cepat</h3>
                    <p class="fw-semibold" style="text-align: justify;">
                        Periksa ketersediaan nama domain yang Anda inginkan, lakukan pemesanan, dan
                        segera lakukan pembayaran.  Setelah melakukan pembelian domain,
                        Anda dapat mengalihkan nama domain ke situs web dengan mudah
                        dan cepat hanya dalam sekali klik.
                    </p>
                </div>
                <div class="col-lg-3 mt-5 keuntungan-3-img">
                    <div class="my-2 mx-5">
                        <img src="/image/keuntungan-3.png" width="" class="rounded-5 img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>

</html>
