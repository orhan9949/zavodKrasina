<?php
/*
 Template Name: Вакансия
 */

get_header();?>
    <div id="header-image-main">
        <div id="header-image-main-inside " class="news_block">
            <div class="header-image" style="background-image: url(<?php echo get_field('foto_straniczy'); ?>); opacity: 1; background-position: center 20%;"></div>
            <div id="header-page-title">
                <div id="header-page-title-overlay"></div>
                <div id="header-page-title-inside">
                    <div class="entry-meta pretitle-meta">
                    </div><!-- .entry-meta -->
                    <h1><?php echo get_field('naimenovanie_straniczy'); ?></h1>
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
    <section id="lp-blocks1" class="lp-blocks news lp-blocks1 lp-blocks-rows-3">

        <?php $key = get_field('kartochka'); if(!empty($key)){ foreach($key as $keys) { ?>
                <div <?php post_class('one-post new');?>>
                        <div class="lp-block block3">
                            <div class="lp-block-content">
                                <h4 class="lp-block-title"><?php echo $keys['naimenovanie_dolzhnosti'];?></h4>
                                <div class="lp-block-text">
                                    <?php echo $keys['kratkoe_opisanie'];?>
                                </div>
                            </div>
                        </div><!-- lp-block -->
                </div>
                <?php } ?>
        <?php }else{}; ?>

     <?php   sp_get_the_pagination(); ?>

    </section>
    <style>
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
            margin-top: 20px;
        }
        .one-post.new .lp-block {
            width: 100%;
            height: 100%;
        }
        .lp-block-text {
            color: #666666;
        }
        .lp-block {
                margin-right: 0;
                margin-top: 0;
                margin-bottom: 0;
                padding: 0 2em 2em;
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