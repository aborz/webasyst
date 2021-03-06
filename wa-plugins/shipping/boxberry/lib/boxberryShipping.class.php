<?php

/**
 * Andrew Lavrentev
 * andrew.lavrentev@gmail.com
 */
class boxberryShipping extends waShipping
{
	public function calculate()
	{
		$shipping = $this->getInfoFromRequest();
		if(!$shipping) {$shipping = $this->getInfoFromStorage();}
		if(!$shipping) {return [array('rate' => null, 'comment' => 'Для расчета стоимости доставки укажите пункт вывоза заказа')];}
		
		$data = [];
		$data['weight'] = $this->getTotalWeight();
		$data['weight'] = str_ireplace(',', '.', $data['weight'])*1000;
		$data['ordersum'] = $this->getTotalPrice();
		$data['target'] = $shipping['point_id'];
		
		$shipping = $this->sendRequest('DeliveryCosts', $data);
		if (!isset($shipping['price'])) {return 'Ошибка получения данных';}
		$arr = array(
				    'boxberry' => array(
				        'name' => 'Доставка в пункт самовывоза', //название варианта доставки, например, “Наземный  транспорт”, “Авиа”, “Express Mail” и т. д.
				        'description' => 'RUB', //необязательное описание варианта  доставки
				        'est_delivery' => $shipping['delivery_period'].' рабочих дн.', //произвольная строка, содержащая  информацию о примерном времени доставки
				        'currency' => 'RUB', //ISO3-код валюты, в которой рассчитана  стоимость  доставки
				        'rate_min' => '', //минимальная граница стоимости, если стоимость рассчитана приблизительно
				        'rate_max' => '', //максимальная граница стоимости, если стоимость рассчитана приблизительно
				        'rate' => $shipping['price'],//$shipping['price'],
				    ),
				);
		return $arr;
	}

	private function sendRequest($method, $data)
	{
		$data['token'] = $this->getSettings('api_id');
		$data['method'] = $method;
		$request = 'http://api.boxberry.de/json.php?'.http_build_query($data);
		$response = file_get_contents($request);
		return json_decode($response,true);
	}

    public function customFields(waOrder $order)
    {
        return array(
				'pos_address' => array(
		            'title' => 'Пункт самовывоза',
		            'control_type' => waHtmlControl::TEXTAREA,
		            'description' => '<script type="text/javascript"src="http://points.boxberry.ru/js/boxberry.js" />
</script><a href="#" onclick="boxberry.open(boxberry_input' .(($sel_city = $this->getSelectedCityId($this->getAddress('city'))) ? (', '.$sel_city) : "" ) .'); return false">Выбрать</a>',
		            'id' => 'pos_address',
		            'name' => 'pos_address',
		            'value' => '',
					),
				'point_id' => array(
		            'control_type' => waHtmlControl::HIDDEN,
		            'title' => '',
		            'id' => 'point_id',
		            'name' => 'point_id',
		            'value' => '',
 			        'class' => 'wa-address',
					)

				);
    }
    
    private function getInfoFromStorage()
    {
/*
	    $data = $this->getSessionData('params', array());
		file_put_contents('data.txt', print_r($data,1));
		if (!isset($data['shipping'])) {
			return false;
		} else if (isset($data['shipping']['point_id'])) {
			$shipping = $data['shipping'];
			if ($shipping['point_id']) {
				return $shipping;
			}
		}
*/
	    return false;
    }

    private function getInfoFromRequest()
    {
	    $request = waRequest::request();
		if (!isset($request['shipping_id'])) {
			return false;
		} else if (isset($request['shipping_'.$request['shipping_id']]['point_id'])) {
			$shipping = $request['shipping_'.$request['shipping_id']];
			if ($shipping['point_id']) {
				return $shipping;
			}
		}
	    return false;
    }

    private function getSelectedCityId($city = '')
    {
		$cities = $this->sendRequest('ListCities', []);
		foreach ($cities as $c) {
			if (stristr($c['Name'], $city)) return $c['Code'];
		}
		return null;
    }

    protected function getSessionData($key, $default = null)
    {
        $data = wa()->getStorage()->get('shop/checkout');
        return isset($data[$key]) ? $data[$key] : $default;
    }

    public function allowedCurrency()
    {
        return 'RUB';
    }

    public function allowedWeightUnit()
    {
        return 'kg';
    }

    public function requestedAddressFields()
    {
        return false;        
    }


}