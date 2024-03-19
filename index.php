<?php

get_header();
?>

<body>
    <section class="hero-header text-light py-5">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 order-lg-1 order-2 text-lg-start text-center">
                    <h1>BETTER SOLUTIONS FOR YOUR BUSINESS</h1>
                    <p>We are team of talented designers making websites with Bootstrap</p>
                    <div class="d-flex align-items-center mt-5 justify-content-lg-start justify-content-center">
                        <button type="button" class="rounded-pill btn btn-primary me-4 text-light get_started">Get Started</button>
                        <a href="#" class="text-light" type="button"><i class="fa-regular fa-circle-play me-2"></i>Watch Video</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri('/img/hero-img.png');  ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="brands bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-lg-2 col-md-4 col-6 mt-2 mb-2 pt-3 pb-3">
                    <img class="img-fluid w-50" src="./img/client-1.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-2 mb-2">
                    <img class="img-fluid w-50" src="./img/client-2.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-2 mb-2">
                    <img class="img-fluid w-50" src="./img/client-3.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-2 mb-2">
                    <img class="img-fluid w-50" src="<?php echo get_theme_file_uri('/img/client-4.png'); ?>" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-2 mb-2">
                    <img class="img-fluid w-50" src="./img/client-5.png" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 mt-2 mb-2">
                    <img class="img-fluid w-50" src="./img/client-6.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="all-posts">
        <h1>All Posts</h1>

        <?php


        while (have_posts()) {
            the_post() ?>

            <h1><?php the_title();  ?></h1>
            <p><?php the_content();  ?></p>
            <p><?php get_the_title();  ?></p>

        <?php }
        ?>
    </section>
    <section class="about_us mt-5" id="about">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-center">
                    <h1>ABOUT US</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                    <li><i class="fa fa-check-double me-2"></i>Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    <li><i class="fa fa-check-double me-2"></i>Duis aute irure dolor in reprehenderit in voluptate velit</li>
                    <li><i class="fa fa-check-double me-2"></i>Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                </div>
                <div class="col-lg-6 col-md-12 mt-lg-0 mt-5">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <button type="button" class="btn btn-outline-primary text-primary">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter bg-light py-5 mt-3">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mt-3">
                    <h4>Join Our Newsletter</h4>
                </div>
                <div class="col-12 mt-2">
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                </div>
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="input-group mx-auto w-50 mb-3">
                            <input type="email" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                        </div>
                        <input type="submit" value="Subscribe" class="btn btn-primary rounded-pill px-4" id="button-addon2"></input>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer();  ?>