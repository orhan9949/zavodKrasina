<address>
    <span>
        <i class="icon icon-widget-location" title="Address"></i>
        <span class="cryout-contact-right address-block">
              <?php block_field( 'adress') ?>
        </span>
    </span>
    <span>
        <i class="icon-widget-mobile" title="Mobile"></i>
        <strong>Телефон:</strong>
        <span class="cryout-contact-right">  <?php block_field( 'tel') ?></span>
    </span>
    <span>
        <i class="icon-widget-mail" title="E-mail"></i>
        <strong>E-mail:</strong>
        <span class="cryout-contact-right">
            <a href="mailto:william@spooky.fox">  <?php block_field( 'message') ?></a>
        </span>
    </span>
    <span>
        <i class="icon-widget-opening-hours" title="Opening Hours"></i>
        <strong>Время работы:</strong>
        <span class="cryout-contact-right">  <?php block_field( 'words_clock') ?></span>
    </span>
    <span class="map">
      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9bd5cd8c90ed2370cbd0b38f6b5af592f481c4829d3c8c7f30e5c42177ae6d73&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </span>
</address>