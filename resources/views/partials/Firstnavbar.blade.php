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
                <li><a href="/stories">Stories</a></li>
                @foreach ( $menuNavbar as $menu )
                    @if ( $menu->tipe_menu === "link" )
                        <li><a href="{{ $menu->link }}">{{ $menu->nama_menu }}</a></li>
                    @else
                        <li class="active"><a href="#">{{ $menu->nama_menu }}</a>
                            <ul class="dropdown">
                                @foreach ( $menu->subMenus as $submenu )
                                        <li>
                                            <a class="btn bg-secondary" style="text-align: left;" href="{{ $submenu->link }}">
                                                <span style="margin-left: 10px; display: flex;">{{ $submenu->nama_sub_menu }}</span>
                                            </a>
                                        </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
                {{-- <li class="active"><a href="#">Hosting</a>
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
                </li> --}}
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
                            <li class=""><a href="/stories">Stories</a></li>
                            @foreach ( $menuNavbar as $menu )
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

                        {{-- <ul>
                            <li class="active"><a href="#">Hosting</a>
                                <ul class="dropdown rounded-4 d-flex">
                                    <li class="btn w-100 rounded-4 ">
                                        <a class="text-light d-flex align-items-center" href="/hosting-unlimited">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="40" fill="currentColor" class="bi bi-infinity" viewBox="0 0 16 16">
                                                <path d="M5.68 5.792 7.345 7.75 5.681 9.708a2.75 2.75 0 1 1 0-3.916ZM8 6.978 6.416 5.113l-.014-.015a3.75 3.75 0 1 0 0 5.304l.014-.015L8 8.522l1.584 1.865.014.015a3.75 3.75 0 1 0 0-5.304l-.014.015L8 6.978Zm.656.772 1.663-1.958a2.75 2.75 0 1 1 0 3.916L8.656 7.75Z"/>
                                            </svg>
                                            <span class="mx-3">Web Hosting Unlimited Indonesia</span>
                                        </a>
                                        <p class="text-light">Hosting dengan panel DirectAdmin termurah di Indonesia. Gratis Domain, SSL, & Web Builder</p>
                                    </li>
                                    <li class="btn w-100 rounded-4 ">
                                        <a class="text-light d-flex align-items-center" href="/cloud-hosting">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="40" fill="currentColor" class="bi bi-cloud-check-fill" viewBox="0 0 16 16">
                                                <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 4.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                            </svg>
                                            <span class="">Cloud Hosting cPanel</span>
                                        </a>
                                        <p class="text-light">Untuk website traffic tinggi dilengkapi Premium Web Builder</p>
                                    </li>
                                    <li class="btn w-100 rounded-4 ">
                                        <a class="text-light d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="40" fill="currentColor" class="bi bi-send-check" viewBox="0 0 16 16">
                                                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z"/>
                                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                                            </svg>
                                            <span class="">Migration Hosting</span>
                                        </a>
                                        <p class="text-light">Memindahkan semua komponen website dari tempat lama ke web hosting baru yang menawarkan lebih banyak kenyamanan</p>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/domain.html">Domain</a></li>
                            <li><a href="#">Others</a>
                                <ul class="dropdown-plugin rounded-4 d-flex">
                                    <li class="btn w-100 rounded-4">
                                        <a class="text-light align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                                            </svg>
                                            <span class="">SSL Certificate</span>
                                        </a>
                                        <p class="text-light">Layanan Sertifikat SSL untuk keamanan dan perlindungan Website dan Aplikasi Anda.</p>
                                    </li>
                                    <li class="btn w-100 rounded-4">
                                        <a class="text-light align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                            <span class="">CPanel Licence</span>
                                        </a>
                                        <p class="text-light">Digunakan untuk mengelola / mengakses akun web hosting lebih dari 1 akun</p>
                                    </li>
                                    <li class="btn w-100 rounded-4">
                                        <a class="text-light align-items-center" href="/promo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                                                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                                            </svg>
                                            <span class="">Promo</span>
                                        </a>
                                        <p class="text-light">Dapatkan penawaran promo menarik, Jangan sampai kelewatan!</p>
                                    </li>
                                </ul>
                            </li>
                        </ul> --}}
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
