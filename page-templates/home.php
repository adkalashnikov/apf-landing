<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title"
          content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body class="home-page">
<div class="bg-wrapper">
    <div class="bg-image1"><img src ="<?php echo IMAGES;?>/bg1.jpg" alt="bg-image"></div>
    <div class="bg-image2 d-none d-lg-block">
        <video class="bg-vid" poster="<?php echo get_template_directory_uri();?>/images/vbg1.jpg" autoplay="" loop="" muted="">
            <source src="<?php echo get_template_directory_uri();?>/video/bg1.mp4" type="video/mp4">
        </video>
    </div>
    <div class="bg-wave1">
        <svg width="101%" height="101%" viewBox="0 0 1441 2206" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path xmlns="http://www.w3.org/2000/svg" d="M710.992 260C819.992 224.094 806.992 185 850.992 111C886.039 52.0575 948.445 18.4276 997.559 0.17807H1440.49L1440.94 889.291C1394.58 925.431 1338.69 992.75 1301.99 1106C1231.99 1322 1154 1324 1030 1352C926.18 1375.44 826.682 1477.96 798 1544C679 1818 657.992 1776 433.992 1840C209.992 1904 225.992 1926 171.992 2060C138.795 2142.38 59.7729 2185.94 0 2205.02L0.273743 755.965C65.3776 729.366 151.436 731.182 254.992 713C385.992 690 403.992 528 461.992 423C519.992 318 625.992 288 710.992 260Z" fill="#1F61BA"/>
        </svg>
    </div>
    <div class="bg-wave2">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 944 965" fill="none">
            <path d="M303 724.5C188.5 848 229 886.5 0 963.5L944 964.5V0C902.227 38.8076 856.307 101.832 824.656 199.5C754.656 415.5 558 436.5 553.49 539.5C546.827 691.705 379.983 641.466 303 724.5Z" fill="#1F61BA"/>
        </svg>
    </div>
</div>

