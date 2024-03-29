<?php

use function PHPSTORM_META\registerArgumentsSet;
// fronted styling
function icodeguru_files()
{
    wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
    wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_enqueue_style('icodeguru_main_styles', get_stylesheet_uri());
    wp_enqueue_style('main-fonts', get_theme_file_uri('/Fonts/stylesheet.css'));

    wp_enqueue_script('main-js', get_theme_file_uri('/main.js'), NULL, '1.0');
}

add_action('wp_enqueue_scripts', 'icodeguru_files');



// backend styling 
function icodeguru_backend_files()
{
    $current_page = isset($_GET['page']) ? $_GET['page'] : '';
    if ($current_page === 'Theme-settings')
        wp_enqueue_style('bootstrap-cdn_backend', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons_backend', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
    wp_enqueue_style('fontawesome-cdn_backend', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_enqueue_style('icodeguru_backend_styles', get_theme_file_uri('/admin-styling.css'));

    wp_enqueue_script('backend-js', get_theme_file_uri('/admin-script.js'), NULL, '1.0');
}

add_action('admin_enqueue_scripts', 'icodeguru_backend_files');


// Navigation Menus

function icodeguru_theme_features()
{
    register_nav_menus(array(
        'primary' => 'Main Menu',
        'secondary' => 'Secondary Menu',
        'useful'  => 'Useful Links'
    ));

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'icodeguru_theme_features');



// Register Sidebar
function icodeguru_sidebars()
{
    register_sidebar(array(
        'name'  => ('Sidebar 1'),
        'id' => 'sidebar-1',
        'before_widget' => '<section id="first-sidebar" class="sidebar1">',
        'after_widget' => '</section>'
    ));
}

add_action('widgets_init', 'icodeguru_sidebars');



function icodeguru_settings_page()
{
    add_menu_page(
        'Icodeguru Theme',   // Page Title
        'Icodeguru Theme',    // Menu Title
        'manage_options',    // Capability Required
        'Theme-settings',    // Menu Slug
        'mytheme_settings_page',  // Callback function
        'dashicons-calendar',
        100,
    );
}

add_action('admin_menu',  'icodeguru_settings_page');



// Theme Settings Callback function file linking here
require_once(get_theme_file_path('/includes/theme-settings.php'));
