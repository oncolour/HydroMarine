<?php


// Stylesheets and JavaScripts
function hydro_scripts() {
	
	// Main WP Style.css file
	wp_enqueue_style('hydro-style', get_stylesheet_uri());
    
    // Main styling
    wp_enqueue_style('hydro-style-main', get_template_directory_uri() .'/css/hydromarine.min.css');
	
	// jQuery
	wp_enqueue_script('hydro-jquery-script', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
    
    // Main JS file
	wp_enqueue_script('hydro-main-script', get_template_directory_uri() .'/js/hydromarine.min.js');
    
    // Responsive Slides JS file
    wp_enqueue_script('hydro-slides-script', get_template_directory_uri() .'/js/vendor/responsiveslides.min.js');
	
}
add_action('wp_enqueue_scripts', 'hydro_scripts');



?>