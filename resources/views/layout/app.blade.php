<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Erha Ultimate Clinic</title>
        <!-- fav icon  -->
        <link rel="icon" href="/assets/icon-3.avif" type="image/x-icon">
        
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

        <!-- css file prod -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-B5AT5q_h.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- slick carousel -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    </head>
    <body>
        <x-navbar/>
        @yield('content')
        <x-footer/>
        <x-back-to-top/>
        <x-bottom-nav/>
        <!-- slick-carousel -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- js file prod -->
        <script src="{{ asset('build/assets/app-V_ZoM36E.js') }}"></script>
        {{-- <script>

            // back to top
            window.onscroll = function() {
                const button = document.getElementById('back-to-top');
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    button.classList.add('show');
                } else {
                    button.classList.remove('show');
                }
            };

            function scrollToTop() {
                window.scrollTo({top: 0, behavior: 'smooth'});
            }

            // const $ = require( "jquery" )( window )
            // import $ from 'jquery';
            // window.$ = window.jQuery = $;

            //product carousel section
            document.addEventListener('DOMContentLoaded', function () {
                $('.product-carousel-inner').slick({
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    prevArrow: '<img class="slick-prev" src="/assets/carousel-left-hover.avif" alt=" erha carousel-left-hover icon">',
                    nextArrow: '<img class="slick-next" src="/assets/carousel-right-hover.avif" alt=" erha carousel-right-hover icon">',
                    responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            prevArrow: '',
                            nextArrow: ''
                        }
                    },
                    {
                        breakpoint: 430,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }]
                });
            });

            //price format
            function priceFormat(price) {
                let formattedPrice = price.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });

                if (formattedPrice.includes(',00')) {
                    formattedPrice = formattedPrice.slice(0, -3);
                }

                return formattedPrice;          
             }

            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.product-price').forEach(function (priceElement) {
                    const priceValue = parseFloat(priceElement.innerText);
                    priceElement.innerText = priceFormat(priceValue);
                });
            });

            // experience year
            function experienceFormat(year) {
                const currentYear = new Date().getFullYear();
                const experienceYears = currentYear - year;
                return experienceYears > 1 ? `${experienceYears} Years Experience` : `${experienceYears} Year Experience`;
            }

            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.experience-year').forEach(function (experienceElement) {
                    const startYear = parseInt(experienceElement.innerText);
                    experienceElement.innerText = experienceFormat(startYear);
                });
            });

            //product rating 
            function renderStars(rating, element) {
                const fullStars = Math.floor(rating);
                const halfStar = (rating % 1 !== 0);
                let starsHtml = '';

                for (let i = 0; i < fullStars; i++) {
                    starsHtml += '<div class="star full"></div>';
                }

                if (halfStar) {
                    starsHtml += '<div class="star half"></div>';
                }

                for (let i = fullStars + (halfStar ? 1 : 0); i < 5; i++) {
                    starsHtml += '<div class="star"></div>';
                }

                element.innerHTML = starsHtml;
            }

            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.product-rating').forEach(function (ratingElement) {
                    const ratingValue = parseFloat(ratingElement.getAttribute('data-rating'));
                    renderStars(ratingValue, ratingElement);
                });
            });

            // about expand collapse
            function expandContent() {
                document.getElementById("short-content").style.display = "none";
                document.getElementById("full-content").style.display = "block";
            }

            function collapseContent() {
                document.getElementById("short-content").style.display = "block";
                document.getElementById("full-content").style.display = "none";
            }
        </script> --}}
    </body>
</html>
