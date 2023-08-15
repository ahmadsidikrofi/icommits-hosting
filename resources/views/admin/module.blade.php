@extends('partials.admin')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h1 class="text-white pb-2 fw-bold">Module</h1>
                    <h3 class="text-white op-7 mb-2">Module ini adalah module yang dapat dipakai di halaman ataupun mengatur
                        halaman</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="/admin/qna" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-info-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-solid fa-question"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <h1 class="card-title text-white">Pertanyaan</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/admin/paket-unlimited" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-info-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-solid fa-infinity"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers ">
                                        <h1 class="card-title text-white">Paket Unlimited</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/admin/hero" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-primary-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-solid fa-heading"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers ">
                                        <h1 class="card-title text-white">Hero</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/admin/services-section" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-primary-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-solid fa-section"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers ">
                                        <h1 class="card-title text-white">Services Section</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/admin/stories-section" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-primary-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-regular fa-newspaper"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers ">
                                        <h1 class="card-title text-white">Stories Section</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/admin/promo" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-info-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-solid fa-tag"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers ">
                                        <h1 class="card-title text-white">Promo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/admin/paket-vps" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-info-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-solid fa-server"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers ">
                                        <h1 class="card-title text-white">Paket VPS</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/admin/partner" style="text-decoration: none">
                    <div class="card card-stats card-round d-block bg-info-gradient">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center text-white">
                                        <i class="fa-regular fa-handshake"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers ">
                                        <h1 class="card-title text-white">Partner</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
