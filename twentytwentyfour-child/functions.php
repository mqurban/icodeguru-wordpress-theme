<?php


function child_theme_scripts()
{

    wp_enqueue_style('child-theme-styling', get_theme_file_uri('/style.css'));
}

add_action('wp_enqueue_scripts', 'child_theme_scripts');


register_nav_menu('primary', 'Menu 1');
