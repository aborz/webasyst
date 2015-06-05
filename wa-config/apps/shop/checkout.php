<?php
return array (
  'contactinfo' => 
  array (
    'name' => 'ДАННЫЕ ПОКУПАТЕЛЯ',
    'fields' => 
    array (
      'firstname' => 
      array (
        'localized_names' => 'Фамилия и имя',
        'required' => '1',
      ),
      'phone' => 
      array (
        'localized_names' => 'Телефон',
        'required' => '1',
      ),
      'email' => 
      array (
        'localized_names' => 'Электронная почта',
        'required' => '1',
      ),
      'about' => 
      array (
        'localized_names' => 'Комментарий',
        'required' => '',
      ),
      'address' => 
      array (
        'localized_names' => 'Адрес',
        'fields' => 
        array (
          'region' => 
          array (
            'localized_names' => 'Регион (обязательно)',
            'required' => '1',
          ),
          'city' => 
          array (
            'localized_names' => 'Город (обязательно)',
            'required' => '1',
          ),
          'street' => 
          array (
            'localized_names' => 'Улица, дом, квартира',
            'required' => '',
          ),
          'zip' => 
          array (
            'localized_names' => 'Индекс',
            'required' => '',
          ),
          'country' => 
          array (
            'hidden' => true,
            'value' => 'rus',
          ),
        ),
      ),
      'address.shipping' => 
      array (
        'localized_names' => 'Адрес доставки',
        'fields' => 
        array (
          'region' => 
          array (
            'localized_names' => 'Регион (обязательно)',
            'required' => '1',
          ),
          'city' => 
          array (
            'localized_names' => 'Город (обязательно)',
            'required' => '1',
          ),
          'street' => 
          array (
            'localized_names' => 'Улица, дом, квартира',
            'required' => '',
          ),
          'zip' => 
          array (
            'localized_names' => 'Индекс',
            'required' => '',
          ),
          'country' => 
          array (
            'hidden' => true,
            'value' => 'rus',
          ),
        ),
      ),
    ),
  ),
  'shipping' => 
  array (
    'name' => 'ДОСТАВКА',
    'prompt_type' => '0',
  ),
  'payment' => 
  array (
    'name' => 'ОПЛАТА',
  ),
);
