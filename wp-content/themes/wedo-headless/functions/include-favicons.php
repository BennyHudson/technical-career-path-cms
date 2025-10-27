<?php
	function wedo_login_logo() { ?>
		<style type="text/css">
			body.login div#login h1 a {
				background-image: url('<?php echo get_bloginfo( 'template_directory' ) ?>/assets/favicons/mstile-310x310.png');
				display: block;
				background-size: contain;
			}
		</style>
	<?php }

	function my_login_logo_url() {
	    return get_bloginfo( 'url' );
	}
	add_filter( 'login_headerurl', 'my_login_logo_url' );
	
	function wedo_favicon() {
		echo '<link rel="shortcut icon" href="' . get_bloginfo( 'template_directory' ) .'/assets/favicons/apple-touch-icon-144x144.png" />';
	}
?>
