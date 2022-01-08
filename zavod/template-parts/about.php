<?php

/*
Template Name: О нас
*/
get_header();
?>
    <div id="header-image-main">
        <div id="header-image-main-inside">
            <div class="header-image" style="background-image: url(<?php echo get_field('foto_straniczy'); ?>); opacity: 1; background-position: center 20%;"></div>
<!--            <img class="header-image" alt="Roseta Plus Theme Demo" src="https://demos.cryoutcreations.eu/wp/roseta/wp-content/uploads/sites/12/2017/11/breather-187919.jpg">-->
            <div id="header-page-title">
                <div id="header-page-title-overlay"></div>
                <div id="header-page-title-inside">
                    <div class="entry-meta pretitle-meta">
                    </div><!-- .entry-meta -->
                    <h1 class="entry-title" itemprop="headline"><?php echo get_field('nazvanie_straniczy'); ?></h1>
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
    <?php if(!empty(get_field('tekst_o_kompanii'))){ ?>
    <section class="text_about">
        <?php echo get_field('tekst_o_kompanii'); ?>
    </section>
    <?php }else{} ?>
    <?php if(!empty(get_field('naimenovanie_bloka_rukovoditelej'))){ ?>
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
                                <?php if(!empty($person)){ ?>
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
                                                    <?php if(!empty($icon)) {?>
                                                    <?php foreach($icon as $icons){ ?>
                                                            <a target="_blank" class="tmm_sociallink" href="<?php echo $icons['perehod']; ?>" title="">
                                                                <img src="<?php echo $icons['ikonki']; ?>" alt="">
                                                            </a>
                                                    <?php } ?>
                                                    <?php }else{} ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php }else{} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .lp-text-inside -->
    </section>
    <?php }else{} ?>
    <?php if(!empty(get_field('glavnoe_nazvanie_bloka_sertifikatov'))){ ?>
    <section id="lp-blocks2" class="lp-blocks lp-blocks2 lp-blocks-rows-3">
        <header class="lp-section-header">
            <h3 class="lp-section-title"><?php echo get_field('glavnoe_nazvanie_bloka_sertifikatov'); ?></h3>
            <div class="lp-section-desc"><?php echo get_field('kratkoe_opisanie_sertifikatov'); ?></div>
        </header>
        <div class="lp-blocks-inside">
            <?php $sert = get_field('sertifikaty'); ?>
            <?php if(!empty($person)){ ?>
                <?php foreach($sert as $serts){ ?>
                    <div class="lp-block block1">
                        <div class="lp-block-content">
                            <div class="lp-block-text">
                                <img src="<?php echo $serts['foto']; ?>" alt="">
                            </div>
                        </div>
                    </div><!-- lp-block -->
                <?php } ?>
            <?php }else{} ?>
        </div>
    </section>
    <?php }else{} ?>
    <style>
        #header-image-main-inside {
            height: 550px;
        }
        #header-page-title #header-page-title-inside, #header-page-title .entry-meta span, #header-page-title .entry-meta a, #header-page-title .entry-meta time, #header-page-title .entry-meta .icon-metas::before, #header-page-title .byline, #header-page-title #breadcrumbs-nav, .lp-staticslider .staticslider-caption-inside, .seriousslider-theme .seriousslider-caption-inside {
            color: #FFFFFF;
        }
        .single .entry-title, #header-page-title .entry-title {
            font-family: Oswald;
            font-size: 3em;
            font-weight: 700;
            line-height: 1.4;
            text-transform: uppercase;
        }
        .text_about {
            margin: 40px auto;
            padding: 0 10px;
            max-width: 1300px;
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


    </script>

<?php
get_footer();

