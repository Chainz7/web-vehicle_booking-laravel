    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('css/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('css/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('css/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('css/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('css/vendor/js/menu.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('css/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('css/js/main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('css/js/dashboards-analytics.js') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
