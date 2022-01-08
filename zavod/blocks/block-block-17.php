<div class="info-tel">
        <a href="tel:<?php block_field( 'tel-one') ?>"><?php block_field( 'icon_tel') ?>
            <p class="text"><?php block_field( 'just_tel') ?></p>
        </a>
        <div><?php block_field( 'icon_clock') ?>
            <span class="text"><?php block_field( 'before') ?></span> - <span class="text"><?php block_field( 'after') ?></span>
        </div>
</div>


<style>
    .info-tel{
        width:100%;
        display: flex;
        font-style: italic;
        flex-wrap: wrap;
    }
    .info-tel div{
        display: flex;
    }
    .info-tel a i{
        color: #afafaf;
        transform: rotate(170deg);
        padding: 2px 0 0 4px;
        font-size: 14px;
    }
    .info-tel a{
        display: flex;
        padding: 0 10px 0 0;
    }
    .info-tel p .fa-clock-o{
        padding: 0 4px 0 0;
        color: #afafaf;
    }
</style>