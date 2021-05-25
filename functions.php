<?php

function wp_test_theme_support()
{  
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support('custom-logo', $defaults);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
}
add_action('after_setup_theme','wp_test_theme_support');

function testsite_scripts() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'my-style', get_template_directory_uri(). "/assets/css/styles.css", array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-sans', 'https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-italic', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/js/all.js', array(), '1.0.0' );
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/assets/js/scripts.js', array('j'), '1.0.1', true);
    wp_enqueue_script( 'jquery', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true );
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array(), '4.6.0', true );
    wp_enqueue_script( 'anime',  'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'magnific-popup',  'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array(), '3.2.1', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'testsite_scripts' );

function wp_test_menu()
{
    $locations = array(
        'primary' => 'head main menu',
        'footer' => 'footer main menu'
    );

    register_nav_menus($locations);
}
add_action('init', 'wp_test_menu');


?>