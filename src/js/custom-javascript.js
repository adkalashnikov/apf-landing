jQuery(document).ready(function($) {
    $('body').addClass('page-loaded');

    if($('.bg-wave1 path').length) {
        anime({
            targets: '.bg-wave1 path',
            d: [
                'M744 190C853 154.094 874 182 918 108C953.047 49.0576 948.445 18.4276 997.559 0.17807H1440.49L1440.94 889.291C1401 934 1402.26 962 1388 1006C1318 1222 1237 1206 1113 1234C1009.18 1257.44 951.371 1400 925 1467C851 1655 789.036 1621.34 572 1706C431 1761 382 1836 318 1949C274.23 2026.28 102 2011 0 2205.02L0.273743 755.965C62 666 140.444 614.182 244 596C375 573 518 537 576 432C634 327 659 218 744 190Z',
                'M762 277C807.109 240.542 813 131 870 63C914.052 10.4464 959 9 997.559 0.17807H1440.49L1440.94 889.291C1429 948 1391.55 1018.2 1324 1049C1153 1126.96 1227 1209 1106 1287C1016.54 1344.67 903 1429 870 1500C784.843 1683.22 621 1736 530 1765C385.798 1810.95 348.105 1830.33 277 1939C224 2020 197 2066 0 2205.02L0.273743 755.965C195 764 244 662 277 615C353.428 506.148 413.465 436.899 523 388C579 363 689 336 762 277Z'
            ],
            direction: 'alternate',
            easing: 'linear',
            duration: 5000,
            loop: true
        });
    }

    if($('.bg-wave2 path').length) {
        anime({
            targets: '.bg-wave2 path',
            d: [
                'M319 776.5C209.059 835.833 179 754.5 0 963.5L944 964.5V0C902.227 38.8076 891.344 187.193 771 272.5C613 384.5 697.099 531.49 603 550.5C405 590.5 413.5 725.5 319 776.5Z',
                'M209 774C174.848 836.174 213 884 0 963.5L944 964.5V0C743 112 904.231 298.154 759 324C523 366 549 550 481 600C318.258 719.663 287 632 209 774Z'
            ],
            direction: 'alternate',
            easing: 'linear',
            duration: 5000,
            loop: true
        });
    }

    if($('.bg-wave3 path').length) {
        anime({
            targets: '.bg-wave3 path',
            d: [
                'M0 47.9997C0 47.9997 32 5.99934 135 47.9997C238 90 205 -34.9999 361 27C517 89 588 -57 711 27C834 111 1036 -50 1212 50.0001C1388 150 1440 68 1440 68V247H0V47.9997Z',
                'M0 49.7851C0 49.7851 116 -37.2146 219 51.7854C322 140.785 301 -85.2147 490 37.7854C679 160.786 856 -62.2147 979 21.7853C1102 105.785 1089 98.7856 1212 51.7854C1335 4.78534 1440 69.7854 1440 69.7854V248.785H0V49.7851Z'
            ],
            direction: 'alternate',
            easing: 'linear',
            duration: 5000,
            loop: true
        });
    }

    $.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    if($('.section-cards').length) {
        $(window).on('resize scroll', function() {
            var cards = $('.section-cards');

            if ($(cards).isInViewport()) {
                $('.card-item').addClass('is-visible');
            }
        });
    }

    if($('.section-certificates').length) {
        var mySwiper = new Swiper(".swiper-container", {
            effect: 'coverflow',
            autoplay: {
                delay: 3000,
            },
            spaceBetween: 50,
            speed: 500,
            loop: true,
            autoplayStopOnLast: false,
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 4,
            slidesPerGroup: 1,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false
            },
            zoom: {
                maxRatio: 3,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 5
                }
            }
        })
    }
});
