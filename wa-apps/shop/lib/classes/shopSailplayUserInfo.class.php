<?php
class shopSailplayUserInfo
{
	public $store_department_id='';
	private $token='';
	private $sp_purchases;
	private $sp_detailed_purchases;
	public $wa_user_phone='';
	private $sp_user_info;
	private $sp_auth_hash='';
	private $origin_user_id='';
	private $sp_points='';
	private $sp_history='';
	private $sp_total_spent;
	
	
	public function __construct () {
		$this->token = shopSailplayHelper::getToken();
		$this->store_department_id = shopSailplayHelper::STORE_DEPARTMENT_ID;
		$this->wa_user_phone = wa()->getUser()->get('phone', 'default');
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
		//file_put_contents('data.txt', print_r($this,1));
        return $this;
	}
	
	function fetchUserHistory() {
		$data['user_phone'] = $this->wa_user_phone;
		$data['token'] = $this->token;
		$data['history'] = '1';
		$data['extra_fields'] = 'history';

		$history = shopSailplayHelper::sendRequest('/api/v2/users/info/', $data);
		if (isset($history['history'])) {$this->sp_history = $history['history'];}
        return $this;
	}

	function fetchUserPurchases() {
		if (!$this->sp_history) {
			return $this;
		}
		$purchases = array();
		$spent = 0;
		
		//! Здесь не учитываются возвраты!!!(надо доделать)
		
		foreach($this->sp_history as $act) {
			if ($act['action'] == 'purchase') {
				$purchases[] = $act;
				$spent += $act['price'];
			}
		}
		$this->sp_purchases = $purchases;
		$this->sp_total_spent = $spent;
        return $this;
	}

	function fetchDetailedPurchases() {
		if (!$this->sp_purchases) {
			return $this;
		}
		$purchases = array();
		foreach($this->sp_purchases as $p) {
			$data['token'] = $this->token;
			$data['order_num'] = $p['order_num'];
			$data['store_department_id'] = $p['store_department_id'];
			
			$purchase = shopSailplayHelper::sendRequest('/api/v2/purchases/get/', $data);
			if ($purchase) {
				if ($purchase['status'] == 'error') {
					$p['status'] = 'error';
					$purchases[] = $p;
				} else {
					$purchase['purchase']['action_date'] = $p['action_date'];
					$purchases[] = $purchase;
				}
			}
		}
		
		$this->sp_detailed_purchases = $purchases;
        return $this;
	}

	function getSpHistory() {
		return ($this->sp_history) ? $this->sp_history : false;
	}

	function getDetailedPurchases() {
        return $this->sp_detailed_purchases;
	}

	function getTotalSpent($formatted = false) {
		//return 55000;
		return $formatted ? number_format($this->sp_total_spent,0,'',' ') : $this->sp_total_spent;
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
	
	function getUnConfirmedPoints() {
		return isset($this->sp_points['unconfirmed']) ? $this->sp_points['unconfirmed'] : 'Unknown';
	}
	
	function getSpentPoints() {
		return isset($this->sp_points['spent']) ? $this->sp_points['spent'] : 'Unknown';
	}
	
	function getTotalPoints() {
		return isset($this->sp_points['total']) ? $this->sp_points['total'] : 'Unknown';
	}
	
	function getUserHistory() {
		return ($this->sp_history) ? $this->sp_history : false;
	}

}
