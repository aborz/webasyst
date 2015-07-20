<?php

/**
 * Andrew Lavrentev
 * andrew.lavrentev@gmail.com
 */
class pickpointShipping extends waShipping
{
	public function calculate()
	{
		$shipping = $this->getInfoFromRequest();
		if(!$shipping) {$shipping = $this->getInfoFromStorage();}
		if(!$shipping) {return [array('rate' => null, 'comment' => 'Для расчета стоимости доставки укажите пункт вывоза заказа')];}

		$this->sessionId = $this->getSessionID();
		$data = [];
		$data['SessionId'] = $this->sessionId;
		$data['IKN'] = $this->getSettings('IKN');
		$data['FromCity'] = 'Москва';
		$data['FromRegion'] = 'Московская обл.';
		$data['PTNumber'] = $shipping['point_id'];
		$data['Length'] = '50';
		$data['Depth'] = '30';
		$data['Width'] = '40';
		$data['Weight'] = $this->getTotalWeight();
		$data['Weight'] = str_ireplace(',', '.', $data['Weight']);

		$shipping = $this->sendRequest('calctariff', $data);
		if (!isset($shipping['Services'])) {
			return 'Ошибка';
		} else {
			$shipping = $shipping['Services']['0'];
		}
		$shipping['price'] = $shipping['NDS'] + $shipping['Tariff'];
		$this->getSessionID();
		$arr = array(
				    'pickpoint' => array(
				        'name' => 'Доставка в пункт самовывоза', //название варианта доставки, например, “Наземный  транспорт”, “Авиа”, “Express Mail” и т. д.
				        'description' => 'RUB', //необязательное описание варианта  доставки
				        'est_delivery' => '', //произвольная строка, содержащая  информацию о примерном времени доставки
				        'currency' => 'RUB', //ISO3-код валюты, в которой рассчитана  стоимость  доставки
				        'rate_min' => '', //минимальная граница стоимости, если стоимость рассчитана приблизительно
				        'rate_max' => '', //максимальная граница стоимости, если стоимость рассчитана приблизительно
				        'rate' => $shipping['price'],//$shipping['price'],
				    ),
				);
		return $arr;
	}

	private function sendRequest($method, $data = [])
	{
		if (isset($this->sessionId)) {
			$data['SessionId'] = $this->sessionId;
		}
		$data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'http://e-solution.pickpoint.ru/api/'. $method);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 50);
		curl_setopt($curl, CURLOPT_TIMEOUT, 60);

		$res = curl_exec($curl);
		curl_close($curl);
		
		$res = json_decode($res,true);
		
		return $res;
	}
	
	private function getSessionID()
	{
		$data = [];
		$data['Login'] = $this->getSettings('login');
		$data['Password'] = $this->getSettings('password');

		$res = $this->sendRequest('login', $data);
		if (!$res['SessionId']) {return false;}

		return $res['SessionId'];
	}
	
    public function customFields(waOrder $order)
    {
        return array(
				'pos_address' => array(
		            'title' => 'Пункт самовывоза',
		            'control_type' => waHtmlControl::TEXTAREA,
		            'description' => '<script type="text/javascript" src="http://pickpoint.ru/select/postamat.js"></script><a href="#" onclick="pickpoint_select(); return false;">Выбрать</a>',
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
 			        'options' => array(
	 			        	'id' => 'aidishnik',
 			        	),
					),
				);
    }
    
    private function getInfoFromStorage()
    {
/*
	    $data = $this->getSessionData('params', array());
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