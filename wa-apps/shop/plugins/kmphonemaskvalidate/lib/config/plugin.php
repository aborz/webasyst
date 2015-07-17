<?php
return array(
    'name' => 'Форматирование и проверка телефонного номера',
    'description' => 'При оформление заказа',
    'vendor' => 992205,
    'version' => '1.1.4',
    'img' => 'img/kmphonemaskvalidate.png',
    'icons' => array(
        16 => 'img/kmphonemaskvalidate16.png',
        24 => 'img/kmphonemaskvalidate24.png',
        48 => 'img/kmphonemaskvalidate48.png',
        96 => 'img/kmphonemaskvalidate96.png',
    ),
    'handlers' =>
        array(
            'frontend_checkout' => 'frontendCheckoutHandler',
            'frontend_footer' => 'frontendFooterHandler'
        ),
);
