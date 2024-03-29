<?php
/*
Template Name: Post with Left Sidebar
Template Post Type: post,page
*/


get_header();
?>



<div class="sidebar_template_main">

    <div class="sidebar-left">

        <?php
        while (have_posts()) {
            the_post()   ?>
            <h1><?php echo get_the_title();  ?></h1>
            <?php echo get_the_post_thumbnail();  ?>
            <p><?php echo get_the_content();  ?></p>
            <p><?php echo get_the_date();  ?></p>
            <p><?php the_author();  ?></p>
            <?php comments_template(); ?>
        <?php  } ?>

    </div>
    <div class="sidebar-right">

        <div class="box1">
            <h4 style="text-align:center; color:white">All Categories</h4>
            <ul>
                <?php
                $categories = get_categories(
                    array(
                        'hide_empty' => 0,
                    )
                );

                foreach ($categories as $category) {  ?>

                    <li><a href="<?php echo get_category_link($category->term_id);   ?>"><?php echo $category->name;  ?></a></li>

                <?php } ?>
            </ul>

        </div>
        <div class="box1">
            <h4 style="text-align: center; color:white;">Posts by Category</h4>
            <ul>
                <?php

                $category_slug = "uncategorized";

                $category1 = get_category_by_slug($category_slug);

                $category_id = ($category1->term_id);

                $args = array(
                    'cat' => $category_id,
                    'posts_per_page' => 5
                );

                $query = new WP_Query($args);

                while ($query->have_posts()) {
                    $query->the_post()   ?>

                    <li><a href="<?php the_permalink();  ?>"><?php the_title();   ?></a></li>

                <?php }

                ?>
            </ul>
        </div>

        <div class="box1">

            <?php

            $current_post  = get_queried_object();

            $categoryid = wp_get_post_categories($current_post->ID);


            $args1 = array(
                'category__in' => $categoryid,
                'posts_per_page' => 5,
                'post__not_in' => array($current_post->ID),
            );



            $related_posts_query = new WP_Query($args1);

            while ($related_posts_query->have_posts()) {
                $related_posts_query->the_post();

                echo '<li>' . get_the_title() . '</li>';
            }


            ?>

        </div>


    </div>

</div>



<!-- 
<style>
    .box1 li {
        list-style: none;
    }

    .box1 a {
        color: white;
    }

    .box1 {
        width: 80%;
        height: 250px;
        background-color: gray;
        margin: 10px;

    }

    .box1:first-child {
        margin-top: 120px;
    }

    .sidebar_template_main {
        display: flex;
        width: 100%;
        /* height: 100vh; */
        background-color: #37517E;
    }



    .sidebar-left {
        width: 70%;
        /* height: 1000px; */
        background-color: #37517e;
        color: white;
        padding: 150px 70px;
    }

    .sidebar-left a {
        color: white;
    }

    .sidebar-right {
        width: 30%;
        background-color: #37517E;
        /* height: 200px; */
    }
</style> -->