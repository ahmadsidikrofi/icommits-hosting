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
                        <div class="row row-cols-2 row-cols-md-4 g-5">
                            <div class="col">
                                <div class="card mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent">Layanan</div>
                                    <div class="card-body text-success">
                                        <p class="card-text">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent">Domains</div>
                                    <div class="card-body text-success">
                                        <p class="card-text">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent">Tagihan</div>
                                    <div class="card-body text-success">
                                        <p class="card-text">1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-3" style="max-width: 18rem;">
                                    <div class="card-header bg-transparent">Poin</div>
                                    <div class="card-body text-success">
                                        <p class="card-text">1</p>
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
                                    <p class="card-text text-dark fw-bold fs-3 mx-auto">Ternyata masih koson😢😢</p>
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
                                    <div class="card-body text-success">
                                      <p class="card-text fs-5 mt-3 fw-bold text-center">Daftarkan domainmu barumu</p>
                                    </div>
                                    <div class="InputContainer mx-auto mb-5">
                                      <input placeholder="Cari Domain" id="input" class="input" name="text" type="text">
                                    </div>
                                    <div class="mx-auto">
                                      <button class="btn btn-lg daftarkan mx-2">Daftarkan</button>
                                      <button class="btn btn-lg transfer mx-2">Transfer</button>
                                    </div>
                                  </div>
                                </div>
                                <!-- Jangan perlu menggunakan col-lg-6 di sini -->
                              </div>
                            </div>                            
                            <div class="col-lg-6 col-md-10 col-sm-12 mb-5">
                              <div class="row">
                                <div class="col-lg-12 col-sm-6 col-md-12">
                                  <div class="card-domain_layanan card mb-3 rounded-4">
                                    <div class="card-body text-success">
                                      <p class="card-text fs-5 mt-3 fw-bold text-center">Daftarkan domainmu barumu</p>
                                    </div>
                                    <div class="InputContainer mx-auto mb-5">
                                      <input placeholder="Cari Domain" id="input" class="input" name="text" type="text">
                                    </div>
                                    <div class="mx-auto">
                                      <button class="btn btn-lg daftarkan mx-2">Daftarkan</button>
                                      <button class="btn btn-lg transfer mx-2">Transfer</button>
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
