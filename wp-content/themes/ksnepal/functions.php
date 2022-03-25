<?php

/**
 * ksnepal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ksnepal
 */

if (!function_exists('ksnepal_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ksnepal_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ksnepal, use a find and replace
		 * to change 'ksnepal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('ksnepal', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'nav-pri' => esc_html__('Primary', 'ksnepal'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('ksnepal_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'ksnepal_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ksnepal_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('ksnepal_content_width', 640);
}
add_action('after_setup_theme', 'ksnepal_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ksnepal_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'ksnepal'),
			'id'            => 'sidebar',
			'description'   => esc_html__('Add widgets here.', 'ksnepal'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Program-Sidebar', 'ksnepal'),
			'id'            => 'program-sidebar',
			'description'   => esc_html__('Add widgets here.', 'ksnepal'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'ksnepal_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ksnepal_scripts()
{
	wp_enqueue_style('ksnepal-style', get_stylesheet_uri());

	add_action('wp_head', function () {
		echo '<script>var ss;</script>';
	}); // don't remove
	wp_enqueue_script('ksnepal-bundle', get_template_directory_uri() . '/js/bundle.js', array('jquery'), null, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ksnepal_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/*
customs post
*/
require get_template_directory() . '/inc/custom-post.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


/*
 * Brand functionality.
*/
add_filter('get_custom_logo', 'ss_logo_class_name');
function ss_logo_class_name($html)
{
	$html = str_replace('custom-logo', 'navbar-brand', $html);
	$html = str_replace('custom-logo-link', 'navbar-brand', $html);

	return $html;
}
function get_brand()
{
	if (get_custom_logo()) :
		the_custom_logo();
	else :
		$img = array('logo.svg', 'logo.png', 'logo.jpg');
		$brand = '<span>' . get_bloginfo('name') . '</span>';
		foreach ($img as $logo) {
			if (file_exists(get_template_directory() . '/img/' . $logo)) {
				$brand = '<img src="' . get_template_directory_uri() . '/img/' . $logo . '" alt="' . get_bloginfo('name') . '">';
			} elseif (file_exists(get_template_directory() . '/images/' . $logo)) {
				$brand = '<img src="' . get_template_directory_uri() . '/images/' . $logo . '" alt="' . get_bloginfo('name') . '">';
			}
		}
		return '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '">' . $brand . '</a>';
	endif;
	return false;
}
function the_brand()
{
	echo get_brand();
}

/**
 * Load Custom Login with Ajax
 */
//require get_template_directory() . '/inc/custom-login.php';

/**
 * Load Custom Nav Walker.
 */
if (!file_exists(get_template_directory() . '/inc/ss-bootstrap-navwalker.php')) {
	wp_die('<div style="text-align:center"><h1 style="font-weight:normal">Custom Walker Nav Not Found</h1><p>Opps we have got error!<br>It appears the bootstrap-navwalker.php file may be missing.</p></div>', 'Custom Walker Nav Not Found');
} else {
	require_once get_template_directory() . '/inc/ss-bootstrap-navwalker.php';
}

/**
 * Load Custom Breadcrumbs.
 */
if (!file_exists(get_template_directory() . '/inc/ss-breadcrumbs.php')) {
	wp_die('<div style="text-align:center"><h1 style="font-weight:normal">Breadcrumbs Not Found</h1><p>Opps we have got error!<br>It appears the breadcrumbs.php file may be missing.</p></div>', 'Breadcrumbs Not Found');
} else {
	require_once get_template_directory() . '/inc/ss-breadcrumbs.php';
}

/*
 * Image
 */
function get_svg_tpl($width = null, $height = null)
{
	return '<svg class="svg img-fluid" viewBox="0 0 ' . $width . ' ' . $height . '" width="' . $width . '" height="' . $height . '"></svg>';
}

/**
 * ACF
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}
function theme_enqueue_scripts()
{
	// wp_enqueue_style('MDB_css', get_template_directory_uri() . '/vendors/MDB/css/mdb.min.css', array(), '4.9.0');
	// wp_enqueue_script('jQuery', get_template_directory_uri() . '/vendors/MDB/js/jquery.min.js', array(), '3.3.1', true);
	//wp_enqueue_script('MDB', get_template_directory_uri() . '/vendors/MDB/js/mdb.min.js', array(), '4.9.0', true);
	//wp_enqueue_script('Bootstrap', get_template_directory_uri() . '/vendors/MDB/js/bootstrap.min.js', array(), '1.0.0', true);
	// wp_enqueue_script('Tether', get_template_directory_uri() . '/vendors/MDB/js/popper.min.js', array(), '1.0.0', true);
	wp_enqueue_style('video-css', get_template_directory_uri() . '/vendors/video-js/video-js.min.css');
	wp_enqueue_script('video-js', get_template_directory_uri() . '/vendors/video-js/video.min.js');
	//lightbox
	wp_enqueue_style('lightbox_css', get_template_directory_uri() . '/vendors/lightbox/css/lightbox.min.css', array(), '4.9.0');
	wp_enqueue_script('lightbox', get_template_directory_uri() . '/vendors/lightbox/js/lightbox.min.js', array(), '4.9.0');
	wp_enqueue_script('slick', get_template_directory_uri() . '/vendors/slick/slick.min.js', array(), '1.8.1');
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/vendors/slick/slick.css', array(), '1.8.1');
	wp_enqueue_script('flickityjs', get_template_directory_uri() . '/vendors/flickity/flickity.pkgd.min.js', array('jquery'), '2.2.1', true);
	wp_enqueue_style('flickitycss', get_template_directory_uri() . '/vendors/flickity/flickity.css', 'all');
	wp_enqueue_script('match-height', get_template_directory_uri() . '/vendors/match-height/jquery.matchHeight.js');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


add_theme_support('post-thumbnails');
add_image_size('fblog-thumb', '120', '75', true);
add_image_size('single-news', '600', '372', true);
add_image_size('news-div', '370', '270', true);
add_image_size('program-div', '370', '300', true);
add_image_size('program-archive', '790', '526', true);
add_image_size('program-single', '1170', '600', true);
add_image_size('message', '350', '487', true);


class Ss_Recent_Posts_Widget extends WP_Widget_Recent_Posts
{
	function widget($args, $instance)
	{
		if (!isset($args['widget_id'])) {
			$args['widget_id'] = $this->id;
		}
		$title = (!empty($instance['title'])) ? $instance['title'] : __('Recently Added');
		$title = apply_filters('widget_title', $title, $instance, $this->id_base);
		$number = (!empty($instance['number'])) ? absint($instance['number']) : 5;
		$show_date = isset($instance['show_date']) ? $instance['show_date'] : false;
		if (!$number) $number = 5;

		$r = new WP_Query(apply_filters('widget_posts_args', array(
			'post_type' => get_post_type(),
			'posts_per_page' => $number,
			'post__not_in' => array(get_the_ID()),
			'no_found_rows' => true,
			'post_status' => 'publish',
			'ignore_sticky_posts' => true
		)));
		if ($r->have_posts()) :
			echo $args['before_widget'];
			// echo '<div class="ur-blog__latest-post ur-blog__sidebar-item">';
			if ($title) {
				echo '<div class="block-title">' . $title . '</div>';
			}

			while ($r->have_posts()) : $r->the_post();
				global $post;
				echo '<div class="posts">';
				echo '<div class="recently-added">';
				echo '<figure><a href="' . get_the_permalink() . '">';
				if (get_the_post_thumbnail())
					the_post_thumbnail('fblog-thumb');
				else {
					$image = get_field('background_image', 'option');
					echo '<img width="120" height="75" src="' . $image['sizes']['fblog-thumb'] . '" class="attachment-fblog-thumb size-fblog-thumb wp-post-image" alt="">';
				}
				echo '</a></figure>';
				echo '<div class="contents">';
				echo '<h4><a href="' . get_the_permalink() . '">' . (get_the_title() ? wp_trim_words(get_the_title(), 6, '...') : get_the_ID()) . '</a></h4>';
				echo '<div class="posted-on"><i class="icon icon-clock"></i>';
				echo '<h6>';
				echo '<p datetime="' . get_the_date('c') . '" itemprop="datePublished">' . get_the_date('F j, Y') . '</p>';
				echo '</h6>';
				echo "</div>";
				echo '</div>';
				echo '</div>';
				echo '</div>';

			endwhile;
			// echo '</div>';

			echo $args['after_widget'];
			wp_reset_postdata();
		endif;
	}
}
function ss_recent_post_widget()
{
	unregister_widget('WP_Widget_Recent_Posts');
	register_widget('Ss_Recent_Posts_Widget');
}
add_action('widgets_init', 'ss_recent_post_widget');

if (!function_exists('yith_wcbr_change_image_single_product_brads')) {
	function yith_wcbr_change_image_single_product_brads($image, $thumbnail_id)
	{
		$image = wp_get_attachment_image($thumbnail_id, array(200, 200));

		return $image;
	}

	add_filter('yith_wcbr_image_size_single_product_brads', 'yith_wcbr_change_image_single_product_brads', 10, 2);
}