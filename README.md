# WordPress custom theme tutorial
////
<html lang="<?php language_attributes(); ?>">  https://developer.wordpress.org/reference/functions/language_attributes/
////
<meta charset="<?php bloginfo( 'charset' ); ?>" /> https://developer.wordpress.org/reference/functions/bloginfo/
////
<body <?php body_class(); ?>> https://developer.wordpress.org/reference/functions/body_class/
////
wp_body_open(); Put it in begining of <BODY> (good to check if function_exists('wp_body_open')) cose of compatibility of older versions than 5.2 wp https://developer.wordpress.org/reference/functions/wp_body_open/
////
wp_enqueue_style()   https://developer.wordpress.org/reference/functions/wp_enqueue_style/

    wp_register_style() can be uset to register but enqueue it conditionaly (and then just call name in wp_enqueue_style) https://developer.wordpress.org/reference/functions/wp_register_style/

    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );  get_stylesheet_uri give us a full path to themes style.css

        add in wp_enqueue for version filemtime(get_template_directory() . '/style.css') will make version from (name of file and time) it was updated WORKS FOR SCRIPTS AND THEME STYLE.CSS
////    
wp_enqueue_script()  https://developer.wordpress.org/reference/functions/wp_enqueue_script/

    wp_register_script() can be uset to register but enqueue it conditionaly (and then just call name in wp_enqueue_script) https://developer.wordpress.org/reference/functions/wp_register_script/
////
spl_autoload_register(function ($class)
{
    include('inc/'.$class.'.php');
});
new Person();
new Student();  this will automaticly include class files.. https://developer.wordpress.org/reference/functions/spl_autoload_register/