<?php

/*
Template Name: Новость
Template Post Type: post
*/
get_header();
?>

<div class="news_post" style="max-width: 1300px;margin: 0 auto; padding: 0 10px 50px;">
    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
    <h2 style="text-align: center;"><?php echo get_field('nazvanie'); ?></h2>
    <div class="news_post_img" style="background-image: url(<?php echo get_field('foto'); ?>);height: 350px;width: auto;background-position: center;margin: 20px 0 ;">

    </div>
    <div class="news_post_text">
        <?php echo get_field('text'); ?>
    </div>
</div>
    <style>
        @media screen and (max-width: 768px){
            h2 {
                font-size: 1.5em;
            }
        }
        @media screen and (max-width: 567px){
            h2 {
                font-size: 1.2em;
            }

        }
    </style>
<?php
get_footer();


