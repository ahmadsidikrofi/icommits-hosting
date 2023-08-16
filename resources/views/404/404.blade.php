<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<title>404 Custom Error Page Example</title>
<style>
    .container .img-sad {
        width: 200px;
        margin: 30px auto 30px auto;
    }
    .container .oops {
        color: #934a51;
        font-size: 26px;
        letter-spacing: 5px;
    }

    .cek_domain .section-title h4 {
        color: #2c2c2c;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 3px;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="text-center img-sad">
            <img src="/image/sad.png" class="img-fluid " alt="">
            {{-- <h2 class="display-3">404</h2> --}}
        </div>
        <p class="text-center oops">Oops! Kayakanya halaman yang kamu cari gaada 😐</p>
        <div class="text-center">
            <img src="/image/404.jpg" alt="">
        </div>
        <div class="text-center">
            <a class="btn pl-4 pr-4 pt-2 pb-2 btn-lg rounded-2 text-light " href="/" style="background-color: #934a51; font-weight: 500;">Kembali ke Beranda ⬅️</a>
        </div>
    </div>

    <!-- Hero Section Begin -->
    <section class="">
        <div class=" set-bg" style="background-color: #ececec;">
            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 mb-5">
                        <div class="cek_domain">
                            <div class="section-title">
                                <h4 class="fs-4 mt-5">Dapatkan domain terbaik Anda</h4>
                                <p class="text-dark mt-2 lh-lg fs-6">Segera miliki beragam domain yang tersedia sebelum kehabisan</p>
                            </div>
                            <div class="form_cek_domain mb-5">
                                <form action="#">
                                    <input type="text" placeholder="Cek Nama Domain">
                                    <button type="submit" class="site-btn">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
</body>
</html>
