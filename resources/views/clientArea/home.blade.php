<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<link rel="stylesheet" href="/css/plan_pro.css">

<body>
    {{-- @include('partials.Firstnavbar') --}}

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero__slider owl-carousel">
            <div class="hero__client set-bg">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="">
                                <h3 class="text-light fw-bold">Selamat Datang, Kamu</h3>
                                <p class="text-light fw-light fs-5">Nikmati layanan dengan aman dan nyaman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contain Section Begin -->

    <section class="info-section spad" id="info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-5">
                    <div class="info_card ">
                        <div class="row g-5">
                            <div class="col">
                                <div class="card mb-3 rounded-4" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent text-center">
                                        <img src="/image/image 94.png" alt="">
                                        <span style="color: darkblue;font-weight:500;">Layanan</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3 rounded-4" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent text-center">
                                        <img src="/image/image 93.png" alt="">
                                        <span style="color: darkblue;font-weight:500;">Domains</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3 rounded-4" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent text-center">
                                        <img src="/image/image 95.png" alt="">
                                        <span style="color: darkblue;font-weight:500;">Tagihan</span>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3 rounded-4" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent text-center">
                                        <img src="/image/image 107.png" alt="" width="40">
                                        <span style="color: darkblue;font-weight:500;">Poin</span>
                                    </div>
                                    <div class="card-body text-success">
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">5</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 mb-5 w-100 riwayat_layanan">
                                <div class="card mb-3 rounded-4">
                                    <div class="card-header fw-bold text-dark bg-transparent">Riwayat Layanan</div>
                                    <div class="d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight mx-2">Unlimited Hosting Premium <p class="fst-italic">icommits.id</p></div>
                                        <div class="px-5 pt-2 bd-highlight justify-content-end"><span class="bg-success badge fs-6 fw-normal">Aktif</span></div>
                                        <div class="px-4 pt-2 bd-highlight justify-content-end"><span class="bg-secondary badge fs-6 fw-normal">Managed</span></div>
                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight mx-2">.xyz <p class="fst-italic">ayobelajar.xyz</p></div>
                                        <div class="px-2 pt-2 bd-highlight justify-content-end"><span class="bg-danger badge fs-6 fw-normal">Non-Aktif</span></div>
                                        <div class="px-3 pt-2 bd-highlight justify-content-end"><span class="bg-secondary badge fs-6 fw-normal">Perpanjang</span></div>
                                    </div>
                                    <div class="d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight mx-2">.id <p class="fst-italic">icommits.id</p></div>
                                        <div class="px-5 pt-2 bd-highlight justify-content-end"><span class="bg-success badge fs-6 fw-normal">Aktif</span></div>
                                        <div class="px-3 pt-2 bd-highlight justify-content-end"><span class="bg-secondary badge fs-6 fw-normal">Perpanjang</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contain Section End -->

    {{-- JS PLUGIN --}}
    @include('partials.jsPlugin')
</body>

</html>
