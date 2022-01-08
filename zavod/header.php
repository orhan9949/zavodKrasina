<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Завод имени красина</title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

<header id="masthead" class="cryout" itemscope="" itemtype="http://schema.org/WPHeader">

    <div id="site-header-main">

        <div class="site-header-top">

            <div class="site-header-inside">

                <div id="branding">
                    <div id="site-text">
                        <h1 itemprop="headline" id="site-title">
                            <span>
                                <a href="https://orhan-file.ru/zavodkrasina" title="" rel=""><?php echo get_bloginfo(); ?></a>
                            </span>
                        </h1>
                    </div>
                    <a id="nav-toggle">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </a>

                </div><!-- #branding -->

                <div id="top-section-widget">
                    <div class="widget-top-section-inner">

                        <?php if ( is_active_sidebar( 'true_side2' ) ) : ?>

                            <?php dynamic_sidebar( 'true_side2' ); ?>

                        <?php endif; ?>
                    </div><!--content-widget-->
                </div>


                <div id="top-section-menu" role="navigation" aria-label="Top Menu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
<!--                    <nav class="topmenu"><ul id="menu-footer-menu-2" class="menu"><li id="menu-item-1796" class="icon-diamond menu-item menu-item-type-post_type menu-item-object-page menu-item-1796"><a href="https://demos.cryoutcreations.eu/wp/roseta/shop/">Shop</a><span class="sep"> </span></li>-->
<!--                            <li id="menu-item-1794" class="icon-user menu-item menu-item-type-post_type menu-item-object-page menu-item-1794"><a href="https://demos.cryoutcreations.eu/wp/roseta/my-account/">My account</a><span class="sep"> </span></li>-->
<!--                            <li id="menu-item-1795" class="icon-basket menu-item menu-item-type-post_type menu-item-object-page menu-item-1795"><a href="https://demos.cryoutcreations.eu/wp/roseta/basket/">Cart</a><span class="sep"> </span></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
                </div>
                <!-- #top-menu -->

            </div><!-- #site-header-inside -->

        </div><!--.site-header-top-->

        <nav id="mobile-menu">
            <button id="nav-cancel"><i class="fa fa-times" aria-hidden="true"></i></button>
            <form role="search" method="get" class="searchform" action="/" >
                <label style=" width: 100%;">
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="s" placeholder="Введите слово" value="" name="s" style="outline: none;">
                </label>
                <button type="submit" class="searchsubmit"><span class="screen-reader-text">Search</span><i class="icon-search"></i></button>
            </form>
            <div>
                    <?php
                    wp_nav_menu( array(
                        'container'       => 'ul',
                        'theme_location'  => 'menu-1',
                        'menu_id'         => 'mobile-nav',
                        'menu_class'	  => '',
//                        'depth'           => 1,
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ) );
                    ?>

            </div>


    </div>
    </nav> <!-- #mobile-menu -->

        <div class="site-header-bottom">

            <div class="site-header-bottom-fixed">

                <div class="site-header-inside">

                    <nav id="access" role="navigation" aria-label="Primary Menu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                        <div style="display: flex;">
                                <?php
                                wp_nav_menu( array(
                                    'container'       => 'ul',
                                    'theme_location'  => 'menu-1',
                                    'menu_id'         => 'prime_nav',
                                    'menu_class'	  => '',
//                                    'depth'           => 1,
                                    'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="switch"><label onclick="" for="responcive-menu-switcher"></label></li>%3$s</ul>'
                                ) );
                                ?>
                            <div class="menu-main-search menu-search-animated">
                                <a href=""><i class="icon-search"></i><span class="screen-reader-text">Search</span></a>
                                <form role="search" method="get" class="searchform" action="/" style="display: none;">
                                    <label style=" width: 100%;">
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="s" placeholder="Введите слово" value="" name="s" style="outline: none;">
                                    </label>
                                    <button type="submit" class="searchsubmit"><span class="screen-reader-text">Search</span><i class="icon-search"></i></button>
                                </form>
<!--                                --><?php //if ( is_active_sidebar( 'search' ) ) : ?>
<!---->
<!--                                    --><?php //dynamic_sidebar( 'search' ); ?>
<!---->
<!--                                --><?php //endif; ?>

                                <i class="icon-cancel" style="display: none;"></i>
                            </div>
                        </div>
                    </nav><!-- #access -->

                </div><!-- #site-header-inside -->

            </div><!-- #site-header-bottom-fixed -->

        </div><!--.site-header-bottom-->

    </div><!-- #site-header-main -->
    <style>
        #access div > div > a, #access ul li[class*="icon"]::before {
            line-height: 65px;
        }
        #site-header-main, #access ul ul, .menu-search-animated .searchform input[type="search"], #access .menu-search-animated .searchform, .site-header-bottom-fixed, .roseta-over-menu .site-header-bottom.header-fixed .site-header-bottom-fixed {
            background-color: #FFFFFF;
        }
        #access .menu-search-animated .searchform {
            height: 64px;
            line-height: 64px;
            padding: 10px 0 0 0;
        }
        #access > div > div, #access > div > div > a, .roseta-over-menu .header-fixed.site-header-bottom #access > div > div:not([class*='current']), .roseta-over-menu .header-fixed.site-header-bottom #access > div > div:not([class*='current']) > a, .roseta-over-menu .header-fixed.site-header-bottom .top-section-element.widget_cryout_socials a::before, .top-section-element.widget_cryout_socials a::before, #access .menu-search-animated .searchform input[type="search"] {
            color: #888888;
        }
        #access > div > div > a > span::before, #site-title::before, #site-title::after {
            background-color: #6f93f9;
        }
        .searchform .searchsubmit {
            color: #666666;
        }
        .dropdown-toggle::after {
            content: "\e900";
        }
        .dropdown-toggle::after {
            font-family: "iconmeta";
            font-size: 1.3em;
        }
    </style>
</header>
<div id="content" class="cryout">
<div id="container" class="roseta-landing-page one-column">
<main id="main" class="main">
