jQuery(document).ready(function($) {
    $('body').addClass('page-loaded');

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



    $.fn.isInViewport = function() {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    $(window).on('resize scroll', function() {
        var cards = $('.section-cards');

        if ($(cards).isInViewport()) {
            $('.card-item').addClass('is-visible');
        }
    });
});
