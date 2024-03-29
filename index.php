<?php

get_header();
?>

<div class="blog-page">

    <?php
    while (have_posts()) {
        the_post() ?>
        <div class="blog-div">
            <div class="post-thumbnail"> <?php echo get_the_post_thumbnail();  ?></div>
            <div class="post-content">
                <h4>Post Name: <?php echo get_the_title();  ?></h4>
                <p>Published By: <?php echo get_the_date();  ?></p>
                <p>By Author: <?php echo get_the_author(); ?></p>
                <a href="<?php the_permalink(); ?>">
                    <p>Read More</p>
                </a>
            </div>
        </div>
        <hr>
    <?php }
    ?>
    <div id="pagination"> <?php echo  get_the_posts_pagination(); ?>
    </div>
</div>

<?php get_footer();  ?>