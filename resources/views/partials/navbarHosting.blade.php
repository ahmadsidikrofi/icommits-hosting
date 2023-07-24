    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="/"><img src="https://www.icommits.co.id/assets/frontend/assets/img/logo-icommits.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="#">Hosting</a>
                    <ul class="dropdown">
                        <li><a class="btn bg-secondary" style="text-align: left;" href="hosting-unlimited">
                                <span style="margin-left: 10px; display: flex;">Web Hosting Unlimited Indonesia</span>
                            </a>
                        </li>
                        <li><a href="/cloud-hosting" class="btn bg-secondary" style="text-align: left;" href="#">
                                <span style="margin-left: 10px; display: flex;">Cloud Hosting cPanel Indonesia</span>
                            </a>
                        </li>
                        <li><a class="btn bg-secondary" style="text-align: left;" href="#">
                                <span style="margin-left: 10px; display: flex;">Migration Hosting</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Domain</a></li>
                <li><a href="#">VPS</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Blog Details</a></li>
                        <li><a href="#">404</a></li>
                    </ul>
                </li>
                <li><a href="#">Email</a></li>
                <li><a href="#">Plugins</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <ul>
                <li><a class="btn" style="background-color: #5c5699;" href="#">Daftar</a></li>
                <li><a class="btn" style="background-color: #5c5699;" href="#">Masuk</a></li>
            </ul>
        </div>
        <div class="offcanvas__info">
            <ul>
                <li><span class="icon_phone"></span> +62 85762205153</li>
                <li><span class="fa fa-envelope"></span> info@icommits.co.id</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__info shadow-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-left">
                            <ul>
                                <li><span class="icon_phone"></span> +62 85762205153</li>
                                <li><span class="fa fa-envelope"></span> info@icommits.co.id</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__info-right">
                            <ul>
                                <li><a class="btn btn-lg px-4 fw-semibold rounded-5" style="background-color: #5c5699;" href="#">Masuk</a></li>
                                <li><a class="btn btn-lg px-4 fw-semibold rounded-5" style="background-color: #5c5699;" href="#">Daftar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/"><img src="/image/logo-3.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            @foreach ( $navbar as $menu )
                                @if ($menu->tipe_menu === "link")
                                    <li><a href="{{ $menu->link }}">{{ $menu->nama_menu }}</a></li>
                                @else
                                    <li class="active"><a href="{{ $menu->link }}">{{ $menu->nama_menu }}</a>
                                        <ul class="dropdown rounded-4">
                                            @foreach ($menu->subMenus as $subMenu )
                                            <li class="btn w-100 rounded-4 d-flex text-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-infinity mt-2" viewBox="0 0 16 16">
                                                    <path d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015L8 6.978Zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916L8.656 7.75Z"/>
                                                </svg>
                                                <a class="text-light text-decoration-none" href="{{ $subMenu->link }}">
                                                    <span class="">{{ $subMenu->nama_sub_menu }}</span>
                                                    <p class="text-light">{{ $subMenu->deskripsi }}</p>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')
