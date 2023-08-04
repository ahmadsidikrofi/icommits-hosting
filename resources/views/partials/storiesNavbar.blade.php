<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories</title>
    <link rel="stylesheet" href="/css/storiesNavbar.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="logo">
                <a href="/"><img src="/image/logo-3.png" alt=""></a>
            </div>
        </div>
        <ul class="navbar">
            @foreach ( $kategori as $category )
                <li><a href="/stories?kategori={{ $category->slug }}">{{ $category->nama_kategori }}</a></li>
            @endforeach
        </ul>
        <div class="main">
            <a href="#"><i class="ri-twitter-x-fill"></i></a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"><i class="ri-youtube-fill"></i></a>
            <a href="#"><i class="ri-whatsapp-fill"></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <!-- Js Plugin -->
    <script src="/js/storiesNavbar.js"></script>
</body>
</html>
