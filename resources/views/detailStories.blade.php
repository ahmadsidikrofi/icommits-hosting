<!DOCTYPE html>
<html lang="en">
@include('partials.head')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="">
            <div class="hero__item set-bg" data-setbg="/image/blog/{{ $storiesDetail->image }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>{{ $storiesDetail->stories_title }}</h2>
                                <p class="text-light fs-5 lh-lg">
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

    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>

</html>
