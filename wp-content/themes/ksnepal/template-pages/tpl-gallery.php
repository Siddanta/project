<?php
/* Template Name: Gallery */
get_header();
?>

<div class="gallery">
    <div class="row">
        <?php if (have_rows('ks_gallery_images')) :
            while (have_rows('ks_gallery_images')) : the_row();
                $select = get_sub_field('ks_select_type');
                if ($select == 'Image') {
                    $img = get_sub_field('ks_image');
                    $caption = get_sub_field('ks_image_caption');
        ?>

        <figure class="col-md-4">
            <a href="<?php echo $img['url'] ?>" data-lightbox="image-1"
                data-title="<?php echo $caption ? $caption : '' ?>">
                <?php //echo get_the_post_thumbnail($img['id'], 'gallery-small'); 
                            ?>
                <?php if ($img) ?>
                <img alt="<?php echo $img['alt'] ?>" src="<?php echo $img['url'] ?>">
            </a>
        </figure>
        <?php } else {
                    $video = get_sub_field('ks_Video_file');
                    $posterImage = get_sub_field('ks_poster_image');
                    //var_dump($video);
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