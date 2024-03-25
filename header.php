<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Web</title>
    <link rel="stylesheet" href=".Fonts/stylesheet.css">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <div class="custom-logo">
                <?php echo get_custom_logo();   ?>
            </div>

            <a class="navbar-brand" href="#">
                <h1><?php bloginfo('name');   ?></h1>
                <p><?php bloginfo('description');   ?></p>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php

                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'navbar-2'
                ))

                ?>
            </div>
        </div>
    </nav>
    <?php wp_head();   ?>
</head>