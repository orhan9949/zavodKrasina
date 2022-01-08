<?php
/**
 * The template for displaying the footer
 */

wp_footer(); ?>


</main>
</div>
</div>

<footer id="footer" class="cryout" itemscope="" itemtype="http://schema.org/WPFooter">
    <div id="footer-top">
        <div class="footer-inside">
            <div id="site-copyright">
                <p style="margin-left: 10px;">Дата создания: 2021</p>
                <a href="https://vk.com/orhan99">
                    <p style="margin-left: 10px;">Cоздана: Орхан Чичитов</p>
                </a>
            </div>
        </div>
    </div>
    <div id="footer-bottom">
        <div class="footer-inside">
            <nav class="footermenu">
                <?php
                wp_nav_menu( array(
                    'container'       => 'ul',
                    'theme_location'  => 'menu-2',
                    'menu_id'         => 'menu-footer-menu',
                    'menu_class'	  => 'menu',
                    'depth'           => 1,
                ) );
                ?>
            </nav>
            <a id="toTop" class="toTop-show">
                <div class="toTop-show_divs">
                    <div class="toTop-show_div"></div>
                    <div class="toTop-show_div"></div>
                </div>
            </a>
            <nav id="sfooter" class="">

                <?php if ( is_active_sidebar( 'true_side1' ) ) : ?>

                    <?php dynamic_sidebar( 'true_side1' ); ?>

                <?php endif; ?>
            </nav>
        </div>
    </div>
</footer>
</body>
</html>
<style>
    .toTop-show_div{
        border-top: 2px solid #6f93f9;
        border-right: 2px solid #6f93f9;
        width: 20px;
        height: 20px;
        z-index: 9999;
        transform: rotate(-45deg);
    }
    .toTop-show_div:last-child{
        border-top: 2px solid #666666;
        border-right: 2px solid #666666;
    }
    .toTop-show_div{

    }
    .toTop-show_divs{
        height: 73px;
        width: 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0 0 0;
        margin: 0;
        transform: translateY(0px);
        transition: .3s ease-in-out;
    }
    .toTop-show:hover .toTop-show_divs{
        transform: translateY(-60%);
        transition: .3s ease-in-out;
    }
</style>
