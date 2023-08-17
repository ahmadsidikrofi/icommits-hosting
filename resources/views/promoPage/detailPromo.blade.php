<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<style>
    .hero-section .hero_item {
        height: 460px;
        background: rgb(74,244,159);
        background: linear-gradient(342deg, rgba(74,244,159,1) 0%, rgba(0,71,154,1) 100%);
    }

    .hero_item .hero__text {
        padding-top: 184px;
    }
    .hero_item .hero__text h2 {
        margin: 30px;
        color: #4c57d6;
        text-align: center;
        font-weight: 700;
        border-radius: 30px;
        background: #ffffff;
        padding: 20px 0 20px 0;
    }
</style>
<body style="background: #f7f7f9;">
    @include('partials.Firstnavbar')
        <!-- Hero Section Begin -->
        <section class="hero-section">
            <div class="">
                <div class="hero_item">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 mx-auto">
                                <div class="hero__text ">
                                    <h2 class="">{{ $promoDetail->title_promo }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Detail Promo Start -->
        <section class="spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 img">
                        <img src="/image/{{ $promoDetail->image }}" class="rounded-5 w-100 shadow" alt="">
                    </div>
                    <div class="col-lg-8 col-sm-12 p-4">
                        {!! $promoDetail->deskripsi_promo !!}
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 rounded" style="height: auto;">
                        <div class="card-promo">
                            <div class="card-title p-4">
                                <h3>{{ $promoDetail->title_promo }}</h3>
                                <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                        <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                                    </svg>
                                    Berlaku Hingga <span>{{ $promoDetail->formatted_expired_at }}</span>
                                </p>
                            </div>
                            <div class="card_expired">
                                @php
                                    $expiredDateTime = new DateTime($promoDetail->expired_at);
                                    $now = new DateTime();
                                    $interval = $now->diff($expiredDateTime);
                                @endphp
                                <p>
                                    @if ( $expiredDateTime < $now )
                                        <span class="fw-bold mx-1 text-dark">
                                            Waktu promo habis
                                        </span>
                                    @else
                                        <span class="fw-bold mx-1">
                                            {{ $interval->d }} hari {{ $interval->h }} jam {{ $interval->i }} menit
                                        </span>
                                    @endif
                                </p>
                            </div>
                            <div class="button mt-4 mx-auto">
                                <button class="mx-auto text-center btn btn-lg btn-dark">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Detail Promo End -->

        <!-- Promo Lainnya Start -->
        <section class="promo_lainnya spad">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="fs-2 fw-bold ">Promo Lainnya</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    @foreach ($promoLain as $promo )
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="promo_card">
                                <a href="/promo/{{ $promo->slug }}">
                                    <div class="promo_pic set-bg " data-setbg="/image/{{ $promo->image }}">
                                        <div class="label">{{ $promo->mini_title_card }}</div>
                                    </div>
                                </a>
                                <div class="promo_text">
                                    <h5 class="mb-2"><a href="/promo/{{ $promo->slug }}">{{ $promo->title_promo }}</a></h5>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> <span class="fw-semibold">Berlaku Hingga</span></li>
                                        <li class="p-2 rounded-bottom">
                                            <h6>
                                                <?php
                                                $expiredDateTime = new DateTime($promo->expired_at);
                                                $now = new DateTime();
                                                $interval = $now->diff($expiredDateTime);
                                                ?>
                                                <!-- Display the countdown time -->
                                                @if ( $expiredDateTime < $now )
                                                    <span class="fw-bold mx-1 text-danger">
                                                        Waktu promo habis
                                                    </span>
                                                @else
                                                    <span class="fw-bold mx-1">
                                                        {{ $interval->d }} hari {{ $interval->h }} jam {{ $interval->i }} menit
                                                    </span>
                                                @endif
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                                <a href="/promo/{{ $promo->slug }}" class="btn btn-go-link w-100 mt-2">{{ $promo->link_promo }}</a></>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </section>
        <!-- Promo Lainnya End -->


    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>
</html>
