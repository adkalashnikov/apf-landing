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
        <svg xmlns="http://www.w3.org/2000/svg" width="102%" height="102%" viewBox="0 0 944 965" fill="none">
            <path d="M303 724.5C188.5 848 229 886.5 0 963.5L944 964.5V0C902.227 38.8076 856.307 101.832 824.656 199.5C754.656 415.5 558 436.5 553.49 539.5C546.827 691.705 379.983 641.466 303 724.5Z" fill="#1F61BA"/>
        </svg>
    </div>
</div>

<div class="inner-page">
    <?php get_template_part('inc/header'); ?>

    <section class="section-text1">
        <div class="container">
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

    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <?php if (get_field('s2-title')){ ?>
                        <h2><?php the_field('s2-title'); ?></h2>
                    <?php } ?>

                    <div class="row text-row">
                        <div class="col-md">
                            <?php if (get_field('s2-text1')){ ?>
                                <?php the_field('s2-text1'); ?>
                            <?php } ?>
                        </div>

                        <div class="col-md">
                            <?php if (get_field('s2-text2')){ ?>
                                <?php the_field('s2-text2'); ?>
                            <?php } ?>
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
                            <svg class="icon icon-oil"><use xlink:href="#icon-oil"></use></svg>
                        </div>
                        <div class="title">
                            <?php if (get_field('s3-title1')){ ?>
                                <?php the_field('s3-title1'); ?>
                            <?php } ?>
                        </div>
                        <div class="text">
                            <?php if (get_field('s3-text1')){ ?>
                                <?php the_field('s3-text1'); ?>
                            <?php } ?>
                        </div>
                        <div class="button-holder">
                            <a class="more-link" href="#">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card-item item2">
                        <div class="image-holder">
                            <svg class="icon icon-coal"><use xlink:href="#icon-coal"></use></svg>
                        </div>
                        <div class="title">
                            <?php if (get_field('s3-title2')){ ?>
                                <?php the_field('s3-title2'); ?>
                            <?php } ?>
                        </div>
                        <div class="text">
                            <?php if (get_field('s3-text2')){ ?>
                                <?php the_field('s3-text2'); ?>
                            <?php } ?>
                        </div>
                        <div class="button-holder">
                            <a class="more-link" href="#">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card-item item3">
                        <div class="image-holder">
                            <svg class="icon icon-truck"><use xlink:href="#icon-truck"></use></svg>
                        </div>
                        <div class="title">
                            <?php if (get_field('s3-title3')){ ?>
                                <?php the_field('s3-title3'); ?>
                            <?php } ?>
                        </div>
                        <div class="text">
                            <?php if (get_field('s3-text3')){ ?>
                                <?php the_field('s3-text3'); ?>
                            <?php } ?>
                        </div>
                        <div class="button-holder">
                            <a class="more-link" href="#">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-advantages">
        <div class="container">
            <div class="row justify-content-lg-end">
                <div class="col-lg-6">
                    <?php if (get_field('s4-title')){ ?>
                        <h2><?php the_field('s4-title'); ?></h2>
                    <?php } ?>
                    <div class="subtitle">
                        <?php if (get_field('s4-subtitle')){ ?>
                            <?php the_field('s4-subtitle'); ?>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="advantages-wrapper">
                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-delivery"><use xlink:href="#icon-delivery"></use></svg></div>
                    <div class="text">
                        <?php if (get_field('s4-text1')){ ?>
                            <?php the_field('s4-text1'); ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-wallet"><use xlink:href="#icon-wallet"></use></svg></div>
                    <div class="text">
                        <?php if (get_field('s4-text2')){ ?>
                            <?php the_field('s4-text2'); ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-doc"><use xlink:href="#icon-doc"></use></svg></div>
                    <div class="text">
                        <?php if (get_field('s4-text3')){ ?>
                            <?php the_field('s4-text3'); ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="advantages-item">
                    <div class="icon"><svg class="icon icon-badge"><use xlink:href="#icon-badge"></use></svg></div>
                    <div class="text">
                        <?php if (get_field('s4-text4')){ ?>
                            <?php the_field('s4-text4'); ?>
                        <?php } ?>
                    </div>
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
