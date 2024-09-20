<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>People Advisor - General Consulting Company </title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod-swiper.css') }}">
    <link rel="icon" href="{{ asset('images/logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-ed9e150d.css') }}">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @vite('resources/css/app.css')

</head>


<body>
    @yield('content')

    @include('includes.footer')




    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swipers = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-button-next-1',
                prevEl: '.swiper-button-prev-1',
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                }
            },
            on: {
            init: function () {
                updateButtonState(this); // Update button state on init
            },
            slideChange: function () {
                updateButtonState(this); // Update button state on slide change
            }
        }
        });

        function updateButtonState(swiper) {
        // Remove the active class from both buttons
        document.querySelector('.swiper-button-prev-1').classList.remove('swiper-button-active');
        document.querySelector('.swiper-button-next-1').classList.remove('swiper-button-active');

        // Add active class to next or prev buttons based on the active index
        if (swiper.isBeginning) {
            document.querySelector('.swiper-button-prev-1').classList.add('swiper-button-active');
        } else if (swiper.isEnd) {
            document.querySelector('.swiper-button-next-1').classList.add('swiper-button-active');
        } else {
            document.querySelector('.swiper-button-prev-1').classList.add('swiper-button-active');
            document.querySelector('.swiper-button-next-1').classList.add('swiper-button-active');
        }
    }
    </script>
    {{-- Swiper JS --}}

    {{-- Buttons --}}
    <script>
        const buttons = document.querySelectorAll('.button');
        const icons = document.querySelectorAll('.icon');
    
        buttons.forEach((button, index) => {
            const icon = icons[index]; 
    
            button.addEventListener('mouseenter', function() {
                icon.classList.remove('ri-arrow-right-up-line');
                icon.classList.add('ri-arrow-right-line');
            });
    
            button.addEventListener('mouseleave', function() {
                icon.classList.remove('ri-arrow-right-line');
                icon.classList.add('ri-arrow-right-up-line');
            });
        });
    </script>
    
    {{-- Buttons --}}

    {{-- Toggle Mobile Navigation  --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Toggle Mobile Navigation --}}


    <!-- Accordion Script -->
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const header = item.querySelector('.flex');
                const content = item.querySelector('.faq-content');
                const arrow = item.querySelector('.arrow-container i');

                header.addEventListener('click', () => {
                    const isOpen = item.classList.contains('open');
                    closeAllFaqItems(); // Close all other items
                    if (!isOpen) {
                        item.classList.add('open');
                        arrow.classList.replace('ri-arrow-down-s-line', 'ri-arrow-right-s-line');
                    } else {
                        item.classList.remove('open');
                        arrow.classList.replace('ri-arrow-right-s-line', 'ri-arrow-down-s-line');
                    }
                });

                item.addEventListener('mouseleave', () => {
                    if (item.classList.contains('open')) {
                        item.classList.remove('open');
                        arrow.classList.replace('ri-arrow-right-s-line', 'ri-arrow-down-s-line');
                    }
                });
            });

            function closeAllFaqItems() {
                faqItems.forEach(item => {
                    item.classList.remove('open');
                    const arrow = item.querySelector('.arrow-container i');
                    arrow.classList.replace('ri-arrow-right-s-line', 'ri-arrow-down-s-line');
                });
            }
        });
    </script>
    <!-- Accordion script Ends Here -->



<script>
    const currentPath = window.location.pathname;

    document.querySelectorAll('.menu-item').forEach((item) => {
        const link = item.querySelector('a');

        if (link.getAttribute('href') === currentPath) {
            item.classList.add('border-[1.5px]', 'rounded-[32px]', 'px-6', 'border-[#C3C4CB]', 'py-1');
        }
    });
</script>

    @yield('script')
</body>

</html>