<div class="inner-page">
    <header class="header">
        <div class="container">
            <div class="d-xl-none">
                <!-- ******************* The Navbar Area ******************* -->
                <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

                    <a class="skip-link sr-only sr-only-focusable" href="#content">
                        <?php esc_html_e( 'Skip to content', 'understrap' ); ?>
                    </a>

                    <nav class="navbar navbar-expand-xl navbar-dark">

                        <?php if ( 'container' == $container ) : ?>
                        <div class="container" >
                            <?php endif; ?>
                            <a class="navbar-brand"
                               rel="home"
                               href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                               itemprop="url"
                            >
                                <img class ="center-block img-responsive " src ="<?php echo IMAGES;?>/logo.png">
                            </a>

                            <div class="row no-gutters align-items-center phones">
                                <svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg>
                                <a href="tel:+380472731315">
                                    0472 <span>73-13-15</span>
                                </a>

                                <a href="tel:+380504400727" class="phone2 d-none d-md-block">
                                    050 <span>440-07-27</span>
                                </a>
                            </div>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- The WordPress Menu goes here -->
                            <?php wp_nav_menu(
                                array(
                                    'theme_location'  => 'primary',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id'    => 'navbarNavDropdown',
                                    'menu_class'      => 'navbar-nav ml-auto',
                                    'fallback_cb'     => '',
                                    'menu_id'         => 'main-menu',
                                    'depth'           => 2,
                                    'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                                )
                            ); ?>
                            <?php if ( 'container' == $container ) : ?>
                        </div><!-- .container -->
                    <?php endif; ?>

                    </nav><!-- .site-navigation -->

                </div><!-- #wrapper-navbar end -->
            </div>

            <div class="d-none d-xl-flex no-gutters align-items-center">
                <div class="col-md-auto">
                    <a class="navbar-brand"
                       rel="home"
                       href="<?php echo esc_url( home_url( '/' ) ); ?>"
                       title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                       itemprop="url"
                    >
                        <img class ="center-block img-responsive " src ="<?php echo IMAGES;?>/logo.png">
                    </a>
                </div>

                <div class="col">
                    <?php wp_nav_menu(array('menu' => 2)); ?>
                </div>

                <div class="col-xl-auto">
                    <div class="row no-gutters align-items-center phones">
                        <svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg>
                        <a href="tel:+380472731315">
                            0472 <span>73-13-15</span>
                        </a>

                        <a href="tel:+380504400727" class="phone2">
                            050 <span>440-07-27</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-text1">
        <div class="container">
            <div class="row justify-content-lg-end">
                <div class="col-lg-6">
                    <h1>НЕФТЕ ПРОДУКТЫ</h1>
                    <p>
                        ООО «Компания ДЕФИ» создана в 2011 году. Основным направлением предприятия является оптовая
                        торговля нефтепродуктами и ископаемым углем.
                    </p>
                    <p>ООО «Компания ДЕФИ» для вашего удобства, мы предлагаем доставку по территории нашей страны.</p>
                    <p>ООО «Компания ДЕФИ» — это возможность приобрести качественное топливо по оптимальной цене.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>О Компании</h2>

                    <div class="row text-row">
                        <div class="col-md">
                            <p>
                                ООО «Компания ДЕФИ» — стремительно развивающаяся фирма, основным назначением
                                функционирования которой является реализация и поставка печного топлива высокого
                                качества, а также предоставляющая большой ассортимент другой продукции на рынке топлива.
                            </p>
                            <p>
                                Мы принимаем все меры, чтобы клиент- использовал исключительно качественные
                                нефтепродукты по очень выгодной стоимости.
                            </p>
                        </div>

                        <div class="col-md">
                            <p>
                                Компания тщательно наблюдает за качеством закупаемых нефтепродуктов.
                            </p>

                            <p>
                                Приобретая наше топливо — можно быть уверенным в его качестве. Наша компания
                                гарантирует, что работа производится только с тем топливом, которое соответствует ТУ У.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cards">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="card-item item1">
                        <div class="image-holder">
                            <img src="<?php echo IMAGES;?>/oil.png" alt="card image">
                        </div>
                        <div class="title">НЕФТЕПРОДУКТЫ</div>
                        <div class="text">
                            Только качественные
                            и сертифицированные
                            нефтепродукты.
                        </div>
                        <a class="more-link" href="#">Подробнее</a>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card-item item2">
                        <div class="image-holder">
                            <img src="<?php echo IMAGES;?>/coal.png" alt="card image">
                        </div>
                        <div class="title">ИСКОПАЕМЫЙ УГОЛЬ</div>
                        <div class="text">
                            Предлагаем самый
                            широкий выбор
                            ископаемого угля.
                        </div>
                        <a class="more-link" href="#">Подробнее</a>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card-item item3">
                        <div class="image-holder">
                            <img src="<?php echo IMAGES;?>/car2.png" alt="card image">
                        </div>
                        <div class="title">ТРАНСПОРТ</div>
                        <div class="text">
                            Мы осуществляем
                            доставку по всей
                            территории Украине.
                        </div>
                        <a class="more-link" href="#">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-advantages">
        <div class="container">
            <div class="row justify-content-lg-end">
                <div class="col-lg-6">
                    <h2>преимущества</h2>
                    <div class="subtitle">У нас за плечами огромный опыт и успешная практика.</div>
                </div>
            </div>

            <div class="advantages-wrapper">
                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-delivery"><use xlink:href="#icon-delivery"></use></svg></div>
                    <div class="text">
                        Оперативная доставка
                        собственном
                        автотранспортом
                    </div>
                </div>

                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-wallet"><use xlink:href="#icon-wallet"></use></svg></div>
                    <div class="text">
                        Оптимальные цены
                        на поставки топлива
                    </div>
                </div>

                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-doc"><use xlink:href="#icon-doc"></use></svg></div>
                    <div class="text">
                        Исключительно
                        качественные
                        горючие материалы
                    </div>
                </div>

                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-badge"><use xlink:href="#icon-badge"></use></svg></div>
                    <div class="text">
                        Возможность заключения
                        договора на регулярные
                        поставки
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <h2>Свяжитесь с нами</h2>
                        </div>
                        <div class="col-md">
                            <div class="contact-info">
                                <div class="d-flex align-items-center pb-3">
                                    <svg class="icon icon-marker"><use xlink:href="#icon-marker"></use></svg>
                                    18000,  г. Черкассы,  ул. Чехова 115.
                                </div>
                                <div class="d-flex align-items-center pb-3">
                                    <svg class="icon icon-phone-light"><use xlink:href="#icon-phone-light"></use></svg>
                                    (0472) 73-13-15, (050) 440-07-27
                                </div>
                                <div class="d-flex align-items-center pb-3">
                                    <svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg>
                                    deficompany@gmail.com
                                </div>
                                <div class="d-flex align-items-center">
                                    <svg class="icon icon-fax"><use xlink:href="#icon-fax"></use></svg>
                                    (0472) 73-13-15
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-copy d-none d-lg-flex justify-content-lg-between pt-lg-5">
                        <div>&copy;<?php echo date(Y);?> - ООО «Компания ДЕФИ” . Все права защищены.</div>
                        <div>Разработка: <a href="https://freelancehunt.com/freelancer/Murzak.html" target="_blank">murzak</a></div>
                    </div>
                </div>

                <div class="col-md">
                    <?php echo do_shortcode('[contact-form-7 id="13" title="Контактная форма"]'); ?>
                </div>

                <div class="col-md-12 row-copy d-lg-none pt-2">
                    <div>&copy;<?php echo date(Y);?> - ООО «Компания ДЕФИ” . Все права защищены.</div>
                    <div>Разработка: <a href="https://freelancehunt.com/freelancer/Murzak.html" target="_blank">murzak</a></div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('inc/svg-sprite' ); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
