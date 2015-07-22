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
        $this->view->assign('purchases_table', $this->getPurchasesTable());
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
    private function getPurchasesTable($purchases = array()) {
/*
		if (!count($purchases)) return false;
		
		//сначала промаркируем все подготовим все покупки к выводу
		for ($i = 0; $i < count($history); $i++) {
			$history[$i]['wa_key'] = 'other';
			if (isset($history[$i]['points_delta'])) {
				if ($history[$i]['points_delta'] < 0) {
					$history[$i]['wa_key'] = 'spent';
					continue;
				}
			}
			
			if ($history[$i]['action'] == 'purchase') {
				if ($history[$i]['store_department_id'] == '1408') {
					$history[$i]['wa_key'] = 'p_online';
				} else {
					$history[$i]['wa_key'] = 'p_offline';
				}
				continue;
			}
			
			if (isset($history[$i]['social_action'])) {
				$history[$i]['wa_key'] = 'social';
				continue;
			}
		}
		
*/
		$html = '
	    <table class="user-purchases" style="width:100%">
			<thead>
				<tr>
					<th class="align-center">Номер карты</th>
					<th>Номер чека / заказа</th>
					<th class="align-center">Доставка / Магазин</th>
					<th class="align-center">Дата</th>
					<th class="align-center">Статус</th>
					<th class="align-center">Сумма, руб.</th>
					<th class="align-center">Бонусы</th>
					<th class="align-center">Тип магазина</th>
					<th></th>
				</tr>
			</thead>
			
			<tbody>';
/*
		foreach ($purchases as $p) {
			$html .= $this->getTableRow($p);
		}
*/
				
		$html .= '
				</tbody>
			</table>
		';

	    return $html;
    }

	//!incomplete
    private function getTableRow($purchase = array()) {
	    $arr = array();
	    $total_earned = 0;
	    $action_date = '';
	    foreach ($history as $h) {
		    if ($h['wa_key'] == $key) {
			    $arr[] = $h;
			    if ($h['points_delta'] > 0) $total_earned += $h['points_delta'];
			    $action_date = $h['action_date'];
		    }
	    }
	    if (!$arr) return '';
	    
	    $html = '<tr'
	    	.(isset($options['id']) ? ' id="'.$options['id'].'"' : '')
	    	.(isset($options['class']) ? ' class="'.$options['class'].'"' : '')
	    	.(isset($options['style']) ? ' style="'.$options['style'].'"' : '')
	    	.'>';
	    $html .= '<td class="action" onclick="toggleTableVisibility(\'' .$options['id'] .'\')" role="button">+&nbsp;</td>'
	    	.'<td>' .$this->getSpKeyName($key) .'</td>'
	    	.'<td class="align-center">' .$total_earned .'</td>'
	    	.'<td class="align-center">' .str_replace('T', ' ', $action_date) .'</td><td></td>'
	    	.'</tr>';
	    
	    	
	    $html .= '</tr>';

	    $i = 0;
	    foreach ($arr as $row) {
		    $i++;
		    $html.= '<tr class="' .$options['id'] .'-detailed" style="display:none">'
		    	.'<td>' .$i .'</td>'
		    	.'<td>' .$row['name'] .'</td>'
		    	.'<td class="align-center">' .$row['points_delta'] .'</td>'
		    	.'<td class="align-center">' .str_replace('T', ' ', $row['action_date']) .'</td>'
		    	.'<td class="align-center"></td>'
		    	.'</tr>';
		    	
	    }
	    return $html;
    }
}

