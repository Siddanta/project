<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ksnepal
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>

    <div class="site-wrapper <?php if (is_single())  echo 'single__post-container' ?>">
        <?php $headerClass = is_front_page()  ? ' header-bar header-plain' : ' header-bar header-blue';
        //$fixedClass = is_page('committee') || is_home() || is_page('contact-us') || is_page('program') || is_singular('program') ? 'site-header-fixed' : '';
        $absoluteClass = is_front_page()  ? ' position-absolute' : '';
        $headerTop = is_front_page() ? '' : ' site-header__alter-top';
        $contactPage = is_page('contact-us') ? ' contact-Page' : '';
        ?>

        <header class="site-header<?php echo $headerClass . " " . $absoluteClass; ?>">
            <div class="site-header-top<?php echo $headerTop; ?>">
                <div class="container">
                    <div class="row">
                        <div class="header-top-left">
                            <div class="header-top-item">
                                <span class="icon-phone"></span>
                                <div class="header-top-item-inner">
                                    <span>फोन:</span>
                                    <a href="tel:+९७७०६१५२७०१०">०६१-५२७०१०</a>, <a
                                        href="tel:+९७७०६१५२४३१३">०६१-५२४३१३</a>
                                </div>
                            </div>
                            <div class="header-top-item">
                                <span class="icon-envelop"></span>
                                <div class="header-top-item-inner">
                                    <span>
                                        इ - मेल:</span>
                                    <a href="mailto:kshatreesamajnepal53@gmail.com"
                                        target="_blank">kshatreesamajnepal53@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-top-right">
                            <div class="site-header-social">
                                <a title="Facebook" href="#"><span class="icon-facebook"></span></a>
                            </div>
                            <div class="header-short-link">
                                <div class="link-item"><a href="<?php echo get_site_url() . "/program" ?>"
                                        target="_blank">
                                        गतिविधि</a></div>
                                <div class="link-item"><a href="<?php echo get_site_url() . "/file-download" ?>"
                                        target="_blank">फाईल डाउनलोड</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light menu-header">
                <div class="container">
                    <div class="row">
                        <div class="site-branding">
                            <?php the_brand(); ?>
                            <a class="site-name-logo logo-light" href="<?php echo get_site_url(); ?>"> <img
                                    src="http://kshatreesamajnepal.loc/wp-content/uploads/2022/03/logo-np.png"
                                    alt="ksn" />
                            </a>
                            <a class="site-name-logo logo-dark" href="<?php echo get_site_url(); ?>"> <img
                                    src="http://kshatreesamajnepal.loc/wp-content/uploads/2022/03/logo-np-dark.png"
                                    alt="ksn" />
                            </a>
                        </div>
                        <div class="site-navigation">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'nav-pri',
                                'depth'              => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse offset',
                                'container_id'    => 'nav-pri',
                                'menu_class'      => 'nav navbar-nav justify-content-center ml-auto',
                                'walker'         => new Bootstrap_NavWalker(),
                                'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                            ));
                            ?>
                            <div class="site-tool<?php echo $contactPage; ?>">
                                <div class="site-header-item site-header-button">
                                    <a class="btn"
                                        href="<?php echo get_the_permalink(get_page_by_path('contact-us')) ?>"
                                        target="_self"
                                        title="Request A Quote <i class=&quot;fas fac-arrow-right&quot;></i>">
                                        सम्पर्क गर्नुहोस <span class="icon-arrow-right2"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <h1 class="site-title sr-only"><a href="<?php //echo esc_url(home_url('/')); 
                                                                    ?>"
                            rel="home"><?php //bloginfo('name'); 
                                        ?></a></h1>
                    <?php
                    //else :
                    ?>
                    <p class="site-title sr-only"><a href="<?php //echo esc_url(home_url('/')); 
                                                            ?>"
                            rel="home"><?php //bloginfo('name'); 
                                        ?></a></p> -->
                    <?php
                    //endif;
                    ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-pri"
                        aria-controls="nav-pri" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--<div class="navbar-overlay"></div>-->


                </div>
            </nav>
        </header>
        <main id="main" class="site-content">