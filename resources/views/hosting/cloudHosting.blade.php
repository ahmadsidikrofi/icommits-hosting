<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
    @include('partials.Firstnavbar')
    <!-- Hero Section Begin -->
    <section class="hero-section ">
        <div class="hero_cloud_hosting z-0">
            <div class="hero__item set-bg" data-setbg="/image/hero/hero-cloud-hosting.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                {{-- <h5><span class="shadow rounded-4 bg-danger p-1 get-packet">Mulai</span> Rp9000/bulan</h5> --}}
                                <h2>website anti ribet, bikin bisnismu makin ngembang.</h2>
                                <p class="text-light fs-5 lh-lg">
                                    Kami menawarkan paket web hosting yang lengkap dengan fitur terbaik dan harga yang terjangkau. Jangan lewatkan kesempatan ini!
                                </p>
                                <a href="#promo" class="btn btn-primary rounded-5 p-3 fw-semibold">Meluncur Sekarang!</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-right-cloud">
                                {{-- <img src="/image/hero/hero-right.png" alt=""> --}}
                                <img src="/image/hero/hero-right-cloud-hosting.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Description Cloud Host Section Start -->
    <section class="description_cloud spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="description_text">
                        <h2 class="">Ambil paket terbaikmu, sesuaikan dengan <br> tingkat kebutuhan</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <div class="description_img">
                        <img src="/image/bag.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row mx-4 mt-5">
                <div class="col-lg-11 mx-5">
                    <p class="fw-medium fs-5 lh-lg">
                        Tersedia berbagai pilihan paket Cloud Hosting sesuai kebutuhan Anda.
                        Nikmati sumber daya besar, akses super cepat, dan website selalu online.
                        Setiap paketnya turut dilengkapi fitur pengelolaan terintegrasi untuk
                        optimasi website lebih baik.
                    </p>
                </div>
            </div>
    </section>
    <!-- Description Cloud Host Section End -->


    <!-- Pricing Section Cloud Hosting Start -->
    <section class="pricing-section-cloud-hosting spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 mx-auto mb-5">
                    <div class="pricing__swipe-paket-cloud-btn">
                        <label for="cloud_starter" class="active">Cloud Starter
                            <input type="radio" id="cloud_starter">
                        </label>
                        <label for="cloud_pro">Cloud Pro
                            <input type="radio" id="cloud_pro">
                        </label>
                    </div>
                </div>
            </div>
            <!-- Paket Cloud Starter -->
            <div class="row paket_cloud_starter active">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tipe_paket">
                        <h4>Paket Cloud S1</h4>
                        <div class="diskon_paket_cloud">
                            <label>Diskon 90% Rp 1.000 /jam</label>
                        </div>
                        <h3>Rp100 <span>/ jam</span></h3>
                        <h5 class="fw-bold">Paket Unggulan</h5>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                            <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                            <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                            <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                            <li><span class="fa fa-check text-primary"></span>3 Database</li>
                        </ul>
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tipe_paket">
                        <h4>Paket Cloud S2</h4>
                        <div class="diskon_paket_cloud">
                            <label>Diskon 68% Rp 2.000 /jam</label>
                        </div>
                        <h3>Rp640 <span>/ jam</span></h3>
                        <h5 class="fw-bold">Paket Unggulan</h5>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                            <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                            <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                            <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                            <li><span class="fa fa-check text-primary"></span>3 Database</li>
                        </ul>
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tipe_paket">
                        <h4>Paket Cloud S3</h4>
                        <div class="diskon_paket_cloud">
                            <label>Diskon 89% Rp 4.000 /jam</label>
                        </div>
                        <h3>Rp440 <span>/ jam</span></h3>
                        <h5 class="fw-bold">Paket Unggulan</h5>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                            <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                            <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                            <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                            <li><span class="fa fa-check text-primary"></span>3 Database</li>
                        </ul>
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
            </div>

            <!-- Paket Cloud Pro -->
            <div class="row paket_cloud_pro hidden">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tipe_paket">
                        <h4>Paket Cloud P1</h4>
                        <div class="diskon_paket_cloud">
                            <label>Diskon 66% Rp 7.000 /jam</label>
                        </div>
                        <h3>Rp2.380 <span>/ jam</span></h3>
                        <h5 class="fw-bold">Paket Unggulan</h5>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                            <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                            <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                            <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                            <li><span class="fa fa-check text-primary"></span>3 Database</li>
                        </ul>
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tipe_paket">
                        <h4>Paket Cloud P2</h4>
                        <div class="diskon_paket_cloud">
                            <label>Diskon 75% Rp 10.000 /jam</label>
                        </div>
                        <h3>Rp2.500 <span>/ jam</span></h3>
                        <h5 class="fw-bold">Paket Unggulan</h5>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                            <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                            <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                            <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                            <li><span class="fa fa-check text-primary"></span>3 Database</li>
                        </ul>
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tipe_paket">
                        <h4>Paket Cloud P3</h4>
                        <div class="diskon_paket_cloud">
                            <label>Diskon 89% Rp 15.000 /jam</label>
                        </div>
                        <h3>Rp1.950 <span>/ jam</span></h3>
                        <h5 class="fw-bold">Paket Unggulan</h5>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span> 100 GB SSD Storage</li>
                            <li><span class="fa fa-check text-primary"></span>Unlimited Bandwith</li>
                            <li><span class="fa fa-check text-primary"></span>Domain Gratis (Senilai Rp147.900)</li>
                            <li><span class="fa fa-check text-primary"></span>SSL Gratis Unlimited</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Gratis Premium Web Builder</li>
                            <li><span class="fa fa-check text-primary"></span>3 Database</li>
                        </ul>
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
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->
</body>
    {{-- JS Plugin --}}
    @include('partials.jsPlugin')
</html>
