<?php
add_action( 'wp_enqueue_scripts', 'devday_enqueue_styles' );

function devday_enqueue_styles() {
	wp_enqueue_style( 
		'devday-style', 
		get_stylesheet_uri()
	);
}
?>
