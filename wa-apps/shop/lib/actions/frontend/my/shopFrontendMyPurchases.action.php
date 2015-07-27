<?php
/**
 * User purchases in customer account, and submit controller for it.
 */
class shopFrontendMyPurchasesAction extends waMyProfileAction
{
    public function execute()
    {
        parent::execute();

        $this->view->assign('my_nav_selected', 'purchases');

        // Set up layout and template from theme
        $this->setThemeTemplate('my.purchases.html');
        if (!waRequest::isXMLHttpRequest()) {
            $this->setLayout(new shopFrontendLayout());
            $this->getResponse()->setTitle(_w('Purchases'));
            $this->view->assign('breadcrumbs', self::getBreadcrumbs());
            $this->layout->assign('nofollow', true);
        }
		
        $sp_user_info = new shopSailplayUserInfo();
        $sp_user_info->fetchUserInfo()
	        ->fetchUserHistory()
	        ->fetchUserPurchases()
	        ->fetchDetailedPurchases();
        $this->view->assign('sp_user_info', print_r($sp_user_info->getDetailedPurchases(),1));
        $this->view->assign('purchases_table', $this->getPurchasesTable($sp_user_info->getDetailedPurchases(), waRequest::get()));
        $this->view->assign('datepicker_form', $this->getDatepickerForm());
    }

    protected function getForm()
    {
        $domain = wa()->getRouting()->getDomain();
        $domain_config_path = wa()->getConfig()->getConfigPath('domains/'.$domain.'.php', true, 'site');
        if (file_exists($domain_config_path)) {
            $domain_config = include($domain_config_path);
        } else {
            $domain_config = array();
        }
        if (!empty($domain_config['personal_fields'])) {
            return parent::getForm();
        }
        return shopHelper::getCustomerForm(null, true);
    }

    protected function getContact()
    {
        // Create new temporary waContact object
        $contact = new waContact(wa()->getUser()->getId());

        // Assign address with the right extension, if no extension is set
        if ($this->form->fields('address.shipping') && !$contact->get('address.shipping') && $addresses = $contact->get('address')) {
            $contact->set('address.shipping', $addresses[0]);
        }
        if ($this->form->fields('address.billing') && !$contact->get('address.billing') && $addresses = $contact->get('address.shipping')) {
            $contact->set('address.billing', $addresses[0]);
        }

        return $contact;
    }

    public static function getBreadcrumbs()
    {
        return array(
            array(
                'name' => _w('My account'),
                'url' => wa()->getRouteUrl('/frontend/my'),
            ),
        );
    }

	//!incomplete
    private function getPurchasesTable($purchases = array(), $filter = array()) {
	    if (!$purchases) return '';
		$html = '
	    <table class="user-purchases" style="width:100%">
			<thead>
				<tr>
					<th class="align-center"><b>Номер карты</b></th>
					<th><b>Номер чека / заказа</b></th>
					<th class="align-center"><b>Доставка / Магазин</b></th>
					<th class="align-center"><b>Дата</b></th>
					<th class="align-center"><b>Статус</th>
					<th class="align-center"><b>Сумма, руб.</b></th>
					<th class="align-center"><b>Бонусы</b></th>
					<th class="align-center"><b>Тип магазина</b></th>
					<th></th>
				</tr>
			</thead>
			
			<tbody>';
		foreach ($purchases as $p) {
			$p = $this->parseSPPurchase($p, $filter);
			$html .= $this->getTableRow($p);
		}
				
		$html .= '
				</tbody>
			</table>
		';

	    return $html;
    }
	
	//! тут надо обработать подробнее
	private function parseSPPurchase($purchase = array(), $filter = array()) {
	    if (!$purchase) return '';
	    
	    $wa_date = stristr($purchase['purchase']['purchase_date'], 'T', true);
	    
	    if(isset($filter['from-date'])) { if ( $wa_date < $this->convertDatepickerDate($filter['from-date']) ) return false;}
	    if(isset($filter['to-date'])) { if ( $wa_date > $this->convertDatepickerDate($filter['to-date']) ) return false;}
	    
		$purchase['wa-card-number'] = '50000005134';
		$purchase['wa-bill-number'] = $purchase['purchase']['order_num'];
		$purchase['wa-store'] = $purchase['purchase']['store_department_id'];
		$purchase['wa-date'] = $wa_date;
		$purchase['wa-status'] = $purchase['status'];
		$purchase['wa-price'] = $purchase['purchase']['price'];
		$purchase['wa-points'] = $purchase['purchase']['points_delta'];
		$purchase['wa-store-type'] = $purchase['purchase']['store_department_id'];
		return $purchase;
	}

    private function getTableRow($purchase = array()) {
	    if (!$purchase) return '';
	    
	    $html = '<tr>';
	    $html .= '<td class="align-center">' .$purchase['wa-card-number'] .'</td>'
	    	.'<td>' .$purchase['wa-bill-number'] .'</td>'
	    	.'<td class="align-center">' .$purchase['wa-store'] .'</td>'
	    	.'<td class="align-center">' .$purchase['wa-date'] .'</td>'
	    	.'<td class="align-center">' .$purchase['wa-status'] .'</td>'
	    	.'<td class="align-center">' .$purchase['wa-price'] .'</td>'
	    	.'<td class="align-center">' .$purchase['wa-points'] .'</td>'
	    	.'<td class="align-center">' .$purchase['wa-store-type'] .'</td>'
	    	.'<td class="align-center">Детализация</td>'
	    	.'</tr>';

	    $html .= '</tr>';
	    return $html;
    }
    
    private function getDatepickerForm() {
	    $html = '
	    	<form id="date-chose">
				<p>Выберите дату: c <input type="text" name="from-date" class="datepicker" value="' .htmlspecialchars(waRequest::get('from-date', '', 'string'), ENT_QUOTES) .'"/> по <input type="text" name="to-date" class="datepicker" value="' .htmlspecialchars(waRequest::get('to-date', '', 'string'), ENT_QUOTES) .'"/>';

/* пока не требуется
		$get = waRequest::get();
		unset($get['from-date']);
		unset($get['to-date']);
		if ($get) foreach ($get as $key => $value) {
			$html .= '<input type="hidden" name="' .htmlspecialchars($key, ENT_QUOTES) .'" value="' .htmlspecialchars($value, ENT_QUOTES) .'" />';
		}
*/

		$html .='
				<button>Применить</button></p>
			</form>';
		return $html;
    }
    
    private function convertDatepickerDate($date) {
	    return implode('-', array_reverse( explode('.', $date) ));
    }
    
}

