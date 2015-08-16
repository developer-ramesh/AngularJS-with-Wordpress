<?php
function enqueue_theme_style(){
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css?v='.rand(), array(), false);
    
    wp_enqueue_script('angularjs',get_stylesheet_directory_uri() . '/js/angular.min.js');
    wp_enqueue_script('angularjs-route',get_stylesheet_directory_uri() . '/js/angular-route.js');
    
   
    
    wp_enqueue_script( 'angular-app', get_stylesheet_directory_uri() . '/js/app.js', array(), '', true );
    
    wp_localize_script( 'angular-app', 'path', array( 'url' => get_stylesheet_directory_uri().'/', 'site' => get_bloginfo('wpurl').'/') );
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_style' );

function pr($data){
    echo '<pre>';
    print_r($data);
}
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}