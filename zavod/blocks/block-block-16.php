<a class="widget-top-section-inner_icon" href="<?php block_field( 'url') ?>">
    <div>
        <div>
            <div><?php block_field( 'icons') ?></div>
            <div><?php block_field( 'icons') ?></div>
        </div>
    </div>
</a>
<a class="widget-top-section-inner_icon" href="<?php block_field( 'url1') ?>">

    <div>
        <div>
            <div><?php block_field( 'icons1') ?></div>
            <div><?php block_field( 'icons1') ?></div>
        </div>
    </div>
</a>
<a class="widget-top-section-inner_icon" href="<?php block_field( 'url2') ?>">

    <div>
        <div>
            <div><?php block_field( 'icons2') ?></div>
            <div><?php block_field( 'icons2') ?></div>
        </div>
    </div>
</a>
<a class="widget-top-section-inner_icon" href="<?php block_field( 'url3') ?>">

    <div>
        <div>
            <div><?php block_field( 'icons3') ?></div>
            <div><?php block_field( 'icons3') ?></div>
        </div>
    </div>
</a>

<style>
    .widget-top-section-inner_icon{
        height: 26px;
        overflow: hidden;
    }
    .widget-top-section-inner_icon > div{
        display: flex;
        padding: 0 10px 10px 10px;
        transform: translateY(0);
        transition: .3s ease-in-out;
    }
    .widget-top-section-inner_icon:hover > div{
        transform: translateY(-29px);
        transition: .3s ease-in-out;
    }
    .widget-top-section-inner_icon > div > div{
    }
    .widget-top-section-inner_icon > div > div > div{

    }
    .widget_block .widget-top-section-inner_icon > div > div > div:first-child{
        color: #888888;
    }
    .widget_block .widget-top-section-inner_icon > div > div > div:last-child{
        color: #22aaa1;
    }
</style>