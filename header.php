<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Web</title>
    <link rel="stylesheet" href=".Fonts/stylesheet.css">

    <?php
    $my_option = get_option('my_data');
    $font_color = $my_option['font_color'];
    $font_family = $my_option['font_family'];
    $disable_logo = $my_option['disable_logo'];


    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <div class="custom-logo">

                <?php

                if ($disable_logo == 0) {
                    echo get_custom_logo();
                }

                ?>
            </div>

            <a class="navbar-brand" href="#">

                <h1 style="font-family:<?php echo $font_family;  ?>"><?php bloginfo('name');   ?></h1>

                <p style="color: <?php echo $font_color; ?>; font-family:<?php echo $font_family; ?>"><?php bloginfo('description');   ?></p>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-2'
                ));

                ?>
            </div>
        </div>
    </nav>
    <?php wp_head();   ?>
</head>