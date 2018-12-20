<?php
/**
 * Template Name: Fossil coal
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
<body>

<div class="inner-page">
    <section class="section-top">
        <?php if (get_field('top-bg')) { ?>
            <video class="bg-vid" poster="<?php the_field('top-bg'); ?>" autoplay="" loop="" muted="">
                <source src="<?php the_field('top-vbg'); ?>" type="video/mp4">
            </video>
        <?php } ?>

        <?php get_template_part('inc/header'); ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <h1><?php the_title(); ?></php></h1>
                </div>
            </div>

            <div class="row text-items">
                <div class="col-md-6">
                    <div class="text-item">
                        <?php if (get_field('top-text1')){ ?>
                            <?php the_field('top-text1'); ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-item">
                        <?php if (get_field('top-text2')){ ?>
                            <?php the_field('top-text2'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-wave3">
            <svg width="101%" height="101%" viewBox="0 0 1440 231" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 31.9996C0 31.9996 85.9153 78.9994 135 31.9996C184.085 -15.0001 246 -6.00071 355 31.9996C464 70 438 92.9995 622 31.9996C806 -29.0002 985 101 1114 38C1243 -24.9996 1440 52 1440 52V231H0V31.9996Z" fill="#1F61BA"/>
            </svg>
        </div>

        <svg class="icon arr-down"><use xlink:href="#arr-down"></use></svg>
    </section>

    <?php get_template_part('inc/contacts-section' ); ?>
    <?php get_template_part('inc/svg-sprite' ); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
