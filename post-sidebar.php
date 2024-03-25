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
        <div class="box1"></div>

    </div>

</div>








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
        padding: 50px;
    }

    .sidebar-left a {
        color: white;
    }

    .sidebar-right {
        width: 30%;
        background-color: #37517E;
        /* height: 200px; */
    }
</style>