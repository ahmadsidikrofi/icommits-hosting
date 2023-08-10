<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<style>
    .section-title__wrapper {
        margin-bottom: -30px;
        /* Sesuaikan ukuran padding sesuai kebutuhan */
    }
</style>

<body class="">
    @include('partials.storiesNavbar')
    <section id="blog">
        <div class="blog-heading mt-5">
            <div class="container">
                <div class="row mt-5">
                    <div class="mx-auto mt-5">
                        <div class="">
                            <div class="col-lg-12 mb-3">
                                <h3>All Stories</h3>
                            </div>
                            <div class="container mx-5">
                                <input placeholder="Type to search..." required="" class="input" name="text"
                                    type="text">
                                <div class="icon">
                                    <svg viewBox="0 0 512 512" class="ionicon" xmlns="http://www.w3.org/2000/svg">
                                        <title>Search</title>
                                        <path stroke-width="32" stroke-miterlimit="10" stroke="currentColor"
                                            fill="none"
                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z">
                                        </path>
                                        <path d="M338.29 338.29L448 448" stroke-width="32" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke="currentColor" fill="none"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-container mt-5">
                        @foreach ($stories as $story)
                            <div class="blog-box">
                                <a href="/stories/{{ $story->slug }}">
                                    <div class="blog-img">
                                        <img src="/image/blog/{{ $story->image }}" class="img-fluid" alt="blog">
                                    </div>
                                </a>
                                <!--text--->
                                <div class="blog-text">
                                    <p class="text-primary fw-bold">
                                        @foreach ($story->kategori as $kategori)
                                            {{ $kategori->nama_kategori }}
                                        @endforeach
                                    </p>
                                    <p class="fw-bold"><span class="fw-normal">BY</span> ICOMMITS WEB HOSTING STORIES </p>
                                    <a href="/stories/{{ $story->slug }}" class="blog-title">{{ $story->stories_title }}</a>
                                    @php
                                        $deskripsi = $story["deskripsi"];
                                        if (strlen($deskripsi) > 15) {
                                            $deskripsi = Str::substr($deskripsi, 0, 30) . '...';
                                            echo "<p class='fw-reguler'> $deskripsi </p>";
                                        };
                                    @endphp
                                    <span class="stories-date d-flex justify-content-end">{{ $story->formatted_created_at }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 mt-5">
                    <h3 class="fw-bold">Kategori</h3>
                    <div class="kategori-list mt-3">
                        <ul class="d-flex flex-wrap">
                            @foreach ( $kategories as $category )
                                <li class="text-decoration-none p-1 bg-light mb-3 shadow-lg mx-1"><a href="/stories?kategori={{ $category->slug }}" class="btn btn-white">{{ $category->nama_kategori }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>

</html>
