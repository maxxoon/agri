<?php

add_theme_support('title-tag');


// Add css and js file

function agro_css_js_file_enque(){
    wp_enqueue_style('agri_style', get_locale_stylesheet_uri() );
    wp_enqueue_style('agri_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 4.1, 'all');
    wp_enqueue_style('agri_style', get_template_directory_uri() . '/css/style.css', array(), 1.0, 'all');
    wp_enqueue_style('agri_owl-cursel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 3.0, 'all');
    wp_enqueue_style('agri_respomsive', get_template_directory_uri() . '/css/responsive.css', array(), 1.0, 'all');
    // font link
    wp_enqueue_style('agro_google-font',  'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', false);


    // This is for javascript 
    wp_enqueue_script( 'agro-HTML5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-jquery-min', get_template_directory_uri() . './js/jquery.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-bootstrap-min', get_template_directory_uri() . './js/bootstrap.min.js', array(), 4.1, true );
    wp_enqueue_script( 'agro-jquery-min-3.0-min', get_template_directory_uri() . './js/jquery-3.0.0.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-owl-cursel', get_template_directory_uri() . './js/owl.carousel.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-bootstrap-datepk', get_template_directory_uri() . './js/bootstrap.bundle.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-custom', get_template_directory_uri() . './js/custom.js', array(), 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'agro_css_js_file_enque' );
