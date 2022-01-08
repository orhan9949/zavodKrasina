<?php
/*
 * The template for displaying archive pages
 */

get_header(); 
$sp_obj = new SpClass();?>
<div id="header-image-main">
    <div id="header-image-main-inside " class="news_block">
        <div class="header-image" style="background-image: url(https://orhan-file.ru/zavodkrasina/wp-content/uploads/2021/09/slider-2.jpg); opacity: 1; background-position: center 20%;background-size: cover;"></div>
        <div id="header-page-title">
            <div id="header-page-title-overlay"></div>
            <div id="header-page-title-inside">
                <div class="entry-meta pretitle-meta">
                </div><!-- .entry-meta -->
                <h1><?php $sp_obj->get_title();?></h1>
                <div class="entry-meta aftertitle-meta">
                </div><!-- .entry-meta -->
                <div class="byline"></div>
                <div id="breadcrumbs-container" class="cryout one-column">
                    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                </div><!-- breadcrumbs -->
            </div>
        </div>
    </div><!-- #header-image-main-inside -->
</div>
<div class="open-catalog-nav">
<section id="lp-blocks1" class="lp-blocks news lp-blocks1 lp-blocks-rows-3" style="overflow: inherit;">
    <div class="catalog_navigation">
        <h3 style="text-align: center">Фильтр</h3>
        <?php
        wp_nav_menu( array(
            'container'       => 'ul',
            'theme_location'  => 'menu-3',
            'menu_id'         => 'catalog-nav',
            'menu_class'	  => 'catalog-nav',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ) );
     ?>
    </div>
</section>
    <section id="lp-blocks1" class="lp-blocks news lp-blocks1 lp-blocks-rows-3" style="overflow: inherit;">
        <div class="catalog_navigation mobile">
            <h3 style="text-align: center">Фильтр</h3>
            <?php
            wp_nav_menu( array(
                'container'       => 'ul',
                'theme_location'  => 'menu-4',
                'menu_id'         => 'catalog-nav',
                'menu_class'	  => 'catalog-nav',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ) );

            ?>
        </div>
    </section>
</div>
    <script>
        // if(){
        //
        // }
        $(document).ready(function (){
            if($('#breadcrumbs-nav span:nth-child(3)').text() == 'Каталог'){
                $('.open-catalog-nav').css('display' , 'flex');
            }
        })

        console.log($('#breadcrumbs-nav span:nth-child(3)').text());
    </script>
<section id="lp-blocks1" class="lp-blocks news lp-blocks1 lp-blocks-rows-3" style=" position:relative;">
<?php if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>

		<div <?php post_class('one-post new');?>>
            <a href="<?php echo esc_url(get_the_permalink());?>">
                <div class="lp-block block3">
                    <div class="lp-block-content">
                        <h4 class="lp-block-title"><?php the_title();?></h4>
                        <div class="lp-block-text">
                            <?php

                            if(has_excerpt()){
                                echo wp_kses_post(get_the_excerpt());
                            } else {
                                echo wp_kses_post(wp_trim_words(get_the_content(), 30, ' ...' ));
                            }

                            ?>
                        </div>
                    </div>
                </div><!-- lp-block -->
            </a>
        </div>
    <?php endwhile;

	sp_get_the_pagination();

endif;  ?>
</section>
    <style>
        .open-catalog-nav{
            display: none;
            justify-content: center;
            width: 100%;
            flex-direction: column;
        }
        .news {
            display: flex;
            flex-wrap: wrap;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 10px;
            justify-content: space-around;
        }
        .one-post.new {
            width: 30%;
        }
        .one-post.new .lp-block {
            width: 100%;
        }
        .lp-block-text {
            color: #666666;
        }
        /* #header-image-main-inside {*/
        /*    height: 550px;*/
        /*}*/
        .catalog_navigation.mobile{
            display: none;
        }
        #header-page-title-inside h1 {
            font-family: Oswald;
            font-size: 3em;
            font-weight: 700;
            line-height: 1.4;
            text-transform: uppercase;
        }
        #header-page-title-inside{
            color:#ffffff;
        }
        #header-image-main, #header-image-main-inside {
            margin-bottom: 30px;
        }
        .catalog_navigation {
            display: flex;
            width: 100%;
            padding: 0 0 50px 0;
            flex-direction: column;
        }
        ul#catalog-nav {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 100%;
        }
        #catalog-nav ul.sub-menu li {
            padding: 0;
            margin: 0;
            list-style-type: none;
            width: 188px;
            border-bottom: 1px solid #dee2e6;
        }
        #catalog-nav > li ul.sub-menu {
            display: none;
            overflow: visible;
            position: absolute;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            left: -1px;
            z-index: 9999;
            top: 100%;
            opacity: 0;
            transition: .3s ease-in-out;

        }
        #catalog-nav > li ul.sub-menu > li > ul.sub-menu {
            display: none;
            overflow: visible;
            position: absolute;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            left: 100%;
            z-index: 9999;
            top: 0;
            opacity: 0;
            transition: .3s ease-in-out;
        }
        #catalog-nav ul.sub-menu li a{
            padding: 10px 0;

        }
        #catalog-nav > li:hover > ul.sub-menu {
            display: block;
            opacity: 1;
            overflow: inherit;
            transition: .3s ease-in-out;
        }
        #catalog-nav > li > ul.sub-menu > li:hover > ul.sub-menu {
            display: block;
            opacity: 1;
            overflow: inherit;
            transition: .3s ease-in-out;
        }
        #catalog-nav > li > ul.sub-menu >  li > ul.sub-menu > li:hover > ul.sub-menu {
            display: block;
            opacity: 1;
            overflow: inherit;
            transition: .3s ease-in-out;
        }
        #catalog-nav > li > ul.sub-menu  > li > ul.sub-menu > li > ul.sub-menu > li:hover > ul.sub-menu {
            display: block;
            opacity: 1;
            overflow: inherit;
            transition: .3s ease-in-out;
        }

        ul#catalog-nav > li {
            list-style-type: none;
            width: 190px;
            text-align: center;
            border: 1px solid #dee2e6;
            padding: 5px 1px 5px 2px;
            position: relative;
            margin: 5px 0;
        }
        .catalog_navigation > ul li.menu-item-has-children > a::after {
            content: "\e903";
            position: absolute;
            z-index: 251;
            display: flex;
            align-items: center;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            font-family: "iconmeta";
            opacity: .5;
            -webkit-transition: all .3s ease-out;
            transition: all .3s ease-out;
        }
        .catalog_navigation > ul li > a{
        display: flex;
        width: 100%;
        height: 100%;
        justify-content: center;
        position: relative;
        /*padding: 0 16px 0 0;*/
        font-size: 14px;
        }
        .lp-block {
            padding: 0 2em 1em;
        }
        @media screen and (max-width: 1200px){
            .catalog_navigation.mobile{
                display: flex;
            }
            .catalog_navigation{
                display: none;
            }
            ul#catalog-nav > li {
                margin: 5px 0;
            }
            .catalog_navigation > ul li > a {
                font-size: 12px;
            }
        }

    </style>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.to(".lp-block", {
            scrollTrigger: {
                trigger: ".lp-block",
                toggleActions: "restart none none none"
            },
            stagger:.3,
            opacity: 1,
            y: 0,
            ease: Expo.easeInOut,
            duration: .5

        })
    </script>

<?php
get_footer();