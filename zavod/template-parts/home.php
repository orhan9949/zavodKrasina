<?php

/*
Template Name: Главная
*/
get_header();
?>

<?php echo do_shortcode( ' [serious-slider id="7"]' ); ?>
    <section id="lp-blocks1" class="lp-blocks lp-blocks1 lp-blocks-rows-3">
        <div class="lp-blocks-inside">
            <?php $key = get_field('silnye_storony_kartochka')?>
            <?php foreach($key as $keys) {?>
                <div class="lp-block block3">
                    <div class="lp-block-content">
                        <h4 class="lp-block-title"><?php echo $keys['naimenovanie']; ?></h4>
                        <div class="lp-block-text"><?php echo $keys['kratkoe_opisanie']; ?></div>
                    </div>
                </div><!-- lp-block -->
            <?php } ?>
        </div>
    </section>
    <section id="lp-boxes-1" class="lp-boxes lp-boxes-1 lp-boxes-static lp-boxes-rows-3">
        <header class="lp-section-header">
            <h3 class="lp-section-title"><?php echo get_field('naimenovanie_novostej'); ?></h3>
            <div class="lp-section-desc"><?php echo get_field('kratkoe_opisanie_novostej'); ?></div>
        </header>
        <div class="lp-boxes-inside	lp-boxes-margins">
            <?php $new = get_field('kartochka_novostej'); ?>
            <?php foreach ($new as $news){ ?>
                <div class="lp-box box1">
                    <div class="lp-box-image lpbox-rnd8" style="height: 314.47px;">
                        <a class="lp-box-imagelink" tabindex="-1" href="<?php echo $news['ssylka_dlya_perehoda']; ?>">
                            <span class="screen-reader-text"><?php echo $news['naimenovanie']; ?></span>
                        </a>
                        <img width="433" height="350" src="<?php echo $news['foto']; ?>" class="attachment-roseta-lpbox-1 size-roseta-lpbox-1" alt="" loading="lazy">
                        <span class="box-overlay"></span>
                    </div>
                    <div class="lp-box-content">
                        <h4 class="lp-box-title">
                            <a href="<?php echo $news['ssylka_dlya_perehoda']; ?>"><?php echo $news['naimenovanie']; ?></a>
                        </h4>
                        <div class="lp-box-text">
                            <div class="lp-box-text-inside"><?php echo $news['kratkoe_opisanie']; ?></div>
                            <a class="lp-box-readmore" href="<?php echo $news['ssylka_dlya_perehoda']; ?>">
                                <span>далее</span>
                                <em class="screen-reader-text">"<?php echo $news['naimenovanie']; ?>"</em>
                            </a>
                        </div>
                    </div>
                </div><!-- lp-box -->
            <?php } ?>
        </div>
    </section>

    <section id="lp-testimonials" class="lp-testimonials lp-testimonials-rows-2">
        <header class="lp-section-header">
            <h2 class="lp-section-title"><?php echo get_field('naimenovanie_otzyvov'); ?></h2>
            <div class="lp-section-desc"><?php echo get_field('kratkoe_opisanie_otz'); ?></div>
        </header>
        <div class="lp-testimonials-inside">
            <?php $otziv = get_field('kartochka_otz'); ?>
            <?php foreach( $otziv as $otzivi){ ?>
                <div class="lp-tt lp-tt-1">
                    <div class="lp-tt-content">
                        <div class="lp-tt-text">
                            <div class="lp-tt-text-inside">
                                <p><?php echo $otzivi['kratkoe_opisanie']; ?></p>

                            </div>
                        </div>
                        <div class="lp-tt-meta">
                            <div class="lp-tt-image">
                                <img alt="" src="<?php echo $otzivi['foto_cheloveka']; ?>">
                            </div>
                            <h4 class="lp-tt-title"><?php echo $otzivi['familiya_imya']; ?></h4>
                        </div>
                    </div>
                </div><!-- lp-tt -->
            <?php } ?>
        </div>
    </section>

    <section id="lp-boxes-2" class="lp-boxes lp-boxes-2 lp-boxes-animated lp-boxes-rows-4">
        <div class="lp-boxes-outside lp-boxes-padding">
            <?php $best_tovar = get_field('luchshij_tovar'); ?>
            <?php foreach($best_tovar as $best_tovary){ ?>
                <div class="lp-box box1">
                    <div class="lp-box-image lpbox-rnd8" style="">
                        <a class="lp-box-imagelink" tabindex="-1">
                            <span class="screen-reader-text"><?php echo $best_tovary['naimenovanie']; ?></span>
                        </a>
                        <img src="<?php echo $best_tovary['foto']; ?>" class="attachment-roseta-lpbox-2 size-roseta-lpbox-2" alt="" loading="lazy">
                        <span class="box-overlay"></span>
                    </div>
                    <div class="lp-box-content">
                        <h4 class="lp-box-title"><?php echo $best_tovary['naimenovanie']; ?></h4>
                        <div class="lp-box-text">
                            <div class="lp-box-text-inside"><?php echo $best_tovary['kratkoe_opisanie']; ?>...</div>
                            <a class="lp-box-readmore" href="<?php echo $best_tovary['tekst']; ?>">
                                <span>Далее</span>
                                <em class="screen-reader-text">"<?php echo $best_tovary['naimenovanie']; ?>"</em>
                            </a>
                        </div>
                    </div>
                </div><!-- lp-box -->
            <?php } ?>
        </div>
    </section>

    <section class="lp-text style-reverse  lp-text-hasimage politic" id="lp-text-four">
        <?php $politica = get_field('czenovaya_politika'); ?>
        <?php foreach( $politica as $politici){ ?>
            <div class="lp-text-inside">
                <div class="lp-text-image">
                    <img width="1920" height="1275" src="<?php echo $politici['foto']; ?>" class="attachment-full size-full" alt="" loading="lazy"></div>
                <div class="lp-text-card">
                    <h3 class="lp-text-title"><?php echo $politici['naimenovanie']; ?></h3>
                    <div class="lp-text-content">
                        <p class="politic-text"><?php echo $politici['opisanie']; ?></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div><!-- .lp-text-inside -->
        <?php } ?>
    </section>

    <section id="lp-blocks2" class="lp-blocks lp-blocks2 lp-blocks-rows-3">
        <header class="lp-section-header">
            <h3 class="lp-section-title"><?php echo get_field('glavnoe_nazvanie_bloka_sertifikatov'); ?></h3>
            <div class="lp-section-desc"><?php echo get_field('kratkoe_opisanie_sertifikatov'); ?></div>
        </header>
        <div class="lp-blocks-inside">
            <?php $sert = get_field('sertifikaty'); ?>
            <?php foreach($sert as $serts){ ?>
            <div class="lp-block block1">
                <div class="lp-block-content">
                    <div class="lp-block-text">
                        <img src="<?php echo $serts['foto']; ?>" alt="">
                        </div>
                </div>
            </div><!-- lp-block -->
            <?php } ?>
        </div>
    </section>

    <section class="lp-text" id="lp-text-five">
        <div class="lp-text-inside">
            <div class="lp-text-card">
                <h3 class="lp-text-title"><?php echo get_field('naimenovanie_bloka_rukovoditelej'); ?></h3>
                <div class="lp-text-content">
                    <div class="tmm tmm_developers">
                        <div class="tmm_3_columns tmm_wrap tmm_theme_f">
                            <span class="tmm_two_containers_tablet"></span>
                            <div class="tmm_container">
                                <?php $person = get_field('rukovoditel'); ?>
                                <?php foreach($person as $people){ ?>
                                    <div class="tmm_member" style="border-top:#495d6d solid 5px;">
                                        <div class="tmm_photo tmm_pic_developers_0" style="background: url(<?php echo $people['foto']; ?>); margin-left: auto;margin-right: auto;background-size: 150px;background-position: center center !important;background-repeat: no-repeat;"></div>
                                        <div class="tmm_textblock">
                                            <div class="tmm_names">
                                                <span class="tmm_fname"><?php echo $people['imya']; ?></span>
                                                <span class="tmm_lname"><?php echo $people['familiya']; ?></span>
                                            </div>
                                            <div class="tmm_job"><?php echo $people['dolzhnost']; ?></div>
                                            <div class="tmm_desc" style="text-align:justify">
                                                <p><?php echo $people['kratkoe_opisanie']; ?></p>

                                            </div>
                                            <div class="tmm_scblock">
                                                <?php $icon = $people['ikonki'];?>
                                                <?php foreach($icon as $icons){ ?>
                                                <?php if(!empty($icon)) {?>
                                                    <a target="_blank" class="tmm_sociallink" href="<?php echo $icons['perehod']; ?>" title="">
                                                        <img src="<?php echo $icons['ikonki']; ?>" alt="">
                                                    </a>
                                                <?php }else{} ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .lp-text-inside -->

    </section>
    <aside id="colophon" itemscope="" itemtype="http://schema.org/WPSideBar">
        <div id="colophon-inside" class="footer-three ">

            <section id="cryoutcontact-2" class="widget-container widget_cryout_contact">
                <div class="footer-widget-inside">
                    <h2 class="widget-title">
                        <span>Контакты</span>
                    </h2>
                    <?php if ( is_active_sidebar( 'true_side' ) ) : ?>

                        <?php dynamic_sidebar( 'true_side' ); ?>

                    <?php endif; ?>
                </div>
            </section>
            <section id="cryoutabout-3" class="widget-container widget_cryout_about">
                <div class="footer-widget-inside">
                    <h2 class="widget-title">
                        <span>О нас</span>
                    </h2>
                    <?php if ( is_active_sidebar( 'true_side3' ) ) : ?>

                        <?php dynamic_sidebar( 'true_side3' ); ?>

                    <?php endif; ?>

                </div>
            </section>

        </div>
    </aside>
    <style>
        .lp-tt-text-inside::before {
            border-top-color: #dedede;
        }
        .lp-tt-text-inside::after {
            border-top-color: #ffffff;
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
            gsap.to(".lp-boxes-1 .lp-box", {
                scrollTrigger: {
                    trigger: ".lp-boxes-1 .lp-box",
                    toggleActions: "restart none none none"
                },
                stagger:.3,
                opacity: 1,
                ease: Expo.easeInOut,
                duration: 1

            })
            gsap.to(".lp-boxes .lp-section-header .lp-section-title",  {
                scrollTrigger: {
                    trigger: ".lp-boxes .lp-section-header .lp-section-title",
                    toggleActions: "restart none none none"
                },
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut,
                duration: .5

            })
            gsap.to(".lp-boxes .lp-section-header .lp-section-desc", {
                scrollTrigger: {
                    trigger: ".lp-boxes .lp-section-header .lp-section-desc",
                    toggleActions: "restart none none none"
                },
                opacity: .75,
                y: 0,
                ease: Expo.easeInOut,
                duration: .5

            })
            gsap.to(".lp-testimonials .lp-section-header .lp-section-title",  {
                scrollTrigger: {
                    trigger: ".lp-testimonials .lp-section-header .lp-section-title",
                    toggleActions: "restart none none none"
                },
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut,
                duration: .5

            })
            gsap.to(".lp-testimonials .lp-section-header .lp-section-desc", {
                scrollTrigger: {
                    trigger: ".lp-testimonials .lp-section-header .lp-section-desc",
                    toggleActions: "restart none none none"
                },
                opacity: .75,
                y: 0,
                ease: Expo.easeInOut,
                duration: .5

            })
            gsap.to(".lp-testimonials .lp-tt.lp-tt-1 .lp-tt-text", {
                scrollTrigger: {
                    trigger: ".lp-testimonials .lp-tt.lp-tt-1 .lp-tt-text",
                    toggleActions: "restart none none none"
                },
                stagger:.1,
                opacity: 1,
                y: 0,
                ease: Expo.easeInOut,
                duration: 1

            })
            gsap.to(".lp-boxes-2 .lp-box ", {
                scrollTrigger: {
                    trigger: ".lp-boxes-2 .lp-box ",
                    toggleActions: "restart none none none"
                },
                stagger:.1,
                opacity: 1,
                scale: 1,
                ease: Expo.easeInOut,
                duration: 1

            })
            gsap.to(".lp-text.style-reverse.lp-text-hasimage.politic img.attachment-full.size-full", {
                scrollTrigger: {
                    trigger: ".lp-text.style-reverse.lp-text-hasimage.politic img.attachment-full.size-full",
                    toggleActions: "restart none none none"
                },
                x: 0,
                ease: Expo.easeInOut,
                duration: 3

            })
            gsap.to(".lp-text.style-reverse.lp-text-hasimage.politic .lp-text-title", {
                scrollTrigger: {
                    trigger: ".lp-text.style-reverse.lp-text-hasimage.politic .lp-text-title",
                    toggleActions: "restart none none none"
                },
                y: 0,
                opacity: 1,
                ease: Expo.easeInOut,
                delay:1,
                duration: 2

            })
            gsap.to(".lp-text.style-reverse.lp-text-hasimage.politic .politic-text", {
                scrollTrigger: {
                    trigger: ".lp-text.style-reverse.lp-text-hasimage.politic .politic-text",
                    toggleActions: "restart none none none"
                },
                y: 0,
                opacity: 1,
                ease: Expo.easeInOut,
                delay:1.5,
                duration: 2

            })

            gsap.to("#lp-text-five .lp-text-title", {
                scrollTrigger: {
                    trigger: "#lp-text-five .lp-text-title",
                    toggleActions: "restart none none none"
                },
                x: 0,
                duration: 1

            })
            gsap.to("#lp-text-five .tmm_container", {
                scrollTrigger: {
                    trigger: "#lp-text-five .tmm_container ",
                    toggleActions: "restart none none none"
                },
                x: 0,
                duration: 1

            })

            gsap.to("#lp-blocks2 .lp-section-title", {
                scrollTrigger: {
                    trigger: "#lp-blocks2 .lp-section-title",
                    toggleActions: "restart none none none"
                },
                y: 0,
                opacity: 1,
                ease: Expo.easeInOut

            })
            gsap.to("#lp-blocks2 .lp-section-desc", {
                scrollTrigger: {
                    trigger: "#lp-blocks2 .lp-section-desc",
                    toggleActions: "restart none none none"
                },
                y: 0,
                opacity: 1,
                ease: Expo.easeInOut

            })
            gsap.to("#lp-blocks2 .lp-blockFF.block1", {
                scrollTrigger: {
                    trigger: "#lp-blocks2 .lp-block.block1",
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

