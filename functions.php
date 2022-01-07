<?php

// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'myTheme_setup' ) ) :
 
   function myTheme_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
   }
 
endif;
 
add_action('after_setup_theme', 'myTheme_setup');

function myTheme_scripts_styles(){
   
   wp_enqueue_style('myTheme_style', get_stylesheet_uri(), array(), time());
   wp_enqueue_style( 'myTheme_style_font_awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css');
   wp_enqueue_script( 'myTheme_script_rellax_js', 'https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js');
   wp_enqueue_script( 'myTheme_script_gsap_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js');
   wp_enqueue_script( 'myTheme_script_scroll_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js');
   wp_enqueue_script( 'myTheme_script_typed_js', 'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js');
   
   wp_enqueue_script( 'myTheme_script_main_js', get_template_directory_uri() . '/js/main.js', array(), null, true );
   wp_enqueue_style( 'Inconsolata
   ', 'https://fonts.googleapis.com/css2?family=Inconsolata&display=swap' );
   wp_localize_script('myTheme_script_main_js', 'url', ['url' => get_template_directory_uri(  )]);
   
   
   
}


//excerpt word limit
function ex_length($length){
   return 15;
}

//read more customize
function my_read_more($more){
   return ' ...';
}

add_filter('excerpt_length', 'ex_length');
add_filter('excerpt_more', 'my_read_more');
add_action('wp_enqueue_scripts', 'myTheme_scripts_styles');

// add_action('wp_enqueue_scripts', function() {
//    wp_register_script('myCondition_script_main_js', get_theme_file_uri( 'js/custom_script.js' ), [ 'jquery' ] );
//    wp_localize_script('myCondition_script_main_js', 'localize', ['ajax_url' => admin_url('admin-ajax.php')]);
//    wp_enqueue_script('myCondition_script_main_js');
// } );




