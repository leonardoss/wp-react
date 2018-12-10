<?php
/**
 * @package DoutorX
 */

?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="author" content="SantoPixel">

		<title><?php echo wp_title( '|', FALSE, 'right' ) ?></title>
		
    	<!--[if lt IE 9]>
			<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		
	</head>

	<body <?php body_class() ?>>
		
