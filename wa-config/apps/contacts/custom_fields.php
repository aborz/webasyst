<?php
return array (
  waContactAddressField::__set_state(array(
     'id' => 'address',
     'options' => 
    array (
      'multi' => true,
      'ext' => 
      array (
        'work' => 'work',
        'home' => 'home',
        'shipping' => 'shipping',
        'billing' => 'billing',
      ),
      'storage' => 'data',
      'fields' => 
      array (
        'region' => 
        waContactRegionField::__set_state(array(
           'rm' => NULL,
           'id' => 'region',
           'options' => 
          array (
            'storage' => 'data',
          ),
           'name' => 
          array (
            'en_US' => 'State',
          ),
           '_type' => 'waContactRegionField',
        )),
        'city' => 
        waContactStringField::__set_state(array(
           'id' => 'city',
           'options' => 
          array (
            'storage' => 'data',
            'validators' => 
            waStringValidator::__set_state(array(
               'messages' => 
              array (
                'required' => 'Нужно заполнить',
                'invalid' => 'Неверно',
                'max_length' => 'Пожалуйста, не более 0 символов',
                'min_length' => 'Пожалуйста, не менее 0 символов',
              ),
               'options' => 
              array (
                'required' => false,
                'storage' => 'data',
              ),
               'errors' => 
              array (
              ),
               '_type' => 'waStringValidator',
            )),
          ),
           'name' => 
          array (
            'en_US' => 'City',
          ),
           '_type' => 'waContactStringField',
        )),
        'street' => 
        waContactStringField::__set_state(array(
           'id' => 'street',
           'options' => 
          array (
            'storage' => 'data',
            'validators' => 
            waStringValidator::__set_state(array(
               'messages' => 
              array (
                'required' => 'Нужно заполнить',
                'invalid' => 'Неверно',
                'max_length' => 'Пожалуйста, не более 0 символов',
                'min_length' => 'Пожалуйста, не менее 0 символов',
              ),
               'options' => 
              array (
                'required' => false,
                'storage' => 'data',
              ),
               'errors' => 
              array (
              ),
               '_type' => 'waStringValidator',
            )),
          ),
           'name' => 
          array (
            'en_US' => 'Street address',
          ),
           '_type' => 'waContactStringField',
        )),
        'zip' => 
        waContactStringField::__set_state(array(
           'id' => 'zip',
           'options' => 
          array (
            'storage' => 'data',
            'validators' => 
            waStringValidator::__set_state(array(
               'messages' => 
              array (
                'required' => 'Нужно заполнить',
                'invalid' => 'Неверно',
                'max_length' => 'Пожалуйста, не более 0 символов',
                'min_length' => 'Пожалуйста, не менее 0 символов',
              ),
               'options' => 
              array (
                'required' => false,
                'storage' => 'data',
              ),
               'errors' => 
              array (
              ),
               '_type' => 'waStringValidator',
            )),
          ),
           'name' => 
          array (
            'en_US' => 'ZIP',
          ),
           '_type' => 'waContactStringField',
        )),
        'lng' => 
        waContactHiddenField::__set_state(array(
           'id' => 'lng',
           'options' => 
          array (
            'storage' => 'data',
          ),
           'name' => 
          array (
            'en_US' => 'Longitude',
          ),
           '_type' => 'waContactHiddenField',
        )),
        'lat' => 
        waContactHiddenField::__set_state(array(
           'id' => 'lat',
           'options' => 
          array (
            'storage' => 'data',
          ),
           'name' => 
          array (
            'en_US' => 'Latitude',
          ),
           '_type' => 'waContactHiddenField',
        )),
        'country' => 
        waContactCountryField::__set_state(array(
           'model' => NULL,
           'validate_range' => true,
           'id' => 'country',
           'options' => 
          array (
            'defaultOption' => 'Select country',
            'storage' => 'data',
            'formats' => 
            array (
              'value' => 
              waContactCountryFormatter::__set_state(array(
                 '_type' => 'waContactCountryFormatter',
                 'options' => NULL,
              )),
            ),
          ),
           'name' => 
          array (
            'en_US' => 'Country',
          ),
           '_type' => 'waContactCountryField',
        )),
      ),
      'formats' => 
      array (
        'js' => 
        waContactAddressOneLineFormatter::__set_state(array(
           '_type' => 'waContactAddressOneLineFormatter',
           'options' => NULL,
        )),
        'forMap' => 
        waContactAddressForMapFormatter::__set_state(array(
           '_type' => 'waContactAddressForMapFormatter',
           'options' => NULL,
        )),
      ),
      'required' => 
      array (
      ),
      'allow_self_edit' => false,
      'unique' => false,
    ),
     'name' => 
    array (
      'en_US' => 'Address',
    ),
     '_type' => 'waContactAddressField',
  )),
//  
	new waContactStringField(
		'my_sizes',
		array('en_US' => 'My sizes', 'ru_RU' => "Мои размеры",)
	),
	new waContactStringField(
		'fav_style',
		array('en_US' => 'My preferred style', 'ru_RU' => "Мой любимый стиль",),
		array(
			'multi' => true,
			'pa_hidden' => true,
		)
	),
	new waContactStringField(
		'fav_color',
		array('en_US' => 'My favorite color', 'ru_RU' => "Мой любимый цвет",),
		array('multi' => true,)
	),
	new waContactStringField(
		'family_friends',
		array('en_US' => 'My family/friends', 'ru_RU' => "Моя семья/друзья",),
		array('multi' => true,)
	),
	new waContactStringField(
		'hobbies',
		array('en_US' => 'My hobbies', 'ru_RU' => "Мои хобби",),
		array('multi' => true,)
	),
	new waContactStringField(
		'pets',
		array('en_US' => 'My pets', 'ru_RU' => "Мои питомцы",),
		array('multi' => true,)
	),
	new waContactStringField(
		'heroes',
		array('en_US' => 'My heroes', 'ru_RU' => "Мои герои",)
	),
	new waContactStringField(
		'cloth_brands',
		array('en_US' => 'My favorite clothing brands', 'ru_RU' => "Мои любимые бренды одежды",),
		array('multi' => true,)
	),
	new waContactStringField(
		'shoe_brands',
		array('en_US' => 'My favorite shoe brands', 'ru_RU' => "Мои любимые бренды обуви",),
		array('multi' => true,)
	),
	new waContactStringField(
		'cosmetic_shops',
		array('en_US' => 'My favorite selfcare shops', 'ru_RU' => "Мои любимые магазины косметики",),
		array('multi' => true,)
	),
	new waContactStringField(
		'grocery_stores',
		array('en_US' => 'My favorite grocery stores', 'ru_RU' => "Мои любимые магазины продуктов",),
		array('multi' => true,)
	),
	new waContactStringField(
		'other_shops',
		array('en_US' => 'Other favorite shops', 'ru_RU' => "Другие любимые магазины",),
		array('multi' => true,)
	),
);