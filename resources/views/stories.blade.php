<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<link rel="stylesheet" href="/css/artikel.css">
<style>
    .section-title__wrapper {
        margin-bottom: -30px;
        /* Sesuaikan ukuran padding sesuai kebutuhan */
    }
</style>

<body>
    {{-- @include('partials.Firstnavbar') --}}
    <section id="blog">
        <div class="blog-heading">
            <h3>All Stories</h3>
        </div>
        <div class="blog-container">
            <div class="blog-box">
                <div class="blog-img">
                    <img src="/image/blog/blog-1.jpeg" alt="blog">
                </div>
                <!--text--->
                <div class="blog-text">
                    <span>tanggal, bulan, Tahun</span>
                    <a href="#" class="blog-title">Cara Membuat Blog Keren untuk Menghasilkan Cuan</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi veritatis
                        adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                        perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                    <a href="/blog-keren">Read More</a>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    <img src="/image/blog/blog-2.jpeg" alt="blog">
                </div>
                <!--text--->
                <div class="blog-text">
                    <span>tanggal, bulan, Tahun</span>
                    <a href="#" class="blog-title">Cara Membuat Blog Keren untuk Menghasilkan Cuan</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi veritatis
                        adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                        perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                    <a href="#">Read More</a>
                </div>

            </div>

            <div class="blog-box">
                <div class="blog-img">
                    <img src="/image/blog/blog-3.jpeg" alt="blog">
                </div>
                <!--text--->
                <div class="blog-text">
                    <span>tanggal, bulan, Tahun</span>
                    <a href="#" class="blog-title">Cara Membuat Blog Keren untuk Menghasilkan Cuan</a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi veritatis
                        adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum
                        perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
                    <a href="#">Read More</a>
                </div>

            </div>
        </div>
    </section>

</body>

</html>
