<?php

$r = new WP_Query(apply_filters('widget_posts_args', array(
    'post_type' => 'program',
    'posts_per_page' => '-1',
    'post_status' => 'publish',
)));
if ($r->have_posts()) :
    echo '<section class="widget recent-post">';
    echo '<h2 class="widget-title">नयाँ कार्यक्रम</h2>';

    while ($r->have_posts()) : $r->the_post();

        echo '<div class="posts">';
        echo '<div class="recently-added">';
        echo '<div class="entry-media">
        <a href="' . get_the_permalink() . '">';
        if (get_the_post_thumbnail())
            the_post_thumbnail('fblog-thumb');
        else {
            $image = get_field('background_image', 'option');
            echo '<img width="120" height="75" src="' . $image['sizes']['fblog-thumb'] . '" class="attachment-fblog-thumb size-fblog-thumb wp-post-image" alt="">';
        }
        echo '</a>
        </div>'; ?>
<div class="contents">
    <div class="posted-on"><i class="icon icon-clock"></i>
        <span>
            <p datetime="<?php echo get_the_date('c') ?>;" itemprop="datePublished"><?php echo get_the_date('F j, Y') ?>
            </p>
        </span>
    </div>
    <h4>
        <a
            href="<?php echo get_the_permalink(); ?>"><?php echo (get_the_title() ? wp_trim_words(get_the_title(), 6, '...') : get_the_ID()); ?></a>
    </h4>
</div>
<?php
        echo '</div>';
        echo '</div>';


    endwhile;
    wp_reset_postdata();
endif;
echo '</section>';