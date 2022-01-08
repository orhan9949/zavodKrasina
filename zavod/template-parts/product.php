<?php

/*
Template Name: Товар
Template Post Type: post
*/
get_header();
?>
    <div id="breadcrumbs-container" class="cryout one-column">
        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
    </div><!-- breadcrumbs -->
<div style="max-width:1300px;margin:0 auto;padding: 0 10px; ">
    <div class="product">
        <div class="product_img">
            <img src="<?php echo get_field('foto_tovara'); ?>" alt="">
        </div>
        <div class="product_name">
            <h2><?php echo get_field('nazvanie_tovara'); ?></h2>
        </div>
        <div class="product_text">
            <p><?php echo get_field('tekst'); ?></p>
        </div>
        <div class="teh-haract">
            <div>
                <div class="teh-haract_column">
                    <div class="teh-haract_name1">Техническая характеристика</div>
                    <div class="teh-haract_value1">Значение</div>
                </div>
            <?php $key = get_field('teh-haract');
            if(!empty($key)){
                foreach($key as $keys){?>

                    <div class="teh-haract_column">
                        <div class="teh-haract_name"><?php echo $keys['name']; ?></div>
                        <div class="teh-haract_value"><?php echo $keys['value']; ?></div>
                    </div>
                <?php } ?>
            <?php }else{} ?>
            </div>
        </div>
        <div class="product_imgs">
            <?php $key = get_field('fotografii');
            if(!empty($key)){
                foreach($key as $keys){?>
                    <a href="<?php echo $keys['foto']; ?>" target="_blank">
                        <img src="<?php echo $keys['foto']; ?>" alt="">
                    </a>
                <?php } ?>
            <?php }else{} ?>
        </div>
        <div class="product_othertext">
            <?php echo get_field('dopolnitelnyj_tekst'); ?>
        </div>
        <div class="button_calculator">
            <a target="_blank" href="/forma-obratnoj-svyazi?<?php echo get_field('nazvanie_tovara'); ?>#ttt" target="_blank">Заказать</a>
        </div>
    </div>

</div>
    <style>
        .teh-haract_name1, .teh-haract_value1{
            color: #FFFFFF !important;
            background-color: #6f93f9 !important;
        }
        .button_calculator {
            margin: 0 0 40px 0;
            display: flex;
            justify-content: center;
        }
        .button_calculator a {
            background-color: #22aaa1;
            cursor: pointer;
            color: #FFFFFF;
            padding: 10px 30px;
            font-size: 19px;
        }
        .product_img{
            display: flex;
            justify-content: center;
            align-content: center;
            height: 350px;
        }
        h2 {
            text-align: center;
        }
        .product_imgs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product_imgs a {
            width: 200px;
            margin: 10px;
        }
        .product_text , .product_othertext{
            padding: 40px 0;
        }
        .teh-haract > div{
            max-width: 800px;
            width: 100%;
        }
        .teh-haract_column {
            display: flex;
            justify-content: space-between;
        }
        .teh-haract_value1 {
            min-width: 100px;
            display: flex;
            justify-content: center;
        }
        .teh-haract_value {
            min-width: 100px;
            max-width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            word-break: break-word;
        }
        .teh-haract_column div{
            border-bottom: 1px solid #FFFFFF;
            border-right: 1px solid #FFFFFF;
            background-color: #eaeaea;
            color: #666666;
            padding: 3px 5px;
        }
        .teh-haract_name , .teh-haract_name1{
            width: 100%;
        }

    </style>
<?php
get_footer();