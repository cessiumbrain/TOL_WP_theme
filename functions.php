<?php

function university_features(){
    wp_enqueue_style('main style', get_stylesheet_uri());

}

add_action('after_setup_theme', 'university_features');
add_theme_support('menus');
register_nav_menu('secondary' , 'Primary Header Nav');
?>