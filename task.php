<?php

	function getSessionID()
	{
		$data = [];
		$data['login'] = 'apitest';//$this->getSettings('login');
		$data['password'] = 'apitest';//$this->getSettings('password');
		$data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, '​http://e-solution.pickpoint.ru/apitest/login');
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 50);
		curl_setopt($curl, CURLOPT_TIMEOUT, 60);

		$res = curl_exec($curl);
		file_put_contents('data.txt', curl_error($curl));
		curl_close($curl);

		return $res;
	}
print_r(getSessionID());


?>
