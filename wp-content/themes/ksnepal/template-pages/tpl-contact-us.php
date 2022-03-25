<?php
/* Template Name: Contact Us */

get_header();
?>
<section class="block block-about">
    <div class="row">
        <div class="col-lg-5 align-self-center">
            <div class="get-in-touch">
                <div class="map-contact">
                    <h2 class="text-center">सम्पर्कमा रहनुहोस्</h2>
                    <ul>
                        <li class="map-contact__item">
                            <span class="icon-location2"></span>
                            <h6>ठेगाना</h6>
                            <p>गाइ घाट, कास्की, नेपाल</p>
                        </li>
                        <li class="map-contact__item">
                            <span class="icon-phone"></span>
                            <h6>फोन नम्बर</h6>
                            <p><a href="tel:०६१५२७०१०">०६१-५२७०१०</a>, <a href="tel:०६१५२४३१३">०६१-५२४३१३</a></p>
                        </li>
                        <li class="map-contact__item" data-loaded="true">
                            <span class="icon-envelop"></span>
                            <h6>इ - मेल</h6>
                            <p><a href="mailto:contact@smartsites.com">kshatreesamajnepal53@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe id="gmap_canvas"
                            src="https://maps.google.com/maps?q=kshetry%20samaj&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
get_footer();