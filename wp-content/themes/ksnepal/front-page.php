<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ksnepal
 */

get_header();
?>

<section class="inner-banner__alt inner-banner front-part banner bg-cover">
    <img src="<?php echo get_field('ks_background_image') ? get_field('ks_background_image')['url'] : get_site_url() . '/media/knowledge-base-wordpress-theme-header.jpeg' ?>"
        alt="<?php echo get_field('ks_background_image') ? get_field('ks_background_image')['alt'] : 'page-banner' ?>">
    <div class="inner-banner__altcontent">
        <div class="text-center">
            <h1><?php echo get_field('ks_background_title') ? get_field('ks_background_title') : 'क्षत्री समाज नेपाल'; ?>
            </h1>
        </div>
        <div class="text-center">
            <h2><?php echo get_field('ks_background_subtitle') ? get_field('ks_background_subtitle') : ''; ?></h2>
        </div>
    </div>
</section>

<section class="introduction-part">
    <div class="container">
        <div class="sub-heading">परीचय</div>
        <div class="row">

            <div class="col-lg-6">
                <h2 class="custom-heading">राष्ट्रिय अखण्डता र जातीय सदभावका निम्ति क्षत्री एकता आजको आवश्यकता</h2>

            </div>
            <div class="col-lg-6">
                <p>
                    नेपालमा बसोबास गर्ने एक जाति हो । यो जाती नेपालमा सबै भन्दा धेरै २३ प्रतिशत भएको र देशभरी पाइने जाती
                    हो । यो जाती नेपालका अलावा तत्कालीन बिशाल नेपालका भु-भागहरू हाल
                    भारतमा पर्ने उत्तराखण्ड, हिमाञ्चल प्रदेश ,
                    दार्जीलिङ, कालीम्पोग, सिक्किम का साथै भुटान, बर्मा तथा भारतका अन्य भुभाग तथा विश्वका विभिन्न उमा
                    रोजगारी तथा बसोबासका लागी पुगेको छ ।
                    <!--नेपाली क्षेत्रीहरू खस प्रजाती (काश्मीर देखी भुटान सम्मको हिमालयको
                    दक्षिणी
                    पाखोमा बस्ने ) को हांगा हुन । खस खस आर्य समुहको एक जातीय समुदाय हो, जसले नेपालको पहाडी भूभागको
                    सबैभन्दा बढी
                    जनसंख्या ओगटेको छ । यो जातीका अन्य नामहरू पर्वते, गोर्खाली र नेपाली हुन् । यो जाती तत्कालिन बिशाल
                    नेपाल —
                    हाल भारतमा पर्ने हिमाञ्चल प्रदेश तथा उतराखंड का साथै सुदुर तथा मध्य पश्चिम नेपालको कर्णाली क्षेत्रमा
                    प्राग
                    एतिहासिक कालखण्ड देखी बसोबास गरेको हो । त्यहाँबाट खसहरू नेपालको पूर्वी भागमा फैलदै गए र हाल नेपालको
                    प्रायः
                    सबैजसो ाउँमा बसोबास गर्न पुगेका छन् । -->
                </p>
                <div class="button-wrapper">
                    <a href="<?php echo get_site_url() . '/introduction' ?>" class="btn btn-default">
                        <span class="cms-button-text">थप हेर्नुहोस्</span>
                        <span class="icon-arrow-right2"> </span>
                    </a>
                </div>

            </div>
        </div>
        <!-- content goes here -->
    </div>
</section>

