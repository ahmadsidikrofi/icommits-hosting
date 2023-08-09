<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    {{-- @include('partials.Firstnavbar') --}}

    <!-- Hero Section Begin -->
    <section class="hero-section ">
        <div class="hero__slider owl-carousel z-0">
            <div class="hero__item set-bg " data-setbg="/image/hero/AstronautNight.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5><span class="shadow rounded-4 bg-danger p-1 get-packet">Mulai</span> Rp9000/bulan</h5>
                                <h2>NIKMATI VPS DENGAN HARGA TERJANGKAU</h2>
                                <p class="text-light fs-5 lh-lg">
                                    Rasakan fleksibilitas yang lebih tinggi, kinerja yang lebih cepat, dan kemampuan yang lebih kuat untuk menunjang kebutuhan bisnis atau proyek Anda.
                                </p>
                                <a href="#promo" class="btn btn-outline-primary fw-semibold">LIHAT PENAWARAN</a>
                            </div>
                        </div>
                        <div class="col-lg-6 z-1">
                            <div class="hero-right-unlimited-hosting ">
                                <img src="img/hero/hero-right-unlimited-hosting.png" class="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Paket VPS Section Start -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="section-title normal-title">
                        <h3>PILIH PAKET VPS</h3>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="pricing__swipe-btn">
                        <label for="bulanan" class="active">Bulanan
                            <input type="radio" id="bulanan">
                        </label>
                        <label for="tahunan">Tahunan
                            <input type="radio" id="tahunan">
                        </label>
                    </div>
                </div>
            </div>
            <!-- Paket Bulanan -->
            <div class="row paket_bulanan active">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="harga_paket">
                        <h4>VPS #1</h4>
                        <p>Untuk memulai bisnis online Anda</p>
                        <h3>Rp25.000 <span>/ bulan</span></h3>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span>1 vCPU Core</li>
                            <li><span class="fa fa-check text-primary"></span>RAM 4 GB</li>
                            <li><span class="fa fa-check text-primary"></span>50 GB NVMe Disk space</li>
                            <li><span class="fa fa-check text-primary"></span>1 TB Bandwidth</li>
                            <li><span class="fa fa-check text-primary"></span>1 Snapshot</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Alamat IP Dedicated</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="harga_paket">
                        <h4>VPS #2</h4>
                        <p>Pengalaman online lebih kuat & stabil</p>
                        <h3>Rp25.000 <span>/ bulan</span></h3>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span>2 vCPU Core</li>
                            <li><span class="fa fa-check text-primary"></span>RAM 8 GB</li>
                            <li><span class="fa fa-check text-primary"></span>100 GB NVMe Disk space</li>
                            <li><span class="fa fa-check text-primary"></span>2 TB Bandwidth</li>
                            <li><span class="fa fa-check text-primary"></span>1 Snapshot</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Alamat IP Dedicated</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="harga_paket">
                        <h4>VPS #3</h4>
                        <p>Keamanan dan Sumber Daya Tinggi</p>
                        <h3>Rp25.000 <span>/ bulan</span></h3>
                        <ul>
                            <li><span class="fa fa-check text-primary"></span>3 vCPU Core</li>
                            <li><span class="fa fa-check text-primary"></span>RAM 16 GB</li>
                            <li><span class="fa fa-check text-primary"></span>150 GB NVMe Disk space</li>
                            <li><span class="fa fa-check text-primary"></span>3 TB Bandwidth</li>
                            <li><span class="fa fa-check text-primary"></span>1 Snapshot</li>
                            <li><span class="fa fa-check text-primary"></span>Backup Mingguan</li>
                            <li><span class="fa fa-check text-primary"></span>Alamat IP Dedicated</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Paket VPS Section End -->

    <!-- Paket VPS New Form Section Start -->
    <!-- VPS Section Begin -->
    <section class="hosting-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hosting__text">
                        <ul class="nav nav-tabs" role="tablist">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="hosting__feature__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="hosting__feature__plan--choose">
                                                        <span>VPS</span>
                                                        <div class="chose__title">PILIH PAKETMU SEKARANG!</div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">VPS #1</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">Rp9.000</div>
                                                            <span>Bulan</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Beli Sekarang</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">VPS #2</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">Rp9.000</div>
                                                            <span>Bulan</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Beli Sekarang</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">VPS #3</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">Rp9.000</div>
                                                            <span>Bulan</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Beli Sekarang</a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="hosting__feature--item">Number of Websites</td>
                                                <td class="hosting__feature--info">1 Website</td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                                <td class="hosting__feature--info">Multiple Websites
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Domain Registration</td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Web Space</td>
                                                <td class="hosting__feature--info">5,000MB</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Email Accounts</td>
                                                <td class="hosting__feature--info">25</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">MySQL Databases</td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free App Store</td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                                <td class="hosting__feature--check">
                                                    <span class="fa fa-check-circle-o"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">cPanel Control Panel</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Daily Backups</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Search Engine Optimization</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">99.9% Uptime Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Bandwidth</td>
                                                <td class="hosting__feature--info">20GB</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Free Setup</td>
                                                <td class="hosting__feature--info">$ 1.99</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Advanced Security Features</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                                <td class="hosting__feature--info">Extra</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Cloud Hosting</td>
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                                <td class="hosting__feature--info">$ 250.0</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">24/7/365 Support</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">Website Builder</td>
                                                <td class="hosting__feature--info">1</td>
                                                <td class="hosting__feature--info">50</td>
                                                <td class="hosting__feature--info">Unlimited</td>
                                            </tr>
                                            <tr>
                                                <td class="hosting__feature--item">30 Day Money Back Guarantee</td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- VPS End -->
    <!-- Paket VPS New Form Section End -->

        <!-- Kelebihan vps Start -->
        <section class="up-to-discount spad">
            <div class="container">
                <div class="row p-5">
                    <div class="col-lg-6 col-md-6">
                        <img src="/image/roket.png" width="400">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="plan__text ">
                            <ul class="">
                                <li class="fs-3 mb-5"><span class="icon_check_alt"></span> SSD dan Processing Power</li>
                                <li class="fs-3 mb-5"><span class="icon_check_alt"></span> Kecepatan 100 Mb/s</li>
                                <li class="fs-3 mb-5"><span class="icon_check_alt"></span> Backup & Snapshot</li>
                                <li class="fs-3 mb-5"><span class="icon_check_alt"></span> Gratis Website Builder</li>
                                <li class="fs-3 mb-5"><span class="icon_check_alt"></span> IPv6 Dedicated</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Kelebihan vps end -->

    <!-- FAQ Start -->
    <section class="faq spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex align-items-center">
                    <img src="/image/faq.png" alt="">
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="faq-body rounded-4 p-3 mb-5">
                        <div class="faq-title">
                            <a href="#faqOne" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqOne">
                                <h4 class="text-light fw-bold mb-0">Apa itu Hosting ?</h4>
                            </a>
                            <a href="#faqOne" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqOne" onclick="toggleIcon(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </a>
                        </div>
                        <hr style="border: 2px solid;">
                        <div class="faq-answer collapse" id="faqOne">
                            <p class="text-light">
                                Hosting adalah layanan penyimpanan data website sehingga dapat diakses secara online oleh semua orang. 
                                Tanpa hosting, Anda tidak akan bisa membuat website. 
                                Kualitas layanan hosting menentukan cepat atau lambatnya suatu website diakses. 
                                Penyedia layanan hosting harus bertanggung jawab atas kecepatan dan uptime dari server yang 
                                dikelola. Oleh karena itu, saran kami selalu pilih penyedia layanan hosting terbaik untuk 
                                menemani perjalanan Anda di dunia digital!
                            </p>
                        </div>
                    </div>
                    <div class="faq-body rounded-4 p-3 mb-5">
                        <div class="faq-title">
                            <a href="#faqTwo" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqTwo">
                                <h4 class="text-light fw-bold mb-0">Mengapa saya harus menggunakan web hosting dari namahost?</h4>
                            </a>
                            <a href="#faqTwo" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqTwo" onclick="toggleIcon(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </a>
                        </div>
                        <hr style="border: 2px solid;">
                        <div class="faq-answer collapse" id="faqTwo">
                            <p class="text-light">
                                Hosting adalah layanan penyimpanan data website sehingga dapat diakses secara online oleh semua orang. 
                                Tanpa hosting, Anda tidak akan bisa membuat website. 
                                Kualitas layanan hosting menentukan cepat atau lambatnya suatu website diakses. 
                                Penyedia layanan hosting harus bertanggung jawab atas kecepatan dan uptime dari server yang 
                                dikelola. Oleh karena itu, saran kami selalu pilih penyedia layanan hosting terbaik untuk 
                                menemani perjalanan Anda di dunia digital!
                            </p>
                        </div>
                    </div>
                    <div class="faq-body rounded-4 p-3 mb-5">
                        <div class="faq-title">
                            <a href="#faqThree" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqThree">
                                <h4 class="text-light fw-bold mb-0">Apa itu domain?</h4>
                            </a>
                            <a href="#faqThree" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqThree" onclick="toggleIcon(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </a>
                        </div>
                        <hr style="border: 2px solid;">
                        <div class="faq-answer collapse" id="faqThree">
                            <p class="text-light">
                                Hosting adalah layanan penyimpanan data website sehingga dapat diakses secara online oleh semua orang. 
                                Tanpa hosting, Anda tidak akan bisa membuat website. 
                                Kualitas layanan hosting menentukan cepat atau lambatnya suatu website diakses. 
                                Penyedia layanan hosting harus bertanggung jawab atas kecepatan dan uptime dari server yang 
                                dikelola. Oleh karena itu, saran kami selalu pilih penyedia layanan hosting terbaik untuk 
                                menemani perjalanan Anda di dunia digital!
                            </p>
                        </div>
                    </div>
                    <div class="faq-body rounded-4 p-3 mb-5">
                        <div class="faq-title">
                            <a href="#faqFour" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqFour">
                                <h4 class="text-light fw-bold mb-0">Apa keuntungan sertifikat SSL?</h4>
                            </a>
                            <a href="#faqFour" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqFour" onclick="toggleIcon(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                </svg>
                            </a>
                        </div>
                        <hr style="border: 2px solid;">
                        <div class="faq-answer collapse" id="faqFour">
                            <p class="text-light">
                                Hosting adalah layanan penyimpanan data website sehingga dapat diakses secara online oleh semua orang. 
                                Tanpa hosting, Anda tidak akan bisa membuat website. 
                                Kualitas layanan hosting menentukan cepat atau lambatnya suatu website diakses. 
                                Penyedia layanan hosting harus bertanggung jawab atas kecepatan dan uptime dari server yang 
                                dikelola. Oleh karena itu, saran kami selalu pilih penyedia layanan hosting terbaik untuk 
                                menemani perjalanan Anda di dunia digital!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Start -->

</body>

    <!-- Js Plugins -->
    @include('partials.jsPlugin')

    <!-- Footer-->
    @include('partials.footer')
</body>

</html>