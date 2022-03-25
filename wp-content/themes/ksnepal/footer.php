<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the .flex-shrink-0 div and all after .content div.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ksnepal
 */

use YoastSEO_Vendor\GuzzleHttp\Promise\Is;

?>
</main>
<footer class="site-footer mt-auto">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-left">
                    <h3><?php echo get_field('ks_column_one_title', 'options') ? get_field('ks_column_one_title', 'options') : 'समाजको सम्बन्धित' ?>
                    </h3>
                    <?php
                    $featured_posts = get_field('ks_page', 'options');
                    if ($featured_posts) :
                    ?>
                    <ul class="footer-list">
                        <?php foreach ($featured_posts as $post) :
                                setup_postdata($post); ?>
                        <li><a
                                href="<?php echo get_the_permalink(); ?>"><?php echo get_field('ks_nepali_title', get_the_ID()) ? get_field('ks_nepali_title', get_the_ID()) : get_the_title(); ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php
                        wp_reset_postdata();
                    endif; ?>
                </div>


                <div class="col-md-4 text-left">
                    <div class="footer-list follow-us">
                        <h3><?php echo get_field('ks_column_two_title', 'options') ? get_field('ks_column_two_title', 'options') : 'हामीलाई अनुसरण गर्नुहोस्' ?>
                        </h3>
                        <?php if (have_rows('ks_social_icons', 'options')) { ?>
                        <?php while (have_rows('ks_social_icons', 'options')) {
                                the_row(); ?>
                        <a
                            href="<?php echo get_sub_field('ks_social_icons_link') ? get_sub_field('ks_social_icons_link') : '#' ?>"><span
                                class="icon-<?php echo get_sub_field('ks_social_icon') ?>"></span></a>
                        <?php } ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-4 text-left">
                    <h3><?php echo get_field('ks_column_two_title', 'options') ? get_field('ks_column_two_title', 'options') : '' ?>
                    </h3>
                    <ul class="footer-list">
                        <li><span class="icon-<?php echo get_field('ks_location_info_icon', 'options') ?>"> </span>
                            <?php echo get_field('ks_location_info_title', 'options'); ?>:
                            <?php echo get_field('ks_location_info_detail_text', 'options')  ?>
                        </li>

                        <li> <span class="icon-<?php echo get_field('ks_telephone_icon', 'options') ?>"></span>
                            <?php echo get_field('ks_telephone_title', 'options') ?>:
                            <?php if ($tel = get_field('ks_phone_number', 'options')) { ?>
                            <a href="tel:+<?php echo str_replace('-', '', $tel) ?>"><?php echo $tel;
                                                                                        ?></a>,
                            <?php } ?>
                            <?php if ($optTel = get_field('ks_optional_phone_number', 'options')) { ?>
                            <a href="tel:+<?php echo str_replace('-', '', $optTel) ?>">
                                <?php echo $optTel; ?></a>
                            <?php } ?>
                        </li>
                        <li> <span class="icon-<?php echo get_field('ks_email_icon', 'options') ?>">
                                <?php echo get_field('ks_email_title', 'options') ?>:
                                <a href="mailto:<?php echo get_field('ks_email', 'options') ?>"
                                    target="_blank"><?php echo get_field('ks_email', 'options') ?></a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container">
            <?php printf(esc_html__('%1$s %2$s, All rights reserved', 'ksnepal'), '&copy; ' . date('Y'), get_bloginfo('name')); ?>
        </div>
    </div>
    <!-- <span class="sep"> | </span> -->
    <?php // printf( esc_html__( 'Web Design By %1$s.', 'ksnepal' ), 'Siddanta' ); 
    ?>

</footer>
<a href="#" class="scroll-top on"><i class="fas fac-arrow-up"></i></a>
</div>
<?php wp_footer(); ?>
</body>

</html>