<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_image_size('agsld', 500, 390, false);


// Add css and js file

function agro_css_js_file_enque(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('agri_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 4.1, 'all');
    wp_enqueue_style('agri_style', get_template_directory_uri() . '/css/style.css', array(), 1.0, 'all');
    wp_enqueue_style('agri-owl-cursel', get_template_directory_uri() . '/inc/owl-cursel/assets/owl.carousel.min.css', array(), 3.2, 'all');
    wp_enqueue_style('agri-owl-cursel-defult', get_template_directory_uri() . '/inc/owl-cursel/assets/owl.theme.default.min.css', array(), 1.0, 'all');
   
     
    wp_enqueue_style('agri_respomsive', get_template_directory_uri() . '/css/responsive.css', array(), 1.0, 'all');
    // font link
    wp_enqueue_style('agro_google-font',  'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', false);


    // This is for javascript 
    wp_enqueue_script( 'agro-HTML5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-jquery-min', get_template_directory_uri() . './js/jquery.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-bootstrap-min', get_template_directory_uri() . './js/bootstrap.min.js', array(), 4.1, true );
    wp_enqueue_script( 'agro-jquery-min-3.0-min', get_template_directory_uri() . './js/jquery-3.0.0.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-owl-cursel', get_template_directory_uri() . './inc/owl-cursel/owl.carousel.min.js', array(), 3.0, true );
    
     
    wp_enqueue_script( 'agro-bootstrap-datepk', get_template_directory_uri() . './js/bootstrap.bundle.min.js', array(), 3.0, true );
    wp_enqueue_script( 'agro-custom', get_template_directory_uri() . './js/custom.js', array(), 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'agro_css_js_file_enque' );


function agro_slider_Cus_post(){
    register_post_type( 'agroslider', array(
        'labels'=> array(
            'name'=>'Slider Menu',
            'menu_name'=>'Slider Menu',
            'all_items'=>'All Sliders',
            'add_new'=>'Add Slider',
            'add_new_item'=>'Add new Slider item'
             ),
            'public'=> true,
            'supports'=> array(
                'title', 'thumbnail'
            ),
            'menu_icon'   => 'dashicons-format-gallery',

    ) );

}
add_action( 'init', 'agro_slider_Cus_post' );


require_once __DIR__ . '/inc/cmb2/init.php';
require_once __DIR__ . '/inc/cmb2/metaboxes.php';
require_once __DIR__ . '/inc/redux/redux-framework.php';
require_once __DIR__ . '/inc/redux/sample/sample-config.php';

