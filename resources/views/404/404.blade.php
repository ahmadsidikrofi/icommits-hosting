<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Custom Error Page Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 pt-5">
        <div class="alert alert-danger text-center">
            <h2 class="display-3">404</h2>
            <p class="display-5">Oops! Kayakanya halaman yang kamu cari gaada 😐</p>
            <a class="btn pl-4 pr-4 pt-2 pb-2 btn-lg rounded-2 text-light" href="/" style="background-color: #934a51; font-weight: 500;">Kembali ke Beranda ⬅️</a>
        </div>
        <div class="text-center">
            <img src="/image/404.jpg" alt="">
        </div>
    </div>
</body>
</html>
