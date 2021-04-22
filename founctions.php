<?php

use function PHPSTORM_META\registerArgumentsSet;

function muli_setup(){
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus( array(
        'nav-1' => '顶部导航'
    ));

}
add_action( 'after_setup_theme', 'muli_setup');


function muli_sidebar(){
    register_sidebar( array(
        'name'
        'id'
        'description'
        'before_widght'
        'after_widght'
        'before_title'
        'after_title'
    ) )


}
add_action( 'widgets_init', 'muli_sidebar' )
?>