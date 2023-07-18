<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    @include('partials.Firstnavbar')

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
                <div class="col-lg-12 col-md-12">
                    <div class="info_card">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-6">
                              <div class="card mx-3">
                                <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-6">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Special title treatment</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
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
