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
        $sp_creditentials['user_phone'] = isset($params['user_phone']) ? $params['user_phone'] : '7';
        $sp_creditentials['history'] = isset($params['history']) ? $params['history'] : 1;
        
        $response = file_get_contents('https://sailplay.ru/api/v2/users/info/?'.http_build_query($sp_creditentials));
        if ($response) {
	        $result = json_decode($response);
        }
        return $result;
	}
	
	
}
