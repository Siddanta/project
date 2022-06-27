<?php if (is_page('gallery')) { ?>
<?php } else { ?>

<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="card__inner">
        <div class="item_image">
            <?php if (get_the_content()) { ?>
            <a href="<?php echo get_permalink(); ?>">
                <?php } ?>
                <?php if (has_post_thumbnail()) {

                        the_post_thumbnail('message');
                    } else { ?>

                <img class="lb-image"
                    src="<?php echo get_field('ks_committee_member_optional_image', 'options')['sizes']['message'] ?>"
                    alt="<?php echo get_field('ks_committee_member_optional_image', 'options')['alt']; ?>">
                <?php } ?>
                <?php if (get_the_content()) { ?>
            </a>
            <?php } ?>
        </div>
        <?php if (get_the_content()) { ?>
        <a href="<?php echo get_permalink(); ?>">
            <?php } ?>
            <div class="card__body bck_overlap">
                <div class="context__text text-center">
                    <h3 class="item-title">
                        <?php echo get_field('ks_nepali_title', get_the_ID()) ?></h3>
                    <div class="item-position">
                        <?php echo get_field('ks_committee_designation', get_the_ID()); ?>
                    </div>
                </div>
                <!-- <div class="content_social bck_overlap">
                    <div class="item-social">
                        <a href="#"><span>View</span></a>
                    </div>
                </div> -->
            </div>
            <?php if (get_the_content()) { ?>
        </a>
        <?php } ?>
    </div>
</div>

<?php } ?>