<?php
return array(
    'use' => array(
        'value' => true,
        'title' => 'Включить плагин в корзине',
        'description' => 'Использовать подсказки при оформление заказа',
        'control_type' => waHtmlControl::CHECKBOX,
    ),
    'hint_msg' => array(
        'value' => 'Здесь работают подскази для адреса. Начните печатать.',
        'title' => 'Сообщение о работе плагина',
        'description' => 'Это сообщение будет показано сверху полей адреса.',
        'control_type' => waHtmlControl::INPUT,
    ),
    'region_error_msg' => array(
        'value' => 'Мы не работаем в этом регионе',
        'title' => 'Сообщение об ошибке',
        'description' => 'Когда покупатель вводит регион или город, которого нет в настройкаx <a href="?action=settings#/regions/" target="_blank">"Страны и регионы"</a>',
        'control_type' => waHtmlControl::INPUT,
    )
);