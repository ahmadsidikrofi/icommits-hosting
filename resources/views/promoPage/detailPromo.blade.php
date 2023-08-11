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
                        {{-- <div class="d-flex align-items-center">
                            <div class="p-3 mt-4 badge bg-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" height="1em" viewBox="0 0 576 512">
                                    <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                </svg>
                                Views:
                                <span class="text-light">{{ $storiesDetail->count_stories }}</span>
                            </div>
                        </div> --}}
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
                                    <span class="fw-bold">
                                        {{ $interval->d }} hari {{ $interval->h }} jam {{ $interval->i }} menit
                                    </span>
                                </p>
                            </div>
                            <div class="button mt-4 mx-auto">
                                <button class="mx-auto text-center btn btn-lg btn-dark">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row mt-5 mx-3">

                </div> --}}
            </div>
        </section>
        <!-- Detail Promo End -->


    <!-- Js Plugins -->
    @include('partials.jsPlugin')
</body>
</html>
