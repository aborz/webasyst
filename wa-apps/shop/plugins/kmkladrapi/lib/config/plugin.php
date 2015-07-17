<?php
return array(
    'name' => 'КЛАДР в облаке',
    'description' => 'Подсказки при вводе адреса в оформление заказа',
    'vendor' => 992205,
    'version' => '1.1.2',
    'img' => 'img/kmkladrapi.png',
    'frontend' => true,
    'icons' => array(
        16 => 'img/kmkladrapi16.png',
        24 => 'img/kmkladrapi24.png',
        48 => 'img/kmkladrapi48.png',
        96 => 'img/kmkladrapi96.png',
    ),
    'handlers' => array(
        'frontend_checkout' => 'frontendCheckoutHandler'
    ),
);
