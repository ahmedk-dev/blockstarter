<?php
function blanktheme_enqueue_assets() {
	wp_enqueue_style(
		'blanktheme-base',
		get_theme_file_uri('/assets/css/base.css'),
		[],
		wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'blanktheme_enqueue_assets');
