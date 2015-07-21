<?php
/**
 * User Points form in customer account, and submit controller for it.
 */
class shopFrontendMyPointsAction extends waMyProfileAction
{
    public function execute()
    {
        parent::execute();

        $this->view->assign('my_nav_selected', 'points');

        // Set up layout and template from theme
        $this->setThemeTemplate('my.points.html');
        if (!waRequest::isXMLHttpRequest()) {
            $this->setLayout(new shopFrontendLayout());
            $this->getResponse()->setTitle(_w('Account'));
            $this->view->assign('breadcrumbs', self::getBreadcrumbs());
            $this->layout->assign('nofollow', true);
        }


        $sp_user_info = new shopSailplayUserInfo();
        $sp_user_info->fetchUserInfo()->fetchUserHistory();
        
        $this->view->assign('sp_user_info', print_r($sp_user_info,1));
        $this->view->assign('points_table', $this->getPointsTable($sp_user_info->getSpHistory() ));
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

    private function getPointsTable($history = array()) {
		if (!count($history)) return false;
		
		//сначала промаркируем все бонусы
		$social_bonus = array();
		$p_online_bonus = array();
		$p_offline_bonus = array();
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

		$other_bonus = array();
		
		$html = '
			<table class="user-bonus">
				<thead>
				<tr>
					<th class="action"></th>
					<th>Вид бонусов</th>
					<th class="align-center">Общее кол-во начисленных бонусов</th>
					<th class="align-center">Общее кол-во бонусов, доступных для списания</th>
					<th class="align-center">Ближайшая дата сгорания бонусных баллов</th>
					<th class="align-center">Кол-во сгорающих баллов</th>
				</tr>
				</thead>
				
				<tbody>
				<tr class="greeting-bonus">
					<td class="action">+</td>
					<td>Приветственные бонусы</td>
					<td class="align-center">200</td>
					<td class="align-center">200</td>
					<td class="align-center">20.05.2016</td>
					<td class="align-center">200</td>
				</tr>';
				
		if ($p_offline_bonus) $html .= '
			<tr class="retail-bonus">
				<td class="action">+</td>
				<td>Бонусы за покупку в розничном магазине</td>
				<td class="align-center">200</td>
				<td class="align-center">200</td>
				<td class="align-center">20.05.2016</td>
				<td class="align-center">200</td>
			</tr>
		';
		
		if ($p_online_bonus) $html .= '
			<tr class="online-bonus">
				<td class="action">+</td>
				<td>Бонусы за покупку в интернет-магазине</td>
				<td class="align-center">200</td>
				<td class="align-center">0</td>
				<td class="align-center"></td>
				<td class="align-center">200</td>
			</tr>
		';
		
		if ($social_bonus) $html .= '
			<tr class="social-bonus">
				<td class="action">+</td>
				<td>Бонусы за активность в соцсетях</td>
				<td class="align-center">200</td>
				<td class="align-center">200</td>
				<td class="align-center">20.05.2016</td>
				<td class="align-center">200</td>
			</tr>
		';
		
		if ($other_bonus) $html .= '
			<tr class="birthday-bonus">
				<td class="action">+</td>
				<td>Бонусы в честь дня рождения</td>
				<td class="align-center">200</td>
				<td class="align-center">200</td>
				<td class="align-center">20.05.2016</td>
				<td class="align-center">200</td>
			</tr>
		';
		
		$html .= '
				</tbody>
				
				<tfoot>
				<tr class="total" style="height:30px;">
					<td class="action"></td>
					<td>Итого</td>
					<td class="align-center">700</td>
					<td class="align-center">650</td>
					<td class="align-center"></td>
					<td class="align-center">600</td>
				</tr>
				</tfoot>
			</table>
		';

	    return $html;
    }

    private function getTableRow($history = array(), $key, $options = array()) {
	    $arr = array();
	    foreach ($history as $h) {
		    if ($h['wa_key'] == $key) $arr[] = $h;
	    }
	    $html = '<tr'
	    	.(isset($options['id']) ? ' id="'.$options['id'].'"' : '')
	    	.(isset($options['class']) ? ' class="'.$options['class'].'"' : '')
	    	.(isset($options['style']) ? ' style="'.$options['style'].'"' : '')
	    	.'>';
	    	
	    $html .= '</tr>';
	    return $html;
    }

}

