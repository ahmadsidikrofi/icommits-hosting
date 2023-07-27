<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
    @include('partials.Firstnavbar')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="">
            <div class="hero__item set-bg" data-setbg="/image/hero/{{ $hero->image_background }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5><span class="shadow rounded-4 bg-danger p-1 get-packet">Mulai</span> {{ $hero->mini_title }}</h5>
                                <h2>{{ $hero->title_hero }}</h2>
                                <p class="text-light fs-5 lh-lg">
                                    {{ $hero->deskripsi }}
                                </p>
                                @if ($hero->link_button === NULL)

                                @else
                                    <a href="#promo" class="btn btn-outline-primary fw-semibold">
                                        {{ $hero->link_button }}
                                    </a>
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

    <!-- Promo Section Start -->
    <section class="promo-section spad" id="promo">
        <div class="container">
            @foreach ($promo as $item )
            <div class="row mb-5">
                <div class="col">
                    <h2 class="fw-medium text-center lh-base" style="color: #1f72db;">{{ $item->title_promo }}</h2>
                    <p class="text-lg-center fs-6 mt-3 fw-semibold">{{ $item->mini_title_promo }}</p>
                </div>   
            </div>
            @endforeach
            <div class="row">
                @foreach ($promo as $promo )
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="promo_card">
                            <div class="promo_pic set-bg " data-setbg="/image/{{ $promo->image }}">
                                <div class="label">{{ $promo->mini_title_card }}</div>
                            </div>
                            <div class="promo_text">
                                <h5 class="mb-2"><a href="#">{{ $promo->title_card }}</a></h5>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> <span class="fw-semibold">Berlaku Hingga</span></li>
                                    <li class="p-2 rounded-bottom">
                                        <h6>
                                            <?php
                                            $expiredDateTime = new DateTime($promo->expired_at);
                                            $now = new DateTime();
                                            $interval = $now->diff($expiredDateTime);
                                            ?>
                                            <span class="fw-bold mx-1">{{ $interval->days }} hari {{ $interval->h }} jam {{ $interval->i }} menit</span>
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                            <a href="/hosting-unlimited" class="btn btn-go-link w-100 mt-2">{{ $promo->link_promo }}</a></>
                        </div>       
                    </div>
                    @endforeach
                {{-- <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="promo_card">
                        <div class="promo_pic set-bg " data-setbg="image/blog/blog-5.jpg">
                            <div class="label">Promo Hosting UMKM</div>
                        </div>
                        <div class="promo_text">
                            <h5 class="mb-2"><a href="#">Promo Diskon 40% Hosting UMKM & Personal</a></h5>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> <span class="fw-semibold">Berlaku Hingga</span></li>
                                <li class="p-2 rounded-bottom">
                                    <h6>
                                        <span class="fw-bold mx-1">35</span>
                                        <span class="text-secondary fw-bold mx-1">hari</span>
                                        <span class="fw-bold mx-1">12</span>
                                        <span class="text-secondary fw-bold mx-1">jam</span>
                                        <span class="fw-bold mx-1">00</span>
                                        <span class="text-secondary fw-bold mx-1">menit</span>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-go-link w-100 mt-2">Dapatkan Promo!</a></>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="promo_card">
                        <div class="promo_pic set-bg " data-setbg="image/blog/blog-5.jpg">
                            <div class="label">Promo Hosting UMKM</div>
                        </div>
                        <div class="promo_text">
                            <h5 class="mb-2"><a href="#">Promo Diskon 40% Hosting UMKM & Personal</a></h5>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> <span class="fw-semibold">Berlaku Hingga</span></li>
                                <li class="p-2 rounded-bottom">
                                    <h6>
                                        <span class="fw-bold mx-1">35</span>
                                        <span class="text-secondary fw-bold mx-1">hari</span>
                                        <span class="fw-bold mx-1">12</span>
                                        <span class="text-secondary fw-bold mx-1">jam</span>
                                        <span class="fw-bold mx-1">00</span>
                                        <span class="text-secondary fw-bold mx-1">menit</span>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-go-link w-100 mt-2">Dapatkan Promo!</a></>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="promo_card">
                        <div class="promo_pic set-bg " data-setbg="image/blog/blog-1.jpg">
                            <div class="label">Promo Hosting UMKM</div>
                        </div>
                        <div class="promo_text">
                            <h5 class="mb-2"><a href="#">Promo Diskon 40% Hosting UMKM & Personal</a></h5>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> <span class="fw-semibold">Berlaku Hingga</span></li>
                                <li class="p-2 rounded-bottom">
                                    <h6>
                                        <span class="fw-bold mx-1">35</span>
                                        <span class="text-secondary fw-bold mx-1">hari</span>
                                        <span class="fw-bold mx-1">12</span>
                                        <span class="text-secondary fw-bold mx-1">jam</span>
                                        <span class="fw-bold mx-1">00</span>
                                        <span class="text-secondary fw-bold mx-1">menit</span>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-go-link w-100 mt-2">Dapatkan Promo!</a></>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Promo Section End -->

    <!-- Promo Menarik yang kelewatan Start -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="text-uppercase">Jangan Lewatkan Kesempatan Promo Yang Menarik</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="5em" fill="#4589c9" viewBox="0 0 448 512">
                            <path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                        </svg>
                        <h5>Promo Diskon Terkini</h5>
                        <p>Pastikan Anda mengikuti perkembangan terbaru agar dapat memanfaatkan harga termurah yang kami tawarkan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="5em" fill="#4589c9" viewBox="0 0 448 512">
                            <path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                        </svg>
                        <h5>Layanan Bermutu dan Berjasa</h5>
                        <p>Didukung oleh teknologi mutakhir sehingga meningkatkan kinerja situs web menjadi lebih optimal dan stabil.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="5em" fill="#4589c9" viewBox="0 0 448 512">
                            <path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                        </svg>
                        <h5>Lebih hemat dengan namahost</h5>
                        <p>Promo diskon tersedia di beberapa layanan dan terdapat penawaran khusus untuk transfer hosting.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="5em" fill="#4589c9" viewBox="0 0 448 512">
                            <path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                        </svg>
                        <h5>Fitur Lengkap Tak Terukur Waktu</h5>
                        <p>Bandwidth tak terbatas, kompatibel dengan IPv4 & IPv6, dan tersedia dalam 5 lokasi server.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="5em" fill="#4589c9" viewBox="0 0 448 512">
                            <path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                        </svg>
                        <h5>Manfaatkan Waktumu</h5>
                        <p>Segera lakukan pembayaran agar tidak kehilangan promo diskon. Setiap promo memiliki batas waktu dan kuota yang terbatas</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="5em" fill="#4589c9" viewBox="0 0 448 512">
                            <path d="M0 80V229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7H48C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                        </svg>
                        <h5>Pengembalian dana Cepat & Mudah</h5>
                        <p>Dana dapat dikembalikan jika anda tidak merasa puas dengan layanan kami selama kurun waktu 30 hari</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Menarik yang kelewatan End -->

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
                            @if ($item->kategori === "Promo")
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
        <!-- FAQ End-->

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>

</html>
