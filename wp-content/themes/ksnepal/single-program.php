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
<div class="program-single inner-banner__alt inner-banner_st">
    <div class="container">
        <div class="breadcrumbs">
            <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
        </div>
    </div>
</div>

<div class="content program-content">
    <div class="container">
        <div class="col-12">
            <div class="entry-featured">
                <div class="project-image">
                    <?php
                    echo get_the_post_thumbnail(get_the_ID(), 'program-single');
                    ?>
                </div>
                <div class="project-info">
                    <div class="info-text">
                        <div class="project-category"><a href="https://demo.farost.net/energia/project-category/energy/"
                                rel="tag">Energy</a>, <a
                                href="https://demo.farost.net/energia/project-category/green-energy/" rel="tag">Green
                                Energy</a></div>
                        <h3 class="project-title">
                            <?php echo get_the_title(); ?></h3>
                        <div class="box-description">
                            <?php echo wp_trim_words(get_the_excerpt(), 20, '[...]') ?></div>
                    </div>
                    <div class="box-button">
                        <a class="btn" target="_blank"
                            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>">
                            Share: <span class="icon-facebook2"></span></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="entry-body">

                <div class="program-inner">
                    <div class="section-wrap">
                        <div class="row">
                            <div class="column col-lg-8">
                                <div class="widget-wrap">
                                    <div class="widget-container">
                                        <div class="cms-heading-wrapper">
                                            <div class="custom-subheading">सारांश</div>

                                            <h2 class="custom-heading">
                                                <span> <?php echo get_the_title(); ?> </span>
                                            </h2>

                                        </div>
                                    </div>

                                    <div class="text-editor clearfix">
                                        <?php echo get_the_content(); ?>
                                    </div>

                                </div>
                            </div>
                            <div class="column col-lg-4">
                                <div class="element element-454b98b widget widget-spacer">
                                    <div class="widget-container">
                                        <div class="spacer">
                                            <div class="spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section class="detail-section">
                                    <div class="row">
                                        <div class="widget-wrap">
                                            <div class="widget-container">
                                                <div class="text-editor clearfix">
                                                    <p><span class="head-text">प्रमुख अतिथि:</span>
                                                        Farost Network<br>
                                                        <span class="head-text">कार्यक्रम स्थान:</span>
                                                        Gaighat, Nepal<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-js-section mb-4">
                    <video id="my-player" class="video-js vjs-16-9 vjs-big-play-centered" controls preload="auto"
                        poster="//vjs.zencdn.net/v/oceans.png" data-setup='{}'>
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

    <section class="image-activities image-slider">
        <div class="image-single">
            <a class="light-box" data-lightbox="image-1" data-title="My caption"
                href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                    alt="Card image cap">
            </a>
        </div>

        <div class="image-single">
            <a class="light-box" data-lightbox="image-1" data-title="My caption"
                href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                    alt="Card image cap">
            </a>
        </div>


        <div class="image-single">
            <a class="light-box" data-lightbox="image-1" data-title="My caption"
                href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                    alt="Card image cap">
            </a>
        </div>

        <div class="image-single">
            <a class="light-box" data-lightbox="image-1" data-title="My caption"
                href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                    alt="Card image cap">
            </a>
        </div>
        <div class="image-single">
            <a class="light-box" data-lightbox="image-1" data-title="My caption"
                href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                    alt="Card image cap">
            </a>
        </div>

    </section>
    <div class="entry-body rem-body">
        <div class="container">
            <div class="widget-wrap">
                <div class="text-editor clearfix">
                    <?php echo get_the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
?>
<?php

get_footer();