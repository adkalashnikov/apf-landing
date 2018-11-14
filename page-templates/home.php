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
    <div class="bg-wave1"><svg class="icon wave2"><use xlink:href="#wave1"></use></svg></div>
    <div class="bg-wave2"><svg class="icon wave2"><use xlink:href="#wave2"></use></svg></div>
</div>

<div class="inner-page">
    <section class="section1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>НЕФТЕ ПРОДУКТЫ</h1>
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
