<?php
	/**
	 * @package SantoPixel Boilerplate
	 */

	get_header();
?>
    <a href="http://www.santopixel.com.br"><img src="<?php echo get_template_directory_uri(); ?>/images/sample-logo.jpg" /></a>
    <h1>SantoPixel Boilerplate</h1>
	<br><br><br>
	<h1>the loop</h1>
	-------<br><br><br>
	<?php

		while ( have_posts() ) : the_post();
			echo "<h2><strong>".get_the_title()."</strong></h2>";
			the_content();
			echo "----------------<br><br><br><br>";
		endwhile;
	?>



<?php	
	get_footer();
?>
	