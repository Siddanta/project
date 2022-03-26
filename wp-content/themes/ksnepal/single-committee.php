<?php
get_header();
?>
<section class="inner-banner__alt inner-banner banner news-part bg-cover">
    <?php $image = get_field('ks_background_image'); ?>
    <img src="<?php echo  $image ? $image['url'] :  get_site_url() . '/media/ptt_team.jpeg' ?>"
        alt="<?php echo $image ? $image['alt'] : 'banner'; ?>">
    <div class="inner-banner__altcontent">
        <div class="text-center">
            <h1><?php echo get_field('ks_nepali_title') ?></h1>
            <p>
            <div class="breadcrumbs">
                <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
            </div>
            </p>
        </div>
    </div>
</section>


<div id="news">
    <div class="news-section news-single author-section msg-section">
        <div class="news__container">
            <div class="core__container">
                <div class="news-sub">
                    <div class="left-section lsvr-grid__col">
                        <div class="content-section">
                            <?php echo get_the_content(); ?>
                        </div>
                    </div>

                    <div class="right-section lsvr-grid__col">
                        <div class="title-section">
                            <div class="title text-center">
                                <h2>लेखक</h2>
                            </div>
                            <div class="image-section">
                                <div class="img-inner">
                                    <!-- <img class="lb-image"
                                        src="http://kshatreesamajnepal.loc/wp-content/uploads/2022/03/photo-350x487.jpg"
                                        alt=""> -->

                                    <?php if (has_post_thumbnail()) {

                                        the_post_thumbnail('message');
                                    } else { ?>

                                    <img class="lb-image"
                                        src="<?php echo get_field('ks_committee_member_optional_image', 'options')['sizes']['message'] ?>"
                                        alt="<?php echo get_field('ks_committee_member_optional_image', 'options')['alt']; ?>">
                                    <?php } ?>
                                    <div class="designation-inner">
                                        <h4><?php echo get_field('ks_nepali_title'); ?></h4>
                                        <?php echo get_field('ks_committee_designation') ? '<p>' . get_field('ks_committee_designation') . '</p>' : '' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="author-section msg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">

            </div>

        </div>
    </div>
</section>




<?php get_footer(); ?>