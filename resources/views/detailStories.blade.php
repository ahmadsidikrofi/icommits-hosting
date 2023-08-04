<!DOCTYPE html>
<html lang="en">
@include('partials.head')
    <style>
        .hero__item-stories::before {
            background-image: url('/image/blog/{{ $storiesDetail->image }}')
        }
    </style>
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="">
            <div class="hero__item-stories">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2 class="fw-bold text-light mb-3">{{ $storiesDetail->stories_title }}</h2>
                                <p class="text-light fs-5 lh-lg bg-dark p-2 rounded">
                                    {{ $storiesDetail->deskripsi }}
                                </p>
                                <a href="#konten_stories" class="btn btn-dark rounded-4 fw-semibold">
                                    Siap Mulai Baca
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Konten Stories Start -->
    <section class="spad">
        <div class="container mt-5">
            <div class="row ">
                <div class="col d-flex justify-content-center">
                    <img src="/image/blog/{{ $storiesDetail->image }}" class="rounded-5 w-75" alt="">
                </div>
            </div>
            {{-- <div class="row" id='post-toc'>
                <div class='TOC'>
                    <button onclick='mbtToggle()'> DAFTAR ISI </button>
                    <ol id='TOC'/>
                </div>
                <data:post.body/>
                <script>
                    TOC();
                </script>
            </div> --}}
            <div class="row mt-5"  id="konten_stories">
                <div class="col">
                    <h1 class="text-dark fw-semibold fs-2">
                        {!! $storiesDetail->isi_stories !!}
                    </h2>
                </div>
            </div>
            <h4 class="fw-bold mb-3 mx-5 mt-5">Stories terkait</h4>
            <div class="row mt-4 mb-5 mx-5">
                @foreach ( $related_stories as $stories )
                    <div class="card-related-book mt-3 mx-3" style="background-image: url(/image/blog/{{ $stories->image }})">
                        <div class="textBox">
                          <p class="text head">{{ $stories->stories_title }}</p>
                          {{-- <p class="text head">{{ $stories->nama_penulis }}</p> --}}
                          <p class="text price">{{ $stories->kategori()->pluck('nama_kategori')->implode(', ') }}</p>
                          <a class="fw-bold btn btn-outline-light" href="/Readteracy/detail/buku/{{ $stories->id }}">Lihat Aku</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mx-3 mt-5">
                <div id="disqus_thread"></div>
                <script>
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };

                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://website-r41nxqdwxx.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
            </div>
        </div>
    </section>
    <!-- Konten Stories End -->

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
    {{-- <script>
        //<![CDATA[
        function TOC() {
            var TOC = i = headlength = gethead = 0;
            headlength = document.getElementById("post-toc").querySelectorAll("h2, h3, h4").length;
            for (i = 0; i < headlength; i++) {
                gethead = document.getElementById("post-toc").querySelectorAll("h2, h3, h4")[i].textContent;
                document.getElementById("post-toc").querySelectorAll("h2, h3, h4")[i].setAttribute("id", "point" + i);
                TOC = "<li><a href='#point" + i + "'>" + gethead + "</a></li>";
                document.getElementById("TOC").innerHTML += TOC;
            }
        }

    function mbtToggle() {
        var mbt = document.getElementById('TOC');
        if (mbt.style.display === 'none') {
            mbt.style.display = 'block';
        } else {
            mbt.style.display = 'none';
        }
    }
    //]]>
    </script> --}}
</body>

</html>
