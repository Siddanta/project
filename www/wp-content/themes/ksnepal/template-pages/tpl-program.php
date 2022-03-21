<?php
/*
Template Name: Program
*/
get_header();
?>
<section class="inner-banner__alt inner-banner news-part banner bg-cover">
    <img src="https://preview.lsvr.sk/lore/wp-content/uploads/sites/5/2019/03/knowledge-base-wordpress-theme-header.jpg"
        alt="services-ppc-banner">
    <div class="inner-banner__altcontent">
        <div class="container">
            <div class="text-center">
                <h1>कार्यक्रम</h1>
                <div class="breadcrumbs">
                    <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="programme-section all-program">
    <div class="container">

        <div class="row">
            <div class="program-widget float-left col-xl-8 col-lg-8 col-md-12"">
                <?php
                $args = array(
                    'post_type' => 'program',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>
                <article class=" program-inner">
                <div class="programme-section__media">
                    <div class="post-image">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'program-archive'); ?>
                        </a>
                    </div>
                </div>
                <div class="programme-section__info">
                    <div class="holder">
                        <div class="small-text">
                            ३० चैत्र २०७७, सोमबार
                        </div>

                        <a href="<?php echo get_the_permalink(); ?>">
                            <h3> <?php echo get_the_title(); ?> </h3>
                        </a>

                    </div>
                    <div class="content">
                        <?php echo wp_trim_words(get_the_excerpt(), 50, '[...]'); ?>
                    </div>
                    <div class="readmore">
                        <a href="<?php echo get_the_permalink(); ?>" class="btn btn-more" role="button">थप
                            हेर्नुहोस्</a>
                    </div>
                </div>
                </article>
                <?php
                    endwhile;
                endif; ?>
            </div>

            <div id="secondary" class="widget-area widget-has-sidebar sidebar-fixed col-xl-4 col-lg-4 col-md-12">
                <?php dynamic_sidebar('program-sidebar') ?>
                <?php get_sidebar("program"); ?>
            </div>

        </div>
</section>

<?php get_footer(); ?>