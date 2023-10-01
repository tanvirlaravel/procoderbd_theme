<?php 
/*
*   My Theme Functions
*/

// Theme Title
add_theme_support( 'title' );


// Theme CSS & JS file calling
function ali_css_js_file_calling() {
    // wp_enqueue_style( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $media:string )
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_register_style( $handle:string, $src:string|false, $deps:array, $ver:string|boolean|null, $media:string )
    wp_register_style( "bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.2', 'all'  );
	wp_enqueue_style( 'bootstrap');
    wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all'  );
	wp_enqueue_style( 'custom');


    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ),'5.3.2', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( ),'1.0.0', true );


    

	
}
add_action( 'wp_enqueue_scripts', 'ali_css_js_file_calling' );
