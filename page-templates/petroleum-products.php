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

    <style>
        <?php if (get_field('s-top-bg')) { ?>
        .section-top {
            background-image: url(<?php the_field('s-top-bg'); ?>);
        }
        <?php } ?>
    </style>
</head>
<body>

<div class="inner-page">
    <section class="section-top">
        <?php get_template_part('inc/header'); ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <h1><?php the_title(); ?></php></h1>


                    <?php if (get_field('s-top-subtitle')){ ?>
                        <div class="subtitle">
                            <?php the_field('s-top-subtitle'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row text-items">
                <div class="col-6 col-lg-3">
                    <div class="text-item">
                        <div class="icon-wrapper"><svg class="icon drop"><use xlink:href="#drop"></use></svg></div>
                        <div class="text">
                            <?php if (get_field('s-top-text1')){ ?>
                                <?php the_field('s-top-text1'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="text-item">
                        <div class="icon-wrapper"><svg class="icon drop"><use xlink:href="#drop"></use></svg></div>
                        <div class="text">
                            <?php if (get_field('s-top-text2')){ ?>
                                <?php the_field('s-top-text2'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="text-item">
                        <div class="icon-wrapper"><svg class="icon drop"><use xlink:href="#drop"></use></svg></div>
                        <div class="text">
                            <?php if (get_field('s-top-text3')){ ?>
                                <?php the_field('s-top-text3'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="text-item">
                        <div class="icon-wrapper"><svg class="icon drop"><use xlink:href="#drop"></use></svg></div>
                        <div class="text">
                            <?php if (get_field('s-top-text4')){ ?>
                                <?php the_field('s-top-text4'); ?>
                            <?php } ?>
                        </div>
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

    <section class="section-2">
        <div class="container">
            <?php if (get_field('s2-text')){ ?>
                <?php the_field('s2-text'); ?>
            <?php } ?>
        </div>
    </section>

    <section class="section-fuel-types">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="title">
                        <?php if (get_field('s3-title')){ ?>
                            <?php the_field('s3-title'); ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="text">
                        <?php if (get_field('s3-text1')){ ?>
                            <?php the_field('s3-text1'); ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="text">
                        <?php if (get_field('s3-text2')){ ?>
                            <?php the_field('s3-text2'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-certificates">
        <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php if (get_field('certificat1')){ ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img src="<?php the_field('certificat1'); ?>" alt="slide">
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('certificat2')){ ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img src="<?php the_field('certificat2'); ?>" alt="slide">
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('certificat3')){ ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img src="<?php the_field('certificat3'); ?>" alt="slide">
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('certificat4')){ ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img src="<?php the_field('certificat4'); ?>" alt="slide">
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (get_field('certificat5')){ ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img src="<?php the_field('certificat5'); ?>" alt="slide">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
    </section>

    <section class="section-5">
        <div class="container">
            <?php if (get_field('s5-text')){ ?>
                <?php the_field('s5-text'); ?>
            <?php } ?>
        </div>
    </section>

    <section class="section-6">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text">
                        <?php if (get_field('s6-text1')){ ?>
                            <?php the_field('s6-text1'); ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text">
                        <?php if (get_field('s6-text2')){ ?>
                            <?php the_field('s6-text2'); ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text">
                        <?php if (get_field('s6-text3')){ ?>
                            <?php the_field('s6-text3'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>

    <?php get_template_part('inc/contacts-section' ); ?>
    <?php get_template_part('inc/svg-sprite' ); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
