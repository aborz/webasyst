<?php

/**
 * Maksim Zamkovsky
 * zamkovsky@gmail.com
 */
class shoplogisticscourierShipping extends waShipping
{
    public function requestedAddressFields()
    {
        return array(
            'country' => array('hidden' => true, 'value' => 'rus', 'cost' => true),
            'city'    => array("required"=>true, 'value' => 'Москва'),
            'street'  => array("required"=>true),
        );
    }

    public function calculate()
    {
       $weight = ($this->getTotalWeight() > 0) ? $this->getTotalWeight() : $this->avg_weight;
       $city = $this->getAddress('city') . ', ' . $this->getAddress('region');

       if ($city == '')
         {
           $services = 'Не задан город';
           return $services;
         }

       if (!extension_loaded('curl')) {
          $services = 'PHP extension CURL not loaded';
          return $services;
       }

       $dom = new domDocument("1.0", "utf-8");
       $root = $dom->createElement("request");
       $dom->appendChild($root);

       $child = $dom->createElement("function","get_delivery_price");
       $root->appendChild($child);

       $child = $dom->createElement("api_id",$this->api_id);
       $root->appendChild($child);

       $child = $dom->createElement("from_city",$this->from_city_code_id);
       $root->appendChild($child);

       $child = $dom->createElement("to_city",$city);
       $root->appendChild($child);

       $child = $dom->createElement("pickup_place",0);
       $root->appendChild($child);

       $child = $dom->createElement("weight",$weight);
       $root->appendChild($child);

       $child = $dom->createElement("order_price",$this->getTotalPrice());
       $root->appendChild($child);

       $child = $dom->createElement("num",$this->avg_num);
       $root->appendChild($child);

       $child = $dom->createElement("tarifs_type",1);
       $root->appendChild($child);

       $child = $dom->createElement("price_options",1);
       $root->appendChild($child);

       $child = $dom->createElement("delivery_partner",$this->partner);
       $root->appendChild($child);


	   $res = $this->sendRequest($dom->saveXML());


	   try {
        $xml = new SimpleXMLElement($res);
       } catch (Exception $e) {
         return 'Ошибка получения данных';
       }

	   $price = (float)$xml->price;

	   if ($xml->error_code > 0)
		  {
			return "В заданный город доставка не осуществляется";
		  }
		if ($xml->srok_dostavki	!= '')
		  {
		  	$srok_dostavki = $xml->srok_dostavki . ' дн.';
		  }

       $services['sl_courier'] = array(
                        'name'         => 'до дверей',
                        'description'  => '',
                        'id'           => 'sl_courier',
                        'est_delivery' => $srok_dostavki,
                        'rate'         => $price,
                        'currency'     => 'RUB',
           );

        return $services;
    }

  private function sendRequest($xml)
  {

  	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://client-shop-logistics.ru/index.php?route=deliveries/api');
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($curl, CURLOPT_POSTFIELDS, 'xml='.urlencode(base64_encode($xml)));
    curl_setopt($curl, CURLOPT_USERAGENT, 'Opera 10.00');
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);

    $res = curl_exec($curl);
    curl_close($curl);

    return $res;
  }


    public function allowedCurrency()
    {
        return 'RUB';
    }

    public function allowedWeightUnit()
    {
        return 'kg';
    }

}