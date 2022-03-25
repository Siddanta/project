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
            <!-- <div class="logo mb-3">
                <a class="site-name-logo" href="<?php //echo get_site_url(); 
                                                ?>"> <img
                        src="http://kshatreesamajnepal.loc/wp-content/uploads/2020/03/logo_nep.gif" alt="ksn" width="100" />
                </a>
            </div> -->
            <div class="row">
                <div class="col-md-4 text-left">
                    <h3>समाजको सम्बन्धित</h3>
                    <ul class="footer-list">
                        <li><a href="<?php echo site_url(); ?>/committee/">कार्यसमिति</a></li>
                        <li><a href="<?php echo site_url(); ?>/file-download/">फाईल डाउन लोड</a></li>
                    </ul>
                </div>

                <div class="col-md-4 text-left">
                    <div class="footer-list follow-us">
                        <h3>हामीलाई अनुसरण गर्नुहोस्</h3>
                        <a href="#"><span class="icon-facebook"></span></a>
                    </div>
                </div>

                <div class="col-md-4 text-left">
                    <h3>सम्पर्क</h3>
                    <ul class="footer-list">
                        <li><span class="icon-location2"> </span>गाइ घाट, कास्की, नेपाल</li>
                        <li> <span class="icon-phone"></span> फोन नं : <a href="tel:+९७७०६१५२७०१०">०६१-५२७०१०</a>,
                            <a href="tel:+९७७०६१५२४३१३">०६१-५२४३१३</a>
                        </li>
                        <li> <span class="icon-envelop"> इ - मेल:
                                <a href="mailto:kshatreesamajnepal53@gmail.com"
                                    target="_blank">kshatreesamajnepal53@gmail.com</a></span>
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
<?php if (is_page('committee')) {
    // <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    //echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    //<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>';
}
?>