<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6,
);
$query = new WP_Query($args);
if ($query->have_posts()) { ?>
<section class="news-section meta-link news-section-home">
    <div class="container">
        <div class="box-heading text-center">
            <h2 class="h1">समाचार</h2>
        </div>
        <div class="news-content">
            <div class="news-element news-slider">
                <?php
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                <div class="pl-2 pr-2">
                    <div class="news-item same-height">
                        <div class=news-single-item>
                            <div class="news-item__img">
                                <div class="img-item">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <?php
                                                if (has_post_thumbnail())
                                                    echo get_the_post_thumbnail(get_the_ID(), 'news-div');
                                                else
                                                    echo '<img width="370" height="270" src="' . get_site_url() . '/media/content-image-20-370x270.jpeg" class="attachment-news-div size-news-div wp-post-image" alt="">';
                                                ?>
                                    </a>
                                </div>
                                <div class="post-category">BatteryMaterials, Solar PV Materials</div>
                            </div>
                            <div class="news-item__text">
                                <h4><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                                <ul class="entry-meta">
                                    <li class="post-date"><?php echo get_the_date(); ?></li>
                                    <?php if (get_the_author()) { ?>
                                    <li class="author">
                                        <?php echo get_the_author(); ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="entry-content">
                                    <?php echo wp_trim_words(get_the_excerpt(), 15, '[...]'); ?>
                                </div>
                                <div class="entry-readmore">
                                    <a href="<?php echo get_the_permalink(); ?>"
                                        class="btn btn-primary btn-primary--black">थप हेर्नुहोस्</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                    wp_reset_query();
                    ?>
            </div>
            <div class="goto-link">
                <a href="<?php echo get_site_url() . '/news' ?>" class="hover-underline-out underline-primary">थप
                    समाचार
                    हेर्नुहोस्</a>
            </div>
        </div>
    </div>
</section>

<?php } ?>
<section class="msg-section msg-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-section">
                    <?php $presidentImage = get_field('ks_president_image');
                    ?>
                    <div class="img-inner">
                        <img class="lb-image" src="<?php echo $presidentImage['sizes']['message'] ?>" alt="" />
                        <div class="designation-inner">
                            <h4>प्रा.डा. दिल बहादुर
                                क्षत्री</h4>
                            <p>अध्यक्ष</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="content-section">
                    <h2>अध्यक्षको अपिल</h2>
                    <p>आजका ज्ञानवीर, दानवीर तथा शुभचिन्तकले खोजी र जगेर्ना नगरे लोप हुँदै जाने निश्चित छ । ती
                        व्यक्तित्वहरूले आफ्नो कर्म, बुद्धि, वीरताको योगदान राष्ट्रलाई छाडी गएका छन् । त्यसलाई हामीले
                        सधैंका लागि, सबैका सामु नासोको रूपमा राष्ट्रियताको गौरव बनाउनुपर्छ । भावी पुस्ताका लागि
                        जोगाइराख्नु हाम्रो कर्तव्य हो । इतिहास हेरेर आज काम गर्ने र भोलिको पुस्तालाई हस्तान्तरण
                        गर्नुपर्ने सर्वमान्य सिद्धान्तलाई बिर्सनु हुँदैन । सामाजिक मान्यतासहित राष्ट्रलाई सही बाटोमा
                        डोर्‍याउने अग्रपंक्तिमा लाग्नुपर्छ ।</p>
                    <p>आजका ज्ञानवीर, दानवीर तथा शुभचिन्तकले खोजी र जगेर्ना नगरे लोप हुँदै जाने निश्चित छ । ती
                        व्यक्तित्वहरूले आफ्नो कर्म, बुद्धि, वीरताको योगदान राष्ट्रलाई छाडी गएका छन् । त्यसलाई हामीले
                        सधैंका लागि, सबैका सामु नासोको रूपमा राष्ट्रियताको गौरव बनाउनुपर्छ । भावी पुस्ताका लागि
                        जोगाइराख्नु हाम्रो कर्तव्य हो । इतिहास हेरेर आज काम गर्ने र भोलिको पुस्तालाई हस्तान्तरण
                        गर्नुपर्ने सर्वमान्य सिद्धान्तलाई बिर्सनु हुँदैन । सामाजिक मान्यतासहित राष्ट्रलाई सही बाटोमा
                        डोर्‍याउने अग्रपंक्तिमा लाग्नुपर्छ ।</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-section bck-color">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="text-wrap">
                    <h2 class="font-weight-semibold">रणनिति र उद्देश्य</h2>
                    <p>सबैभन्दा बलवान समय हुन्छ भन्ने कुरा इतिहासले प्रमाणित गरिसकेको छ । त्यसैले भनिन्छ र हो पनि मानिस
                        व्यक्ति वा समुदाय आफूलाई समय सापेक्ष बनाई तदनुसार चल्न सकेन भने उसको अस्तित्व नै संकटमा पर्दछ ।
                        नेपालको सर्न्दर्भमा मुख्य र बहुसंख्यक जातिका रूपमा रहेका खश क्षत्रीहरूले युगौंसम्म सांग निक
                        रूपमा
                        गोलबन्द हुनुपर्ने आवश्यकता महसूस गरेनन् । तर केही वर्षेखि मुलुकभित्र विविध जाति वा समूहगत
                        ध्रुवीकरणको प्रक्रिया जोडतोडका साथ अघि बढिरहेको देखिन्छ । अधिकांश जातजातिहरू आ-आफ्नो जातीय संग
                        नका
                        नाउँमा गोलबन्द बन्दै गएको अवस्था विद्यमान छ । जनजाति, दलित र मधेसी समुदायको दृष्टिमा खश
                        क्षत्रीहरू
                        यस मुलुकका सुविधा सम्पन्न र हैकमवादी जातिको रूपमा देखाइएका छन्</p>
                </div>
            </div>
            <div class="col-xl-6">
                <!-- <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item"
                        src="https://www.youtube.com/embed/Hh13aheolys?enablejsapi=1&amp;mute=1"
                        allowfullscreen></iframe>
                </div> -->
                <video id="my-player" class="video-js vjs-16-9 vjs-big-play-centered" controls preload="auto"
                    poster="//vjs.zencdn.net/v/oceans.png" data-setup='{}'>
                    <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                    </source>
                    <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm">
                    </source>
                    <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                    </source>
                </video>
            </div>
        </div>
    </div>
</section>


<?php
$progArgs = array(
    'post_type' => 'program',
    'post_status' => 'publish',
    'posts_per_page' => 6,
);
$progQuery = new WP_Query($progArgs);
if ($query->have_posts()) {
?>
<section class="event-activities programs bck-color">
    <div class="container">
        <div class="box-heading text-center">
            <h2 class="h1">कार्यक्रमहरू</h2>
        </div>

        <div class="carousel-items">
            <?php while ($progQuery->have_posts()) {
                    $progQuery->the_post(); ?>
            <div class="carousel-cell program">
                <div class="card same-height">
                    <div class="entry-featured">
                        <!-- <img class="card-img-top"
                            src="<?php ?>"
                            alt="Card image cap"> -->
                        <?php
                                if (has_post_thumbnail())
                                    echo get_the_post_thumbnail(get_the_ID(), 'program-div');
                                else
                                    echo '<img width="370" height="270" src="' . get_site_url() . '/media/content-image-20-370x270.jpeg" class="attachment-news-div size-news-div wp-post-image" alt="">';
                                ?>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo get_the_title(); ?></h4>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 15, '[...]'); ?></p>
                        <div class="entry-readmore">
                            <a class="btn btn-primary" href="<?php echo get_the_permalink(); ?>">थप हेर्नुहोस् <span
                                    class="icon-arrow-right2"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div class="goto-link">
            <a href="<?php echo get_site_url() . '/program' ?>" class="hover-underline-out underline-primary">थप
                कार्यक्रमहरू
                हेर्नुहोस्</a>
        </div>
    </div>
</section>

<?php } ?>

<section class="testimonials programs">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="testimonial-widget elementor-widget-wrap">
                        <div class="elementor-element">
                            <div class="elementor-widget-container">
                                <div class="testimonial-slider">
                                    <div class="cms-client-wrapper">
                                        <div class="client-content">
                                            <div class="client-image">
                                                <img width="100" height="100"
                                                    src="https://demo.farost.net/energia/wp-content/uploads/2021/02/avatar11.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="avatar">
                                            </div>
                                            <div class="right-content">
                                                <h4 class="said">“They were fantastic through the entire purchase
                                                    process.
                                                    Had
                                                    lots
                                                    of
                                                    questions
                                                    and
                                                    they
                                                    were
                                                    patient. When my system arrived, it was well packed and shipping
                                                    done
                                                    smoothly
                                                    with
                                                    xpo.”
                                                </h4>
                                                <div class="name-job">
                                                    <div class="client-name">
                                                        <h5 class="name-text">Martin Hope,</h5>
                                                    </div>
                                                    <div class="client-job">
                                                        <p>Pro Systems Founder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cms-client-wrapper">
                                        <div class="client-content">
                                            <div class="client-image">
                                                <img width="100" height="100"
                                                    src="https://demo.farost.net/energia/wp-content/uploads/2021/02/avatar11.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="avatar">
                                            </div>
                                            <div class="right-content">
                                                <h4 class="said">“They were fantastic through the entire purchase
                                                    process.
                                                    Had
                                                    lots
                                                    of
                                                    questions
                                                    and
                                                    they
                                                    were
                                                    patient. When my system arrived, it was well packed and shipping
                                                    done
                                                    smoothly
                                                    with
                                                    xpo.”
                                                </h4>
                                                <div class="name-job">
                                                    <div class="client-name">
                                                        <h5 class="name-text">Martin Hope,</h5>
                                                    </div>
                                                    <div class="client-job">
                                                        <p>Pro Systems Founder</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cms-client-wrapper">
                                        <div class="client-content">
                                            <div class="client-image">
                                                <img width="100" height="100"
                                                    src="https://demo.farost.net/energia/wp-content/uploads/2021/02/avatar11.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="avatar">
                                            </div>
                                            <div class="right-content">
                                                <h4 class="said">“They were fantastic through the entire purchase
                                                    process.
                                                    Had
                                                    lots
                                                    of
                                                    questions
                                                    and
                                                    they
                                                    were
                                                    patient. When my system arrived, it was well packed and shipping
                                                    done
                                                    smoothly
                                                    with
                                                    xpo.”
                                                </h4>
                                                <div class="name-job">
                                                    <div class="client-name">
                                                        <h5 class="name-text">Martin Hope,</h5>
                                                    </div>
                                                    <div class="client-job">
                                                        <p>Pro Systems Founder</p>
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
            </div>
        </div>
    </div>
</section>

<section class="test-testimonials-overlay">
    <div class="elementor-container">
        <Div class="elementor-row">
            <div class="elementor-column elementor-element-8b0c139">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-element-5db92e6">
                <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <section class="testimonials-overlay">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100">
                                    <div class="elementor-column-wrap">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="condolence-details" id="condolence">
    <section class="condolence justify-content-center condolence-banner bg-cover">
        <img src="http://kshatreesamajnepal.loc/wp-content/uploads/2021/04/pexels-alena-koval-961402-scaled.jpg"
            alt=" img" />
        <div class="container text-center">
            <h2 class="h1 box-heading">हार्दिक श्रद्धांजली</h2>
            <img class="card-img-top"
                src="http://kshatreesamajnepal.loc/wp-content/uploads/2020/03/advance-package-bg.jpg"
                alt="Card image cap">
        </div>
    </section>

    <div class="condolence-content">
        <div class="container">
            <div class="card-cover text-center">
                <div class="condolence-title">
                    <div class="birth-date">2020 BS</div>
                    <h2>श्री ...... ....</h2>
                    <div class="collapsed-date">2080 BS</div>

                </div>
                <div class="card">
                    <div class="condolence-body">
                        <div class="card-inner">
                            <!-- <div class="time-period">
                                2020 BS - 2080 BS
                            </div> -->
                            <div class="card-body">

                                <p>क्षत्री समाज नेपाल,केन्द्रीय समितिका .. २०७७ कार्तिक ९ गते ७८ बर्षको उमेरमा र ५
                                    दिन पछि नै
                                    २०७७ कार्तिक १४ गते .. बर्षको उमेरमा असामयिक निधन
                                    भएकोले हामी सम्पुर्ण खश क्षत्री हरु मर्माहत भएका छौ । यस शोकको घडीमा परिवार आफन्तजन
                                    सबैमा
                                    धैर्य
                                    धारण गर्ने शक्ति प्राप्त होस भन्ने कामना गर्दै समवेदना व्यक्त गर्दछौ ।दिवंगत
                                    आत्माहरु
                                    प्रति
                                    हार्दिक श्रद्धांजलि अर्पण गर्दछौ। क्षत्री समाज नेपाल,केन्द्रीय समितिका .. २०७७
                                    कार्तिक ९
                                    गते
                                    ७८ बर्षको उमेरमा र ५
                                    दिन पछि नै
                                    क्षत्री समाज नेपाल,केन्द्रीय समितिका .. २०७७ कार्तिक ९ गते ७८ बर्षको उमेरमा र ५
                                    दिन पछि नै
                                    २०७७ कार्तिक १४ गते .. बर्षको उमेरमा असामयिक निधन
                                    भएकोले हामी सम्पुर्ण खश क्षत्री हरु मर्माहत भएका छौ । यस शोकको घडीमा परिवार आफन्तजन
                                    सबैमा
                                    धैर्य
                                    धारण गर्ने शक्ति प्राप्त होस भन्ने कामना गर्दै समवेदना व्यक्त गर्दछौ ।दिवंगत
                                    आत्माहरुनै </p>
                                <div class="card__mem text-center">
                                    <div class="mem-one">
                                        <p>केश बहादुर के.सी.</p>
                                        <p>महासचिव</p>
                                    </div>
                                    <div class="mem-two">
                                        <p>प्रा.डा. दिल बहादुर क्षत्री</p>
                                        <p>अध्यक्ष</p>
                                    </div>
                                </div>
                                <!-- <div class="card__logo">
                                    <img width="100" height="101"
                                        src="http://kshatreesamajnepal.loc/wp-content/uploads/2020/03/inner_logo.gif"
                                        class="navbar-brand" alt="Kshetri Samaj">
                                    <div class="fam text-center mt-3">
                                        <h4>क्षत्री समाज नेपाल</h4>
                                        <p>केन्द्रीय समिति परिवार, कास्की</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="image-activities event-activities">
    <div class="container">
        <div class="box-heading text-center">
            <h2 class="h1">Gallery</h2>
        </div>
        <div class="image-slider">
            <div class="image-single">
                <a class="light-box" data-lightbox="image-1" data-title="My caption"
                    href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                    <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                        alt="Card image cap">
                </a>
            </div>

            <div class="image-single">
                <a class="light-box" data-lightbox="image-1" data-title="My caption"
                    href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                    <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                        alt="Card image cap">
                </a>
            </div>


            <div class="image-single">
                <a class="light-box" data-lightbox="image-1" data-title="My caption"
                    href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                    <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                        alt="Card image cap">
                </a>
            </div>

            <div class="image-single">
                <a class="light-box" data-lightbox="image-1" data-title="My caption"
                    href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                    <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                        alt="Card image cap">
                </a>
            </div>
            <div class="image-single">
                <a class="light-box" data-lightbox="image-1" data-title="My caption"
                    href="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg" tabindex="-1">
                    <img src="https://demo.farost.net/energia/wp-content/uploads/2021/01/energia_image12.jpg"
                        alt="Card image cap">
                </a>
            </div>
        </div>
        <div class="goto-link">
            <a href="<?php echo get_site_url() . '/gallery' ?>" class="hover-underline-out underline-primary">थप
                फोटोहरू
                हेर्नुहोस्</a>
        </div>
    </div>
</section>


<?php
get_footer();
?>