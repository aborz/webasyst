<?php
class shopSailplayUserInfo
{
	public $store_department_id='';
	private $token='';
	private $sp_purchases;
	public $wa_user_phone='';
	private $sp_user_info;
	private $sp_auth_hash='';
	private $origin_user_id='';
	private $sp_points='';
	
	
	public function __construct () {
		$this->token = shopSailplayHelper::getToken();
		$this->store_department_id = shopSailplayHelper::STORE_DEPARTMENT_ID;
		$phone = wa()->getUser()->get('phone');
		$this->wa_user_phone = isset($phone[0]['value']) ? $phone[0]['value'] : '';
	}

	function setToken($token=null) {
		$this->token = $token;
		return $this;
	}
	
	function getToken() {
		return $this->token;
	}
	
	function fetchUserInfo() {
		$data['user_phone'] = $this->wa_user_phone;
		$data['token'] = $this->token;
		$this->sp_user_info = shopSailplayHelper::sendRequest('/api/v2/users/info/', $data);
		if ($ui = $this->sp_user_info) {
			$this->sp_auth_hash = $ui['auth_hash'];
			$this->origin_user_id = $ui['origin_user_id'];
			$this->sp_points = $ui['points'];
		}
		file_put_contents('data.txt', print_r($this,1));
        return $this;
	}
	
	function getAuthHash() {
		return $this->sp_auth_hash;
	}

	function getOriginUserId() {
		return ($this->origin_user_id) ? $this->origin_user_id : 'Unknown';
	}

	function getConfirmedPoints() {
		return isset($this->sp_points['confirmed']) ? $this->sp_points['confirmed'] : 'Unknown';
	}
}
