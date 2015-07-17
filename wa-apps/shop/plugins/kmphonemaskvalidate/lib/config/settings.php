<?php
return array(
    'enable' => array(
        'value' => true,
        'title' => 'Включить плагин',
        'control_type' => waHtmlControl::CHECKBOX,
    ),
    'where' => array(
        'value' => 'checkout',
        'title' => 'Где должен работать плагин',
        'description' => 'Плагин будет искать поля с именами <code>customer[phone]</code> и <code>data[phone]</code>.',
        'control_type' => waHtmlControl::SELECT,
        'options'      => array(
            'checkout'   => 'Только в процессе оформления заказа',
            'everywhere' => 'Во всем магазине',
        )
    ),
    'phone_mask' => array(
        'value' => '+7 (000) 000-00-00',
        'title' => 'Формат телефонного номера',
        'description' => 'Укажите формат, по которому будет проверяться телефонный номер. 0 - любое число.',
        'control_type' => waHtmlControl::INPUT,
    ),
    'phone_placeholder' => array(
        'value' => '+7 (___) ___-__-__',
        'title' => 'Подсказка формата телефонного номера',
        'description' => 'Укажите подсказку, которая поможет правильно ввести телефонный номер',
        'control_type' => waHtmlControl::INPUT,
    ),
    'validate' => array(
        'value' => true,
        'title' => 'Проверять введенный телефонный номер',
        'description' => 'Включить проверку телефонного номера',
        'control_type' => waHtmlControl::CHECKBOX,
    ),
    'error_msg' => array(
        'value' => 'Неверный формат',
        'title' => 'Сообщение об ошибке',
        'description' => '',
        'control_type' => waHtmlControl::INPUT,
    ),
    'phone_input_names' => array(
        'value' => 'phone',
        'title' => 'Нестандартные имена поля телефона',
        'description' => 'Если у вас не работает плагин, то, возможно, вы используете нестандартные имена. Здесь можно указать дополнительные имена. Например "telefon, sotoviy, mobilephone".',
        'control_type' => waHtmlControl::INPUT,
    ),
);