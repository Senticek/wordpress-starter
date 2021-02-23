<?php
// Theme functions

require_once locate_template('/functions/customizer.php');
require_once locate_template('/functions/widgets.php');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function load_stylesheets(){

wp_register_style('main', get_template_directory_uri() . '/css/style.min.css', array(), 1 ,'all');
wp_enqueue_style('main');

wp_register_style('map', get_template_directory_uri() . '/css/style.min.css.map', array(), 1 ,'all');
wp_enqueue_style('map');

wp_register_style('scss', get_template_directory_uri() . '/css/style.min.scss', array(), 1 ,'all');
wp_enqueue_style('scss');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');
