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
            @foreach ( $stories as $story )
                <div class="blog-box">
                    <a href="/stories/{{ $story->slug }}">
                        <div class="blog-img">
                            <img src="/image/blog/{{ $story->image }}" alt="blog">
                        </div>
                    </a>
                    <!--text--->
                    <div class="blog-text">
                        <span>tanggal, bulan, Tahun /
                            @foreach ( $story->kategori as $kategori )
                                {{ $kategori->nama_kategori }}
                            @endforeach
                        </span>
                        <a href="/stories/{{ $story->slug }}" class="blog-title">{{ $story->stories_title }}</a>
                        <p>{{ $story->deskripsi }}</p>
                        <a href="/stories/{{ $story->slug }}">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>

</html>
