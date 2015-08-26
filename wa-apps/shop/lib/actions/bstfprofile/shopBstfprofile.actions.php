<?php
class shopBstfprofileActions extends waJsonActions
{
	
function selaCitiesAction() {
	$country = waRequest::get('country');
	$list = file_get_contents('http://www.sela.ru/popup.aspx?box=city_list&param1=' .$country );
	$list = str_ireplace('<li data-', '<option ', $list);
	$list = str_ireplace('</li>', '</option>', $list);
	
	$this->response = $list;
}

function selaShopsAction() {
	$city = waRequest::get('city');
	$list = file_get_contents('http://www.sela.ru/popup.aspx?box=shop_list&param1=' .$city );
	$arr = array();
	preg_match_all('~<li>(.*?)</li>~s', $list, $arr);
	if (isset($arr[1])) $arr = $arr[1];
	
	if ($arr) foreach ($arr as &$a) {
		$shop = explode('|', $a);
		$a = array();
		$a['lat'] = $shop[1];
		$a['lon'] = $shop[0];
		$a['address'] = $shop[2];
		$a['phone'] = $shop[3];
		$a['subway'] = $shop[4];
		$a['timetable'] = $shop[5];
		$a['coordinates'] = $shop[6];
		$a['id'] = $shop[7];
	}
	
	$this->response = $arr;
}

function selaShopInfoAction() {
	$id = waRequest::get('shop_id');
	$list = file_get_contents('http://www.sela.ru/popup.aspx?box=shop_list&param1=619&param2=' .$id );
	$arr = array();
	preg_match_all('~<li>(.*?)</li>~s', $list, $arr);
	if (isset($arr[1])) $arr = $arr[1];
	
	if ($arr) foreach ($arr as &$a) {
		$shop = explode('|', $a);
		$a = array();
		$a['lat'] = $shop[1];
		$a['lon'] = $shop[0];
		$a['address'] = $shop[2];
		$a['phone'] = $shop[3];
		$a['subway'] = $shop[4];
		$a['timetable'] = $shop[5];
		$a['coordinates'] = $shop[6];
		$a['id'] = $shop[7];
	}

	$this->response = $arr[0];
}

function deleteShopAction() {
	$id = waRequest::get('shop_id');
	if (!$id) {
		$this->response = false;
		return false;
	}
	$contact = new waContact(wa()->getUser()->getId());
	$sela_shops = $contact->get('sela_shop');
	$sela_shops = json_decode($sela_shops, true);
	$arr = (array)$sela_shops['sela_shops'];
	$arr2 = array();
	foreach($arr as $k => $v) {
		if ($v != $id) $arr2[] = $v;
	}
	$contact->set('sela_shop', json_encode(array('sela_shops' => $arr2)));
	$contact->save();
	$this->response = 1;
}

function addShopAction() {
	$id = waRequest::get('shop_id');
	if (!$id) {
		$this->response = false;
		return false;
	}
	$contact = new waContact(wa()->getUser()->getId());
	$sela_shops = $contact->get('sela_shop');
	$sela_shops = json_decode($sela_shops, true);
	$arr = (array)$sela_shops['sela_shops'];
	if (in_array($id, $arr)) {
		$this->response = true;
		return true;
	} else {
		$arr[] = $id;
		$contact->set('sela_shop', json_encode(array('sela_shops' => $arr)));
		$contact->save();
	}
	$this->response = $id;
	return true;
}

function deleteCardAction() {
	$id = waRequest::get('card_id');
	if (!$id) {
		$this->response = false;
		return false;
	}
	$contact = new waContact(wa()->getUser()->getId());
	$sela_cards = $contact->get('sela_cards');
	$sela_cards = (array)json_decode($sela_cards, true);
	$arr = array();
	foreach($sela_cards as $k => $v) {
		if ($v != $id) $arr[] = $v;
	}
	$contact->set('sela_cards', json_encode($arr));
	$contact->save();
	$this->response = true;
}

function addCardAction() {
	$id = waRequest::get('card_id');
	if (!$id || !is_numeric($id)) {
		$this->response = false;
		return false;
	}
	$contact = new waContact(wa()->getUser()->getId());
	$sela_cards = $contact->get('sela_cards');
	$sela_cards = json_decode($sela_cards, true);
	$arr = (array)$sela_cards;
	if (in_array($id, $arr)) {
		$this->response = true;
		return true;
	} else {
		$arr[] = $id;
		$contact->set('sela_cards', json_encode($arr));
		$contact->save();
	}
	$this->response = $id;
	return true;
}

}
