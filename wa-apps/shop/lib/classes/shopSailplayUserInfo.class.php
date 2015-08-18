<?php
/*
* Класс, который хранит всю инфу по пользователю из sailplay.
* Наполняется в зависимости от контекста методами fetch*Something*()
*/
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
	private $sp_subscriptions;
	
	
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
	
	/*
	* Получаем только присвоенные теги.
	* Подписываем еще раз, даже если подписан, в методе subscribeUser().
	* //!но все еще надо проверять наличие e-mail в базе sailplay
	*/
	function fetchUserSubscriptions() {
		$subscriptions = Array(
		    'email-sales' => 0,
		    'email-collections' => 0,
		    'email-shops' => 0,
		    'sms-sales' => 0,
		    'sms-collections' => 0,
		    'sms-shops' => 0,
		);
		
		$data['token'] = $this->token;
		$data['user_phone'] = $this->wa_user_phone;
		$response = shopSailplayHelper::sendRequest('/api/v2/users/tags/list/', $data);

		if(isset($response['events'])){
			$haystack = array();
			foreach($response['events'] as $e) {
				if (isset($e['name'])){
					if ($e['name']) $haystack[] = $e['name'];
				}
			}
			foreach ($subscriptions as $k => &$v) {
				if (in_array($k, $haystack)) $v = 1;
			}
		}
		
		$this->sp_subscriptions = $subscriptions;
	}

	function subscribeUser($request) {
		if (!$this->sp_subscriptions) $this->fetchUserSubscriptions();
		
		$subscriptions = $this->sp_subscriptions;

		$tags_add = array();
		$tags_delete = array();
		$unsubscribe_array = array(); //

		foreach ($subscriptions as $k => &$v) {
			if (isset($request[$k])) {
				$v = 1;
				$tags_add[] = $k;
			} else {
				if($v == 1) $tags_delete[] = $k;
				$v = 0;
			}
			if ($v == 0) $unsubscribe_array[] = $k;
		}
		
		$added_tags_count = count($tags_add);
		$deleted_tags_count = count($tags_delete);
		
		if ($deleted_tags_count) {
			$data = array();
			$data['tags'] = implode(',', $tags_delete);
			$data['token'] = $this->token;
			$data['user_phone'] = $this->wa_user_phone;
			$response = shopSailplayHelper::sendRequest('/api/v2/users/tags/delete/', $data);
			
			$unsubscribe_list = array();
			if (substr_count(implode(' ', $unsubscribe_array), 'email') == 3) $unsubscribe_list[] = 'email_all';
			if (substr_count(implode(' ', $unsubscribe_array), 'sms') == 3) $unsubscribe_list[] = 'sms_all';
			if ($unsubscribe_list) {
				$unsubscribe_list = implode(',', $unsubscribe_list);
				$data = array();
				$data['token'] = $this->token;
				$data['unsubscribe_list'] = $unsubscribe_list;
				$data['user_phone'] = $this->wa_user_phone;
				$response = shopSailplayHelper::sendRequest('/api/v2/users/unsubscribe/', $data);
			}
		}
		
		if ($added_tags_count) {
			$data = array();
			$data['tags'] = implode(',', $tags_add);
			$data['token'] = $this->token;
			$data['tag_categories'] = rtrim(str_repeat('Рассылка,', count($tags_add)),',');
			$data['user_phone'] = $this->wa_user_phone;
			$response = shopSailplayHelper::sendRequest('/api/v2/users/tags/add/', $data);
			
			$subscribe_list = array('0' => 'email_all', '1' => 'sms_all');
			if (!stristr($data['tags'], 'email')) unset ($subscribe_list[0]);
			if (!stristr($data['tags'], 'sms')) unset ($subscribe_list[1]);
			$subscribe_list = implode(',', $subscribe_list);
			$data = array();
			$data['token'] = $this->token;
			$data['subscribe_list'] = $subscribe_list;
			$data['user_phone'] = $this->wa_user_phone;
			$response = shopSailplayHelper::sendRequest('/api/v2/users/subscribe/', $data);
		}

		$this->sp_subscriptions = $subscriptions;
		return $this;
	}
	
	function getUserSubscriptions() {
		return $this->sp_subscriptions;
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
