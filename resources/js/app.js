document.addEventListener('DOMContentLoaded', function () {

    // document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.carousell-slide');

    function updateAcneInfo(activeSlide) {
        const title = activeSlide.getAttribute('data-title');
        const description = activeSlide.getAttribute('data-description');

        document.getElementById('acne-title').innerText = title;
        document.getElementById('acne-description').innerText = description;
    }

    function activateSlide(slide) {
        slides.forEach(s => s.classList.remove('active'));
        slide.classList.add('active');
        updateAcneInfo(slide);
    }

    slides.forEach(slide => {
        slide.addEventListener('click', function () {
            activateSlide(slide);
        });
    });

    if (slides.length > 0) {
        activateSlide(slides[0]);
    }
    // });

    if (typeof $ === 'undefined') {
        console.error("jQuery is not loaded");
        return;
    }

    console.log("jQuery is working!");

    // Back to top
    window.onscroll = function () {
        const button = document.getElementById('back-to-top');
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            button.classList.add('show');
        } else {
            button.classList.remove('show');
        }
    };

    window.scrollToTop = function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // Product carousel section
    if ($('.product-carousel-inner').length) {
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
                }
            ]
        });
    } else {
        console.error("Element '.product-carousel-inner' not found");
    }

    // Price format
    function priceFormat(price) {
        let formattedPrice = price.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
        if (formattedPrice.includes(',00')) {
            formattedPrice = formattedPrice.slice(0, -3);
        }
        return formattedPrice;
    }

    document.querySelectorAll('.product-price').forEach(function (priceElement) {
        const priceValue = parseFloat(priceElement.innerText);
        priceElement.innerText = priceFormat(priceValue);
    });

    // Experience year
    function experienceFormat(year) {
        const currentYear = new Date().getFullYear();
        const experienceYears = currentYear - year;
        return experienceYears > 1 ? `${experienceYears} Years Experience` : `${experienceYears} Year Experience`;
    }

    document.querySelectorAll('.experience-year').forEach(function (experienceElement) {
        const startYear = parseInt(experienceElement.innerText);
        experienceElement.innerText = experienceFormat(startYear);
    });

    // Product rating 
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

    document.querySelectorAll('.product-rating').forEach(function (ratingElement) {
        const ratingValue = parseFloat(ratingElement.getAttribute('data-rating'));
        renderStars(ratingValue, ratingElement);
    });

    // About expand collapse
    window.expandContent = function () {
        document.getElementById("short-content").style.display = "none";
        document.getElementById("full-content").style.display = "block";
    }

    window.collapseContent = function () {
        document.getElementById("short-content").style.display = "block";
        document.getElementById("full-content").style.display = "none";
    }
});
