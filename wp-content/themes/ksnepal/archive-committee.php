<?php
get_header();
?>

<section class="inner-banner__alt inner-banner news-part banner bg-cover">
    <?php $image = get_field('ks_background_image'); ?>
    <img src="<?php echo  $image ? $image['url'] :  get_site_url() . '/media/ptt_team.jpeg' ?>"
        alt="<?php echo $image ? $image['alt'] : 'banner'; ?>">
    <div class="inner-banner__altcontent">
        <div class=container>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h1><?php echo get_field('ks_background_title') ? get_field('ks_background_title') : 'नेतृत्व'; ?>
                    </h1>
                    <?php
                    echo get_field('ks_background_subtitle') ?
                        '<p>' . get_field('ks_background_subtitle') . '</p>' : '' ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="breadcrumbs-main__wrap">
    <div class="inner-banner__alt inner-banner_st">
        <div class="container">
            <div class="breadcrumbs-wrap">
                <div class="breadcrumbs">
                    <?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="page-wrap">
    <div class="committee__news">
        <div class="committee__wrap">
            <div class="container">
                <div class="main__committee">
                    <h2>क्षत्री समाज नेपाल केन्द्रीय कार्यसमिति</h2>
                    <div class="committee_row">
                        <?php
                        echo do_shortcode('[ajax_load_more container_type="div" css_classes="row" post_type="committee" posts_per_page="20"  taxonomy="place" taxonomy_terms="central" transition_container="false" images_loaded="true" scroll="false" button_label="थप हेर्नुहोस्"  order="ASC" orderby="menu_order" ]');
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="comm-wrap sub-comm">
            <div class="container">
                <div class="sub-comm-title text-center">
                    <div class="custom-subheading">क्षत्री समाज नेपाल</div>
                    <h2>जिल्ला कार्यसमिति</h2>
                </div>

                <div class="comm-details">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="comm-inner">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <a class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                जिल्ला कार्यसमिति Pokhara
                                            </a>
                                            <span class="icon-circle-up"></span>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <button type="button" class="btn" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Phone Number">
                                                    अध्यक्षः प्रा.डा. दिल बहादुर
                                                    क्षत्री
                                                </button>
                                                <button type="button" class="btn" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Phone Number">
                                                    महासचिव: केश बहादुर के.सी.
                                                </button>
                                                <button type="button" class="btn" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Phone Number">
                                                    ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <a class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                जिल्ला कार्यसमिति Gorkha
                                            </a>
                                            <span class="icon-circle-up"></span>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong>
                                                It is
                                                hidden by
                                                default,
                                                until the collapse plugin adds the appropriate classes that
                                                we
                                                use
                                                to style
                                                each
                                                element. These classes control the overall appearance, as
                                                well
                                                as
                                                the
                                                showing and
                                                hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or
                                                overriding
                                                our default variables. It's also worth noting that just
                                                about
                                                any
                                                HTML can
                                                go within
                                                the <code>.accordion-body</code>, though the transition does
                                                limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <a class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                जिल्ला कार्यसमिति Butwal
                                            </a>
                                            <span class="icon-circle-up"></span>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It
                                                is
                                                hidden by
                                                default,
                                                until the collapse plugin adds the appropriate classes that
                                                we
                                                use
                                                to style
                                                each
                                                element. These classes control the overall appearance, as
                                                well
                                                as
                                                the
                                                showing and
                                                hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS or
                                                overriding
                                                our default variables. It's also worth noting that just
                                                about
                                                any
                                                HTML can
                                                go within
                                                the <code>.accordion-body</code>, though the transition does
                                                limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="comm-inner">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOneS">
                                            <a class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOneS" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                जिल्ला कार्यसमिति #1
                                            </a>
                                            <span class="icon-circle-up"></span>
                                        </h2>
                                        <div id="collapseOneS" class="accordion-collapse collapse"
                                            aria-labelledby="headingOneS" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It
                                                is
                                                shown by
                                                default,
                                                until the collapse plugin adds the appropriate classes that
                                                we
                                                use
                                                to
                                                style each
                                                element. These classes control the overall appearance, as
                                                well
                                                as
                                                the
                                                showing and
                                                hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS
                                                or overriding
                                                our default variables. It's also worth noting that just
                                                about
                                                any
                                                HTML
                                                can go within
                                                the <code>.accordion-body</code>, though the transition does
                                                limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwoS">
                                            <a class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwoS"
                                                aria-expanded="false" aria-controls="collapseTwoS">
                                                जिल्ला कार्यसमिति
                                            </a>
                                            <span class="icon-circle-up"></span>
                                        </h2>
                                        <div id="collapseTwoS" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwoS" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong>
                                                It is
                                                hidden
                                                by default,
                                                until the collapse plugin adds the appropriate classes that
                                                we
                                                use
                                                to
                                                style each
                                                element. These classes control the overall appearance, as
                                                well
                                                as
                                                the
                                                showing and
                                                hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS
                                                or overriding
                                                our default variables. It's also worth noting that just
                                                about
                                                any
                                                HTML
                                                can go within
                                                the <code>.accordion-body</code>, though the transition does
                                                limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThreeS">
                                            <a class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThreeS"
                                                aria-expanded="false" aria-controls="collapseThreeS">
                                                जिल्ला कार्यसमिति
                                            </a>
                                            <span class="icon-circle-up"></span>
                                        </h2>
                                        <div id="collapseThreeS" class="accordion-collapse collapse"
                                            aria-labelledby="headingThreeS" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It
                                                is
                                                hidden
                                                by default,
                                                until the collapse plugin adds the appropriate classes that
                                                we
                                                use
                                                to
                                                style each
                                                element. These classes control the overall appearance, as
                                                well
                                                as
                                                the
                                                showing and
                                                hiding via CSS transitions. You can modify any of this with
                                                custom
                                                CSS
                                                or overriding
                                                our default variables. It's also worth noting that just
                                                about
                                                any
                                                HTML
                                                can go within
                                                the <code>.accordion-body</code>, though the transition does
                                                limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <?php
    get_footer();