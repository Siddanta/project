<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ksnepal
 */
?>
<div class="breadcrumbs">
    <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
        ?>
        <p class="post__date">
            <span><?php echo 'Posted on: ' . get_the_date(); ?></span>
        </p>

        <?php endif; ?>
    </header>

    <div class="post__thumbnail news-single-slider">
        <?php the_post_thumbnail('full'); ?>
        <img src="<?php echo get_site_url(); ?>/media/content-image-20.jpeg" />
        <img src="<?php echo get_site_url(); ?>/media/content-image-20.jpeg" />
        <img src="<?php echo get_site_url(); ?>/media/content-image-20.jpeg" />
    </div>




    <div class="entry-content">
        <?php
        the_content(sprintf(
            wp_kses(
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'ksnepal'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            get_the_title()
        ));
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'ksnepal'),
            'after'  => '</div>',
        ));
        ?>
    </div>
    <div class="entry-social site-header-social">
        Share:
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank">
            <span class="icon-facebook"></span>
        </a>

    </div>
</article>