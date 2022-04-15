<?php 

function my_theme_support(){
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','my_theme_support');

function load_stylesheets() {
   $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array('bootstrap'), $version, 'all' );
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );
   }
   add_action('wp_enqueue_scripts', 'load_stylesheets');

   function load_scripts() {
      wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
      wp_enqueue_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
      wp_enqueue_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
      wp_enqueue_script('main',get_template_directory_uri() . '/main.js', array(), '1.0', true);
   }
   add_action('wp_enqueue_scripts', 'load_scripts');

function register_menus(){

  $locations = array(
         'primary' => "Primary Sidebar",
         'footer' => "Footer Menu"
  );
       register_nav_menus($locations);
}

add_action('init','register_menus');