<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<style>
    .section-title__wrapper {
        margin-bottom: -30px; /* Sesuaikan ukuran padding sesuai kebutuhan */
    }
</style>
<body>
    @include('partials.Firstnavbar')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class=" z-0">
            <div class="hero__item set-bg" data-setbg="/image/hero/{{ $hero->image_background }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5 class="text-light"><span class="shadow rounded-4 bg-danger p-1 get-packet">Mulai</span> {{ $hero->mini_title }}</h5>
                                <h2>{{ $hero->title_hero }}</h2>
                                <p class="text-light fs-5 lh-lg">
                                    {{ $hero->deskripsi }}
                                </p>
                                @if ($hero->link_button === NULL)

                                @else
                                    <a href="#promo" class="btn btn-dark rounded-pill fw-semibold">{{ $hero->link_button }}</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 z-1">
                            <div class="hero-right">
                                <img src="/image/hero/{{ $hero->image_right }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    @if ($check_service < 1)
    <section></section>
    @elseif ($check_service >= 1)
    <section class="spad">
        <div class="container">
            @foreach ( $services_section as $service)
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title__wrapper">
                        <div class="section-title">
                            <h3>{{ $service->section_title }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row mt-0">
                @foreach ($services_section as $service)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="services__item_wrapper">
                            <div class="services__item">
                                <h5>{{ $service->services_title }}</h5>
                                <span>{{ $service->services_price }}</span>
                                <p>{{ $service->services_deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

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
                        <h4>Hosting Bisnis</h4>
                        <p>Untuk blog dan website sederhana</p>
                        <h3>Rp25.000 <span>/ bulan</span></h3>
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
                    <div class="harga_paket">
                        <h4>Hosting Bisnis</h4>
                        <p>Untuk blog dan website sederhana</p>
                        <h3>Rp25.000 <span>/ bulan</span></h3>
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
                    <div class="harga_paket">
                        <h4>Hosting Bisnis</h4>
                        <p>Untuk blog dan website sederhana</p>
                        <h3>Rp25.000 <span>/ bulan</span></h3>
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

            <!-- Paket Tahunan -->
            <div class="row paket_tahunan">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="harga_paket">
                        <h4>Hosting Bisnis</h4>
                        <p>Untuk blog dan website sederhana</p>
                        <h3>Rp46.900 <span>/ tahun</span></h3>
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
    <!--  Paket Web Hosting Section End -->

    <!-- Paket Web Hosting Unlimited New Form Section Start -->
    <!-- Hosting Section Begin -->
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
                                                        <span>Fitur Unlimited Hosting</span>
                                                        <div class="chose__title">PILIH PAKETMU SEKARANG!</div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Started</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">Rp9.000</div>
                                                            <span>Bulan</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Beli Sekarang</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Business</div>
                                                        <div class="hosting__feature--price">
                                                            <div class="plan__price">Rp9.000</div>
                                                            <span>Bulan</span>
                                                        </div>
                                                        <a href="#" class="primary-btn">Beli Sekarang</a>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="hosting__feature--plan">
                                                        <div class="plan__title">Premium</div>
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
                                                <td class="hosting__feature--check"><span
                                                    class="fa fa-check-circle-o"></td>
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
                                                <td class="hosting__feature--close"><span
                                                        class="fa fa-times-circle-o"></span></td>
                                                <td class="hosting__feature--check"><span
                                                    class="fa fa-check-circle-o"></td>
                                                    <td class="hosting__feature--check"><span
                                                        class="fa fa-check-circle-o"></td>
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
    <!-- Hosting Section End -->
    <!-- Paket Web Hosting Unlimited New Form Section End -->

    <!-- Cari Domain Section Start -->
    <section class="search-domain-hosting spad">
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
                                <button type="submit" class="site-btn">Search</button>
                            </form>
                        </div>
                        <div class="register__result">
                            <ul>
                                <li class="">.com <span class="text-secondary fw-semibold fs-6">Rp249.000</span></li>
                                <li class="">.net <span class="text-secondary fw-semibold fs-6">Rp199.000</span></li>
                                <li class="">.org <span class="text-secondary fw-semibold fs-6">Rp169.000</span></li>
                                <li class="">.store <span class="text-secondary fw-semibold fs-6">Rp279.000</span></li>
                            </ul>
                        </div>
                        <p>Temukan nama domain situs web premium yang sempurna dari Icommits & dapatkan kehadiran terbaik di internet.
                            Dengan investasi kecil mendapatkan keuntungan besar!.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cari Domain Section End -->

    <!-- FAQ Start -->
    <section class="faq spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 d-flex align-items-center">
                    <h1 class="text-center fw-bold mx-5 text-light">FAQ <br>
                        <span><p class="text-light fw-bold fs-5">Frequently Ask Question</p></span>
                    </h1>
                </div>
                <div class="col-lg-8 col-md-8">
                    @foreach ($pertanyaan as $question => $item)
                        @if ($item->kategori === "Unlimited Hosting")
                            <div class="faq-body rounded-4 p-3 mb-5">
                                <div class="faq-title">
                                    <a href="#faqOne{{ $question }}" class="faq-question text-decoration-none" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqOne">
                                        <h4 class="text-light fw-bold mb-0">{{ $item->pertanyaan }}</h4>
                                    </a>
                                    <a href="#faqOne{{ $question }}" class="faq-toggle text-decoration-none mx-5" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faqOne" onclick="toggleIcon(this)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#eeeffb" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                        </svg>
                                    </a>
                                </div>
                                <hr style="border: 2px solid;">
                                <div class="faq-answer collapse" id="faqOne{{ $question }}">
                                    <p class="text-light">{{ $item->jawaban }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
            </div>
        </div>
    </section>
    <!-- FAQ Start -->

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>
</html>
