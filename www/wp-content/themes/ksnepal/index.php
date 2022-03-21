<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ksnepal
 */
get_header();
$totalPost = wp_count_posts()->publish;

//$height = $row * 634;

// var_dump($height);
?>
<section class="inner-banner__alt inner-banner news-part banner bg-cover">
    <img src="https://preview.lsvr.sk/lore/wp-content/uploads/sites/5/2019/03/knowledge-base-wordpress-theme-header.jpg"
        alt="services-ppc-banner">
    <div class="inner-banner__altcontent">
        <div class="container">
            <div class="text-center">
                <h1>समाचार</h1>
                <div class="breadcrumbs">
                    <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news-section meta-link">
    <div class="container">
        <div class="news-content">
            <div class="row news-element">
                <?php
                $count = 0;
                $top = 0;
                $left = 0;
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        $prevTop = $top;
                        $prevLeft = $left;
                        if ($count % 3 == 0) {
                            $quotient =  ($count - $count % 3) / 3;
                            $top = $quotient * 634;
                        } else $top = $prevTop;
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mt-4">
                    <div class="news-item">
                        <div class=news-single-item>
                            <div class="news-item__img">
                                <div class="img-item">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <?php
                                                if (has_post_thumbnail())
                                                    echo get_the_post_thumbnail(get_the_ID(), 'news-div');
                                                else
                                                    echo '<img width="370" height="270" src="http://kshatreesamajnepal.loc/wp-content/uploads/2021/04/content-image-20-370x270.jpeg" class="attachment-news-div size-news-div wp-post-image" alt="">';
                                                ?>
                                    </a>
                                </div>
                                <div class="post-category">BatteryMaterials, Solar PV Materials</div>
                            </div>
                            <div class="news-item__text same-height">
                                <h4><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                                <ul class="entry-meta">
                                    <li class="post-date"><?php echo get_the_date(); ?></li>
                                    <?php if (get_the_author()) { ?>
                                    <li class="author">
                                        <?php echo get_the_author(); ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="entry-content">
                                    <?php echo wp_trim_words(get_the_excerpt(), 25, '[...]'); ?>
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>"
                                    class="btn btn-primary btn-primary--black">थप हेर्नुहोस्</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                        if ($prevLeft === 0) $left = 33.333;
                        elseif ($prevLeft === 33.333) $left = 66.666;
                        elseif ($prevLeft === 66.666) $left = 0;
                        $count++;
                    }
                } ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();