<?php
// Theme functions

require_once locate_template('/functions/customizer.php');
require_once locate_template('/functions/widgets.php');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

//load stylesheets
function load_stylesheets(){

wp_register_style('main', get_template_directory_uri() . '/css/style.min.css', array(), 1 ,'all');
wp_enqueue_style('main');

wp_register_style('map', get_template_directory_uri() . '/css/style.min.css.map', array(), 1 ,'all');
wp_enqueue_style('map');

wp_register_style('scss', get_template_directory_uri() . '/css/style.min.scss', array(), 1 ,'all');
wp_enqueue_style('scss');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');




//load scripts
function addjs()
{

    wp_register_script('jqueryM', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), 1 , 1, 1);
    wp_enqueue_script('jqueryM');

    wp_register_script('bootstrap', get_template_directory_uri() . "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), 1 , 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('jqueryE', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array(), 1 , 1, 1);
    wp_enqueue_script('jqueryE');

    wp_register_script('main', get_template_directory_uri() . 'js/main.js', array(), 1 , 1, 1);
    wp_enqueue_script('main');


}
add_action('wp_enqueue_scripts', 'addjs');



