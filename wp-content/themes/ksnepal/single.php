<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ksnepal
 */
get_header();
?>
<section class="inner-banner__alt inner-banner news-part banner bg-cover">
    <img src="https://demo.farost.net/energia/wp-content/uploads/2021/02/ptt_team.jpg" alt="services-ppc-banner">
    <!-- <div class="inner-banner__altcontent">
        <div class="text-center">
            <h1><?php //echo get_the_title(); 
                ?></h1>
        </div>
        <div class="text-center">
             <h2>“सम्पूर्ण खस क्षेत्रीहरूको सदभावका निम्ति क्षत्री एकता आजको आवश्यकता”</h2>
             <h2>“राष्ट्रिय अखण्डता र जातीय सदभावका निम्ति क्षत्री एकता आजको आवश्यकता”</h2>
        </div>
    </div> -->
</section>
<div id="news">
    <div class="news-section news-single">
        <div class="news__container">
            <div class="core__container">
                <div class="news-sub">
                    <div class="left-section lsvr-grid__col">
                        <?php

                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content', get_post_type());
                        endwhile;
                        ?>
                    </div>

                    <div class="right-section lsvr-grid__col">
                        <?php get_sidebar(); ?>

                        <div class="video-js-section">
                            <video id="my-player" class="video-js vjs-16-9 vjs-big-play-centered" controls
                                preload="auto" poster="//vjs.zencdn.net/v/oceans.png" data-setup='{}'>
                                <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                                </source>
                                <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm">
                                </source>
                                <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                                </source>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();