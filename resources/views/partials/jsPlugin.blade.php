<!-- Js Plugins -->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.slicknav.js"></script>
<script src="/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    function toggleIcon(element) {
        element.classList.toggle("active");
    }
</script>
<script>
    const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 2000, // Atur delay di sini (dalam milidetik)
            disableOnInteraction: false, // Biarkan slide berjalan walaupun ada interaksi pengguna
        },
        direction: 'horizontal',
        loop: false,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            // clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
        },
        slidesPerView: 4,
        spaceBetween: 30,
    });
</script>

@yield('jsPlugin')
