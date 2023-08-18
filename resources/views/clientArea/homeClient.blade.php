<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<style>
    .card .card-header img {
        margin: 0 0 0 -40px
    }
</style>

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
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">0</p>
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
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">0</p>
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
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">0</p>
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
                                        <p class="card-text fs-3 text-center fw-bold" style="color:blueviolet">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12 mb-5 w-100 riwayat_layanan">
                                <div class="card mb-3 rounded-4">
                                    <div class="card-header fw-bold text-dark bg-transparent">Riwayat Layanan</div>
                                    <div class="card-body text-success">
                                        <p class="card-text fs-5">Kamu belum pernah berlangganan</p>
                                    </div>
                                    <div class="img mt-4 mx-auto">
                                        <img src="/image/emptyCart.png" alt="">
                                    </div>
                                    <p class="card-text text-dark fw-bold fs-3 mx-auto">Ternyata masih kosong😢</p>
                                    <p class="card-text text-dark mx-auto mb-5 fw-semibold">
                                        Coba buat layanan kamu terlebih dulu yuk. <br>
                                        Dipilih dulu yaa siapa tau ada yang menarik
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10 col-sm-12 mb-5">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-6 col-md-12">
                                        <div class="card-domain_layanan card mb-3 rounded-4">
                                            <div class="card-body">
                                                <p class="card-text fs-5 mt-3 fw-bold text-center text-light">Daftarkan
                                                    domain barumu</p>
                                            </div>
                                            <input placeholder="Search..." class="input mx-auto" name="text" type="text">
                                            <div class="mx-auto mt-3">
                                                <button class="btn btn-lg daftarkan mx-2">Daftarkan</button>
                                                <button class="btn btn-lg transfer mx-2">Transfer</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Jangan perlu menggunakan col-lg-6 di sini -->
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10 col-sm-12">
                                <div class="row">
                                    <div class="col-lg-9 col-sm-6 col-md-12 client_unlimited">
                                        <div class="card rounded-4">
                                            <img src="/image/client_unlimited.png" alt="">
                                            <div class="card-body">
                                                <p class="card-text unlimited_text fs-5 mt-3 fw-bold text-center">
                                                    Unlimited Hosting</p>
                                            </div>
                                            <p class="text-center">Mulai website Anda dengan paket hosting murah dengan
                                                disk space dan bandwidth unlimited</p>
                                            <div class="mx-auto">
                                                <button class="btn btn-lg btn-primary rounded-5 mx-auto mb-4">Coba
                                                    Sekarang</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Jangan perlu menggunakan col-lg-6 di sini -->
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
