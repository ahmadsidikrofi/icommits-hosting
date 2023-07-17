<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
    @include('partials.Firstnavbar')
    <!-- Hero Section Begin -->
    <section class="hero-section ">
        <div class="hero__slider owl-carousel z-0">
            <div class="hero__item set-bg" data-setbg="/image/hero/hero-1-unlimited-hosting.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5><span class="shadow rounded-4 bg-danger p-1 get-packet">Mulai</span> Rp9000/bulan</h5>
                                <h2>Menghadirkan Website Impian Anda dengan Layanan Hosting Terbaik!</h2>
                                <p class="text-light fs-5 lh-lg">
                                    Kami menawarkan paket web hosting yang lengkap dengan fitur terbaik dan harga yang terjangkau. Jangan lewatkan kesempatan ini!
                                </p>
                                <a href="#promo" class="btn btn-outline-primary fw-semibold">Lihat Daftar Promo Terbaru</a>
                            </div>
                        </div>
                        <div class="col-lg-6 z-1">
                            <div class="hero-right-unlimited-hosting ">
                                <img src="/image/hero/hero-right-unlimited-hosting.png" class="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>
</html>
