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
    <div class="bg-image2"><img src ="<?php echo IMAGES;?>/bg2.jpg" alt="bg-image"></div>
    <div class="bg-wave1"></div>
    <div class="bg-wave2"></div>
</div>

<div class="inner-page">
    <header class="header">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-md-auto">
                    <a class="navbar-brand"
                       rel="home"
                       href="<?php echo esc_url( home_url( '/' ) ); ?>"
                       title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                       itemprop="url"
                    >
                        <img class ="center-block img-responsive " src ="<?php echo IMAGES;?>/logo.png" >
                    </a>
                </div>
                <div class="col">
                    <?php wp_nav_menu(array('menu' => 2)); ?>
                </div>
                <div class="col-md-auto">
                    <div class="phones">
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
                <div class="col-md-6">
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
    <section class="section2">
        <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque delectus dolorem
                    dolores, eligendi exercitationem explicabo, harum impedit, magnam mollitia nam nobis porro quam
                    reprehenderit sint! Alias quis sed voluptas?</span><span>Delectus deserunt doloremque ipsa iure
                    nostrum omnis praesentium quam recusandae vel velit? Aperiam cum eligendi provident, rerum
                    similique unde vel voluptate voluptates. Eaque et illo illum nisi non nostrum repellat?
                </span>
        </p>
    </section>
    <section class="section3">            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque delectus dolorem
                    dolores, eligendi exercitationem explicabo, harum impedit, magnam mollitia nam nobis porro quam
                    reprehenderit sint! Alias quis sed voluptas?</span><span>Delectus deserunt doloremque ipsa iure
                    nostrum omnis praesentium quam recusandae vel velit? Aperiam cum eligendi provident, rerum
                    similique unde vel voluptate voluptates. Eaque et illo illum nisi non nostrum repellat?
                </span>
        </p>
    </section>
    <section class="section4">            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque delectus dolorem
                    dolores, eligendi exercitationem explicabo, harum impedit, magnam mollitia nam nobis porro quam
                    reprehenderit sint! Alias quis sed voluptas?</span><span>Delectus deserunt doloremque ipsa iure
                    nostrum omnis praesentium quam recusandae vel velit? Aperiam cum eligendi provident, rerum
                    similique unde vel voluptate voluptates. Eaque et illo illum nisi non nostrum repellat?
                </span>
        </p>
    </section>
    <section class="section5">            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque delectus dolorem
                    dolores, eligendi exercitationem explicabo, harum impedit, magnam mollitia nam nobis porro quam
                    reprehenderit sint! Alias quis sed voluptas?</span><span>Delectus deserunt doloremque ipsa iure
                    nostrum omnis praesentium quam recusandae vel velit? Aperiam cum eligendi provident, rerum
                    similique unde vel voluptate voluptates. Eaque et illo illum nisi non nostrum repellat?
                </span>
        </p>
    </section>
    <section class="section6">            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur cumque delectus dolorem
                    dolores, eligendi exercitationem explicabo, harum impedit, magnam mollitia nam nobis porro quam
                    reprehenderit sint! Alias quis sed voluptas?</span><span>Delectus deserunt doloremque ipsa iure
                    nostrum omnis praesentium quam recusandae vel velit? Aperiam cum eligendi provident, rerum
                    similique unde vel voluptate voluptates. Eaque et illo illum nisi non nostrum repellat?
                </span>
        </p>
    </section>

    <?php get_template_part('inc/svg-sprite' ); ?>
</div>
</body>
</html>
