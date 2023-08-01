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
                <div class="col-lg-12 col-md-12 col-sm-6 mb-5">
                  <div class="info_card ">
                    <div class="row row-cols-2 row-cols-md-4 g-5">
                      <div class="col">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                          <div class="card-header bg-transparent border-success">Layanan</div>
                          <div class="card-body text-success">
                            <p class="card-text">1</p></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                          <div class="card-header bg-transparent border-success">Domains</div>
                          <div class="card-body text-success">
                            <p class="card-text">1</p></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                          <div class="card-header bg-transparent border-success">Tagihan</div>
                          <div class="card-body text-success">
                            <p class="card-text">1</p></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                          <div class="card-header bg-transparent border-success">Poin</div>
                          <div class="card-body text-success">
                            <p class="card-text">1</p></div>
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
