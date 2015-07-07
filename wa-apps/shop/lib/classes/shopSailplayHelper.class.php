<?php
class shopSailplayHelper
{
	const STORE_DEPARTMENT_ID = '1408';
	const STORE_DEPARTMENT_KEY = '59074706';
	const API_PIN = '9671';
	
	public static function getToken() {
        $sp_creditentials = [
	        'store_department_key' => self::STORE_DEPARTMENT_KEY,
	        'store_department_id' => self::STORE_DEPARTMENT_ID,
	        'pin_code' => self::API_PIN
        ];
        
        $response = file_get_contents('https://sailplay.ru/api/v1/login/?'.http_build_query($sp_creditentials));
        if ($response) {
	        $result = json_decode($response);
	        $sp_token = isset($result->token) ? $result->token : '';
        }
        return $sp_token;
	}
	
	public static function usersInfo($params) {
        $sp_creditentials = [
	        'store_department_id' => self::STORE_DEPARTMENT_ID,
        ];
        $sp_creditentials['token'] = isset($params['token']) ? $params['token'] : '';
        $sp_creditentials['user_phone'] = isset($params['user_phone']) ? $params['user_phone'] : wa()->getUser()->get('phone')[0]['value'];
        $sp_creditentials['history'] = isset($params['history']) ? $params['history'] : 1;
        
        $response = file_get_contents('https://sailplay.ru/api/v2/users/info/?'.http_build_query($sp_creditentials));
        if ($response) {
	        $result = json_decode($response);
        }
        return $result;
	}
	
	
	public static function eventsList($params) {
        $sp_creditentials = [
	        'store_department_id' => self::STORE_DEPARTMENT_ID,
        ];
        $sp_creditentials['token'] = isset($params['token']) ? $params['token'] : '';
        
        $response = file_get_contents('https://sailplay.ru/api/v2/events/list/?'.http_build_query($sp_creditentials));
        if ($response) {
	        $result = json_decode($response);
        }
        return $result;
	}	


	public static function getUserAuthHash() {
        $sp_creditentials = [
	        'store_department_id' => self::STORE_DEPARTMENT_ID,
        ];
        $sp_creditentials['token'] = self::getToken();
        $sp_creditentials['user_phone'] = wa()->getUser()->get('phone')[0]['value'];
        
        $response = file_get_contents('https://sailplay.ru/api/v2/users/info/?'.http_build_query($sp_creditentials));
        if ($response) {
	        $result = json_decode($response,true);
	        $result = $result['auth_hash'];
        }
        return $result;
	}
	
	public static function sendRequest($method, $data) {
		$data['store_department_id'] = self::STORE_DEPARTMENT_ID;
        $data['token'] = self::getToken();
        $response = file_get_contents('http://sailplay.ru/api' .$method .'?' .http_build_query($data));
        if ($response) {
	        return json_decode($response,true);
        }
	}
}
