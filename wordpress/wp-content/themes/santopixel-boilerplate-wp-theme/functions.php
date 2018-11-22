<?php
/**
 * @package SantoPixel Boilerplate
 */

    // error_reporting( E_ALL );
    // error_reporting( 0 );
    // error_reporting( E_ERROR | E_WARNING | E_PARSE );


add_action( 'send_headers', 'santopixel_nocache' );

function santopixel_boilerplate_wp_theme_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	// Default Post Thumbnail dimensions (cropped)
	set_post_thumbnail_size( 150, 150, true );

	add_image_size( '1200x', 1200, 9999 ); // the image
	add_image_size( '1440x', 1440, 9999 ); // the image

	// Menus
	register_nav_menus( array(
		'main' => 'Menu principal',
		'footer' => 'Menu rodapé'
	) );
}
add_action( 'after_setup_theme', 'santopixel_boilerplate_wp_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function santopixel_boilerplate_wp_theme_scripts() {
	wp_register_style( 'screen1', get_template_directory_uri().'/styles/styles.css', array(), '20180121' );

	wp_enqueue_style( 'screen1' );
	wp_enqueue_style( 'screen2' );
	wp_enqueue_style( 'screen3' );

	wp_enqueue_script( 'customhead' );
}
add_action( 'wp_enqueue_scripts', 'santopixel_boilerplate_wp_theme_scripts' );


	/**
	 * Custom functions that act independently of the theme templates.
	 */
	require get_template_directory() . '/inc/extras.php';
	
	/**
	 * Custom functions that act independently of the theme templates.
	 */
	// require get_template_directory() . '/inc/helpers.php';
	// require get_template_directory() . '/inc/query_posts.php';
	
	/**
	 * Util functions.
	 */
	require get_template_directory() . '/inc/util.php';
	//require get_template_directory() . '/inc/cron.php';


	// Only site or ajax request
	if ( ! is_admin() || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		require get_template_directory() . '/inc/ajax.php';
	}


    if ( get_magic_quotes_gpc() ) {
        $_POST      = array_map( 'stripslashes_deep', $_POST );
        $_GET       = array_map( 'stripslashes_deep', $_GET );
        $_COOKIE    = array_map( 'stripslashes_deep', $_COOKIE );
        $_REQUEST   = array_map( 'stripslashes_deep', $_REQUEST );
	}

	define('ICL_DONT_LOAD_NAVIGATION_CSS', true);

	
	
?>
