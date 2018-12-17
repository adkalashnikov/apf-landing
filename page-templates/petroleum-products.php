<?php
/**
 * Template Name: Petroleum products
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
    <?php get_template_part('inc/header'); ?>

    <section class="section-text1">
        <div class="container">
            <svg class="icon drop"><use xlink:href="#drop"></use></svg>

            <div class="row justify-content-lg-end">
                <div class="col-lg-6">
                    <?php if (get_field('s1-title')){ ?>
                        <h1><?php the_field('s1-title'); ?></h1>
                    <?php } ?>

                    <?php if (get_field('s1-text')){ ?>
                        <?php the_field('s1-text'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('inc/contacts-section' ); ?>
    <?php get_template_part('inc/svg-sprite' ); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
