<?php
return array(
   'api_id'    => array(
        'value'        => '',
        'title'        => 'API ID',
        'description'  => 'Его нужно взять в личном кабинете Shop-logistics в разделе "Ваши данные"',
        'control_type' => waHtmlControl::INPUT,
    ),
   'from_city_code_id'    => array(
        'value'        => '405065',
        'title'        => 'Код города отправки',
        'description'  => 'Его нужно взять в личном кабинете Shop-logistics в разделе "Ваши данные" в словаре городов. По умолчанию Москва',
        'control_type' => waHtmlControl::INPUT,
    ),
   'avg_weight'    => array(
        'value'        => '1',
        'title'        => 'Средний вес заказа (кг.)',
        'description'  => '',
        'control_type' => waHtmlControl::INPUT,
    ),
   'avg_num'    => array(
        'value'        => '100',
        'title'        => 'Средние количество заказов в месяц',
        'description'  => '',
        'control_type' => waHtmlControl::INPUT,
    ),
   'partner'    => array(
        'value'        => '',
        'title'        => 'Код партнера',
        'description'  => 'Если не указан берется партнер по умолчанию',
        'control_type' => waHtmlControl::INPUT,
    ),
);

//EOF