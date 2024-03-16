<?php

function  icodeguru_files()
{
    wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
    wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_enqueue_style('icodeguru_main_styles', get_stylesheet_uri());

    wp_enqueue_script('main-js', get_theme_file_uri('/main.js'), NULL, '1.0');
}

add_action('wp_enqueue_scripts', 'icodeguru_files');
