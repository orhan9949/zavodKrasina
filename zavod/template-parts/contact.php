<?php

/*
Template Name: Контакты
*/
get_header();
?>

    <div id="header-image-main">
        <div id="header-image-main-inside " class="news_block">
            <div class="header-image" style="background-image: url(<?php echo get_field('foto_straniczy');?>); opacity: 1; background-position: center 20%;"></div>
            <div id="header-page-title">
                <div id="header-page-title-overlay"></div>
                <div id="header-page-title-inside">
                    <div class="entry-meta pretitle-meta">
                    </div><!-- .entry-meta -->
                    <h1><?php echo get_field('title');?></h1>
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
    <div id="content" class="cryout">
        <div id="container_contact" class="one-column">
            <main id="main" class="main">
                <article id="post-606" class="post-606 page type-page status-publish has-post-thumbnail hentry">
                    <div class="article-inner">
                        <div class="entry-content template-contact" itemprop="text">
                            <div class="template-map-col" style="margin: 30px 0">
                                <?php echo get_field('map');?>
                            </div>
                            <div class="template-middle">
                                <div class="template-left-col col-12 col-sm-6">
                                    <div role="form" class="wpcf7" id="wpcf7-f1582-p606-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                        <form action="" method="post" class="wpcf7-form init demo" novalidate="novalidate" data-status="init">
                                            <?php echo do_shortcode( ' [contact-form-7 id="184" title="Контактная форма 1"]' ); ?>
                                        </form></div>
                                </div>
                                <div class="template-right-col col-12 col-md-6">
                                    <div class="template-right-col-inside">
                                        <img src=" <?php echo get_field('foto_straniczy');?>">
                                        <address>
                                            <span class="address"><i class="icon-template-location" title="Address"> Address:</i><span class="address-block"> <?php echo get_field('adres');?></span></span>
                                            <? $key = get_field('telefon');
                                                if(!empty($key)){
                                                    foreach($key as $keys){ ?>
                                                        <span class="phone"><i class="icon-template-phone" title="Phone"> Phone:</i> <?php echo $keys['telefon'];?></span>
                                                    <?php }
                                                }else{}
                                            $key = get_field('mobilnyj');
                                                if(!empty($key)){
                                                    foreach($key as $keys){ ?>
                                                        <span class="mobile"><i class="icon-template-mobile" title="Mobile"> Mobile:</i> <?php echo $keys['mobilnyj'];?></span>
                                                    <?php }
                                                }else{}
                                            $key = get_field('email');
                                                if(!empty($key)){
                                                    foreach($key as $keys){ ?>
                                                        <span class="email"><i class="icon-template-mail" title="Email"> E-mail:</i> <?php echo $keys['email'];?></span>
                                                    <?php }
                                                }else{} ?>
                                                        <span class="opening-hours"><i class="icon-template-opening-hours" title="Opening Hours"> Opening Hours:</i> <?php echo get_field('vremya_raboty');?></span>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                    </div><!-- .article-inner -->
                </article><!-- #post-## -->
            </main><!-- #main -->
        </div><!-- #container -->
    </div>
<style>
    #container_contact {
        max-width: calc( 1300px - 4em );
        margin: 0 auto;
    }
    #header-page-title h1 {
        font-family: Oswald;
        font-size: 3em;
        font-weight: 700;
        line-height: 1.4;
        text-transform: uppercase;
    }
    #header-page-title {
        color: #ffffff;
    }
    select, input[type], textarea {
        color: #666666;
        border-color: #e9e9e9;
    }
    button, input[type="button"], input[type="submit"], input[type="reset"] {
        background-color: #6f93f9;
        color: #FFFFFF;
        cursor: pointer;
    }
    button:hover, input[type="button"]:hover, input[type="submit"]:hover, input[type="reset"]:hover {
        background-color: #162521;
    }
    .template-left-col.col-sm-6 {
        padding: 0 0 15px 0;
    }
    .template-contact .template-middle {
        padding: 0 10px;
    }
</style>
<?php
get_footer();