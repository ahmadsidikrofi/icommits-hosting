<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<style>
    .hero__item-stories::before {
        background-image: url('/image/blog/{{ $storiesDetail->image }}')
    }
    .table-of-contents ul li {
      padding-left: 0;
    }

    .heading {
      display: inline-block;
    }

    .heading.h2 {
      margin-left: 0;
      font-size: 15px
    }

    .heading.h3 {
      margin-left: 30px;
      font-size: 15px
    }

    .heading.h2:hover, .heading.h3:hover {
        text-decoration: underline;
        color: rgb(5, 189, 112)
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
        <div class="row">
            <div class="col-lg-12 mb-5 mx-3">
                <nav class="breadcrumbs">
                    <a href="/stories" class="breadcrumbs__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                        </svg>
                        Home
                    </a>
                    <a href="/stories?kategori={{ $storiesDetail->kategori()->pluck('slug')->implode(' ') }}" class="breadcrumbs__item">{{ $storiesDetail->kategori()->pluck('nama_kategori')->implode(' ') }}</a>
                    <a href="#" class="breadcrumbs__item is-active">{{ $storiesDetail->stories_title }}</a>
                </nav>
            </div>
            {{-- <div class="col-lg-12 bg-breadcrumbs p-3 rounded-3 w-25">
                <nav class="" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb mx-auto mt-3">
                        <li class="breadcrumb-item"><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                            </svg>
                            Home</a>
                        </li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-lg-7">
                <img src="/image/blog/{{ $storiesDetail->image }}" class="rounded-5 w-100" alt="">
                <div class="d-flex align-items-center">
                    <div class="row mt-4 mx-3" style="width:110px;">
                        <h5 class="fw-bold badge bg-primary p-3">{{ $storiesDetail->kategori()->pluck('nama_kategori')->implode(' ') }}</h5>
                    </div>
                    <div class="p-3 mt-4 badge bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 576 512">
                            <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                        </svg>
                        Views:
                        <span class="text-light">{{ $storiesDetail->count_stories }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-5 mx-5 kategori-list">
                <h3 class="fw-bold">Kategori</h3>
                <div class="kategori-list mt-3">
                    <ul class="d-flex flex-wrap">
                        @foreach ($kategories as $category)
                            <li class="text-decoration-none p-1 bg-light mb-3 shadow-lg mx-1 mt-2"><a
                                    href="/stories?kategori={{ $category->slug }}"
                                    class="btn btn-white">{{ $category->nama_kategori }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5 mx-2">
            <div class="col-lg-6">
                <div class="table-of-contents p-2 border rounded-4 shadow">
                    <p class="toc-heading border p-2 bg-success rounded-4 fw-bold mb-3 w-50 text-light fs-4">Daftar Isi</p>
                    <div class="headings-container mb-3">
                        <ul></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5" id="konten_stories">
            <div class="col-lg-8 p-4">
                {!! $storiesDetail->isi_stories !!}
            </div>
            <div class="col-lg-4 mt-4 mb-5">
                <div class="title">
                    <p class="fw-bold fs-3">Latest Stories</p>
                </div>
                <div class="row">
                    @foreach ($latest_stories as $latest)
                        <div class="col-6 col-lg-12">
                            <div class="card">
                                <a href="/stories/{{ $latest->slug }}">
                                    <div class="card__img"><img src="/image/blog/{{ $latest->image }}" class="w-100" alt="">
                                    </div>
                                </a>
                                <div class="card__descr-wrapper">
                                    <p class="text-primary nama_kategori fw-bold">{{ $latest->kategori()->pluck('nama_kategori')->implode(', ') }}</p>
                                    <span class="stories-date">{{ $latest->formatted_created_at }}</span>
                                    <a href="/stories/{{ $latest->slug }}">
                                        <p class="card__title">
                                            {{ $latest->stories_title }}
                                        </p>
                                    </a>
                                    <div class="card__links">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg mb-3">&lt;
                                                <path
                                                    d="M562.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L405.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C189.5 251.2 196 330 246 380c56.5 56.5 148 56.5 204.5 0L562.8 267.7zM43.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C57 372 57 321 88.5 289.5L200.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C416.5 260.8 410 182 360 132c-56.5-56.5-148-56.5-204.5 0L43.2 244.3z">
                                                </path>
                                            </svg>
                                            <a class="link" href="/stories/{{ $latest->slug }}">Lihat Aku</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <h4 class="fw-bold mb-3 mt-5">Stories terkait</h4>
        <div class="row mt-4 mb-5">
            @foreach ($related_stories as $stories)
                <div class="card-related-stories mt-3 mx-3"
                    style="background-image: url(/image/blog/{{ $stories->image }})">
                    <div class="textBox">
                        <p class="text head">{{ $stories->stories_title }}</p>
                        <p class="text price">{{ $stories->kategori()->pluck('nama_kategori')->implode(', ') }}</p>
                        <a class="fw-bold btn btn-outline-light"
                            href="/stories/{{ $stories->slug }}">Lihat Aku</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mx-3 mt-5">
            <div id="disqus_thread"></div>
            <script>
                var disqus_config = function() {
                    this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier =
                        PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };

                (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document,
                        s = d.createElement('script');
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
<script>
    function createTableOfContents() {
        var headings = document.querySelectorAll('#konten_stories h2, #konten_stories h3, #konten_stories h1');
        var tocContainer = document.querySelector('.table-of-contents .headings-container ul');

        for (var i = 0; i < headings.length; i++) {
            var heading = headings[i];
            var headingId = 'pembahasan-' + i;

            heading.id = headingId;

            var listItem = document.createElement('li');
            listItem.setAttribute('class', 'mx-3 mt-2')
            var link = document.createElement('a');
            link.setAttribute('class', 'text-success');
            link.href = '#' + headingId;
            link.textContent = heading.textContent;
            link.classList.add('heading');
            var headingClass = heading.tagName.toLowerCase();
            link.classList.add('heading', headingClass);
            listItem.appendChild(link);
            tocContainer.appendChild(listItem);
        }
    }

    createTableOfContents();
</script>
</body>

</html>
