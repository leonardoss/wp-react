<?php
	/**
	 * @package SantoPixel Boilerplate
	 */

	/**
	 * frontend_ajax_url
	 */
	function frontend_ajax_url() {
		?>
		<script>
			var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ) ?>';
		</script>
		<?php
	}
	//add_action( 'wp_head', 'frontend_ajax_url' );

	/**
	 * ajax_test
	 */
	function ajax_test() {
		die( 'ajax test OK' );
	}
	//add_action( 'wp_ajax_ajax_test', 'ajax_test' );
	//add_action( 'wp_ajax_nopriv_ajax_test', 'ajax_test' );
?>