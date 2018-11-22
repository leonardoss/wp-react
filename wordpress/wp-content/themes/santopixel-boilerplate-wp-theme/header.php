<?php
/**
 * @package SantoPixel Boilerplate
 */

?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<?php
			$host = $_SERVER['HTTP_HOST'];
			if ( preg_match( '/.+\.(santodev|santopixel)\.com(\.br)?/i', $host ) ) {
				echo '<meta name="robots" content="noindex, nofollow">';
			}
		?>

		<?php
			$metaTitle = wp_title( '|', FALSE, 'right' );
			$metaHomeLink = esc_url( home_url( '/' ) );
			$metaLink = $metaHomeLink;
			$GLOBALS['metaDesc'] = get_bloginfo( 'description' );
			$metaImage = get_template_directory_uri() .'/images/sample-logo.jpg';

			if ( is_single() ) {
				$metaPostID = $wp_query->post->ID;
				$metaLink = get_permalink( $metaPostID );

				$GLOBALS['metaDesc'] = trim( frontend_get_the_excerpt_by_id( $metaPostID , 120) );
				if ( empty( $GLOBALS['metaDesc'] ) ) {
					$GLOBALS['metaDesc'] = $metaTitle;
				}

				if ( has_post_thumbnail( $metaPostID ) ) {
					$metaImage = get_share_image( $metaPostID );
				}
			}
		?>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content="SantoPixel">
		<meta name="URL" content="<?php echo $metaHomeLink ?>">

		<title><?php echo $metaTitle ?></title>
		<meta name="description" content="<?php echo $GLOBALS['metaDesc'] ?>">
		
		<meta property="fb:app_id" content="">
		<meta property="og:title" content="<?php echo $metaTitle ?>">
		<meta property="og:image" content="<?php echo $metaImage ?>">
		<meta property="og:description" content="<?php echo $GLOBALS['metaDesc'] ?>">
		<meta property="og:url" content="<?php echo $metaLink ?>">

    	<!--[if lt IE 9]>
			<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class() ?>>
		
