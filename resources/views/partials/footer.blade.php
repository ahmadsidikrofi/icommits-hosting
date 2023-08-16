<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/footer.css">
</head>
<body>
    <footer class="site-footer">
        <div class="container mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="logo">
                            <a href="/"><img src="/image/logo-3.png" alt=""></a>
                        </div>
                        <br>
                        <p class="text-justify">Tujuan utama kami adalah membantu jutaan orang dalam memanfaatkan seluruh potensi yang ditawarkan internet untuk mencapai kesuksesan online dengan menyediakan layanan hosting, domain, cloud, dan VPS yang stabil dan mudah digunakan.</p>
                        <p class="text-justify">Komplek, Jl. Bahagia Permai Raya Jl. Ciwastra No.5, Margasari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286</p>
                    </div>
                    <div class="col-md-3 col-lg-2 mt-3">
                        <h6 class="title-list-footer mx-4">Produk</h6>
                        <ul class="footer-links mx-4">
                            <li class=""><a href="/stories">Stories</a></li>
                            @foreach ( $menuNavbar as $menu )
                                @if ( $menu->tipe_menu === "link" )
                                    <li><a href="{{ $menu->link }}" class="text-decoration-none">{{ $menu->nama_menu }}</a></li>
                                @endif
                            @endforeach
                        </ul>

                    </div>
                    <div class="col-md-3 col-lg-2 mt-3">
                        <h6 class="title-list-footer">Perusahaan</h6>
                        <ul class="footer-links">
                            @foreach ( $menuNavbar as $menu )
                                @if ( $menu->tipe_menu === "sub_menu" )
                                    @foreach ( $menu->subMenus as $subMenu )
                                        <li><a href="{{ $subMenu->link }}" class="text-decoration-none">{{ $subMenu->nama_sub_menu }}</a></li>
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 mt-3">
                        <h6 class="title-list-footer">Informasi</h6>
                        <ul class="footer-links">
                            <li><a href="/stories">Stories</a></li>
                            <li><a href="#" class="text-decoration-none">Pembayaran</a></li>
                            <li><a href="#" class="text-decoration-none">Blog</a></li>
                            <li><a href="#" class="text-decoration-none">Loyalty Poin</a></li>
                            <li><a href="#" class="text-decoration-none">Promo</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <p class="copyright-text footer-links">Copyright &copy; 2023 All Rights Reserved by
                            <a href="#" class="text-decoration-none">Icommits</a>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class= "info-privasi">
                            <a href=“#”>Syarat dan Ketentuan</a>
                            <a href=“#”>Kebijakan Privasi</a>
                            <a href=“#”>Service Level Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>



{{-- <ul class="footer-links mx-4">
    <li><a href="#" class="text-decoration-none">Web Hosting</a></li>
    <li><a href="#" class="text-decoration-none">Domain</a></li>
    <li><a href="#" class="text-decoration-none">VPS</a></li>
    <li><a href="#" class="text-decoration-none">Email</a></li>
    <li><a href="/riwayatlamaran" class="text-decoration-none">Buat Website</a></li>
</ul> --}}
