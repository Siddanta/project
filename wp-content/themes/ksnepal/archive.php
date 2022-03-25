<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ksnepal
 */
get_header();
?>

<section class="inner-banner__alt inner-banner banner bg-cover">
    <img src="http://kshatreesamajnepal.loc/wp-content/uploads/2020/08/bg-home-page-banner.jpg" alt="services-ppc-banner">
    <div class="inner-banner__altcontent">
        <div class="text-center">
            <h1>समाचार</h1>
        </div>
        <div class="text-center">
            <!-- <h2>“सम्पूर्ण खस क्षेत्रीहरूको सदभावका निम्ति क्षत्री एकता आजको आवश्यकता”</h2> -->
            <!-- <h2>“राष्ट्रिय अखण्डता र जातीय सदभावका निम्ति क्षत्री एकता आजको आवश्यकता”</h2> -->
        </div>

    </div>
</section>
<section class="news-section container">
    <div class="news-content">
        <div class="row card-group">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12  mt-4">
                <div class="news-item">
                    <div class="news-item__img">
                        <img src="" alt="">
                        <h4 class="text-white"><?php echo get_the_title(); ?></h4>
                        <p><?php echo get_the_date(); ?></p>
                    </div>
                    <div class="news-item__text" data-fix="height" style="height: 200px;">
                        <h5><?php echo wp_trim_words(get_the_excerpt(), 10, '[..]'); ?></h5>
                        <a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary btn-primary--black">Read
                            more</a>
                    </div>
                </div>
            </div>
            <?php
                }
            } ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>