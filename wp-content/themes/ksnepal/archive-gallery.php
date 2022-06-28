<?php
/* Template Name: Gallery */
get_header();
?>

<div class="gallery">
    <div class="row">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
        <?php if ($img =  get_the_post_thumbnail_url()) {
                    $caption = get_the_content();
                ?>
        <figure class="col-md-4">
            <a href="<?php echo get_the_post_thumbnail_url()
                                    ?>" data-lightbox="image-1" data-title="<?php echo $caption ? $caption : ''
                                                                            ?>">
                <img alt="<?php echo $img['alt']; ?>" src="<?php echo  get_the_post_thumbnail_url() ?>">
            </a>
        </figure>
        <?php } ?>
        <?php if ($video = get_field('ks_video_file')) { ?>
        <?php
                    $posterImage = get_field('ks_gallery_poster_image');
                    ?>
        <figure class="col-md-4" style="align-self: center">
            <video id="my-player" class="video-js vjs-fill vjs-big-play-centered" controls preload="auto"
                poster="<?php echo  $posterImage ? $posterImage['url'] : ''; ?>" data-setup='{}'>
                <source src="<?php echo $video['url']; ?>" type="video/mp4">
                </source>
                <!-- <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm">
                </source>
                <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
                </source> -->
            </video>
        </figure>
        <?php } ?>
        <?php
            endwhile;
        endif; ?>

    </div>

</div>
<?php
get_footer();
?>