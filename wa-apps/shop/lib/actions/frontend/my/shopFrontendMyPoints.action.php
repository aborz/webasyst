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
		
		$html = '
			<div class="user-bonus" style="width:100%">
				<div class="heading" style="width:100%">
					<div class="column col-1">
						&nbsp;
					</div>
					<div class="column col-2">
						<b>Тип бонусов</b>
					</div>
					<div class="column col-3">
						<b>Общее кол-во начисленных бонусов</b>
					</div>
					<div class="column col-4">
						<b>Общее кол-во бонусов, доступных для списания</b>
					</div>
					<div class="column col-5">
						<b>Ближайшая дата сгорания доступных бонусов</b>
					</div>
					<div class="column col-6">
						<b>Кол-во сгорающих бонусов</b>
					</div>
				</div>
				
				<div class="body">';
		
		$html .= $this->getTableRow($history, 'p_offline', array('id' => 'p_offline', 'class' => 'large'))
			.$this->getTableRow($history, 'p_online', array('id' => 'p_online', 'class' => 'large'))
			.$this->getTableRow($history, 'social', array('id' => 'social', 'class' => 'large'))
			.$this->getTableRow($history, 'spent', array('id' => 'spent', 'class' => 'large'))
			.$this->getTableRow($history, 'other', array('id' => 'other', 'class' => 'large'));
				
		$html .= '
				</div>
				
				<div class="body">
					<div class="column col-1">
						&nbsp;
					</div>
					<div class="column col-2">
						<b>Итого</b>
					</div>
					<div class="column col-3 align-center">
						<b>750</b>
					</div>
					<div class="column col-4 align-center">
						<b>650</b>
					</div>
					<div class="column col-5">

					</div>
					<div class="column col-6">

					</div>
				</div>
			</div>
		';

	    return $html;
    }

    private function getTableRow($history = array(), $key, $options = array()) {
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
	    if (!$arr) return '<div'
	    	.(isset($options['id']) ? ' id="'.$options['id'].'"' : '')
	    	.(isset($options['class']) ? ' class="'.$options['class'].' bonus-row"' : 'bonus-row')
	    	.(isset($options['style']) ? ' style="'.$options['style'].'"' : '')
	    	.'>'
				.'<div class="column col-1 action" onclick="toggleTableVisibility(\'' .$options['id'] .'\')" role="button">&nbsp;</div>'
		    	.'<div class="column col-2">' .$this->getSpKeyName($key) .'</div>'
		    	.'<div class="column col-3 align-center">0</div>'
		    	.'<div class="column col-4 align-center">0</div>'
		    	.'<div class="column col-5 align-center"></div>'
		    	.'<div class="column col-6 align-center"></div>'
		    .'</div>';
	    
	    $html = '<div'
	    	.(isset($options['id']) ? ' id="'.$options['id'].'"' : '')
	    	.(isset($options['class']) ? ' class="'.$options['class'].' bonus-row"' : 'bonus-row')
	    	.(isset($options['style']) ? ' style="'.$options['style'].'"' : '')
	    	.'>';
	    $html .= '<div class="column col-1 action" onclick="toggleTableVisibility(\'' .$options['id'] .'\')" role="button">+&nbsp;</div>'
	    	.'<div class="column col-2">' .$this->getSpKeyName($key) .'</div>'
	    	.'<div class="column col-3 align-center">' .$total_earned .'</div>'
	    	.'<div class="column col-4 align-center">' .$total_earned .'</div>'
	    	.'<div class="column col-5 align-center"></div>'// .waDateTime::format('humandatetime', strtotime($action_date)) .'</div>'
	    	.'<div class="column col-6 align-center"></div>';
	    
		
		$html.= '<div class="' .$options['id'] .'-detailed bonus-row-detailed" style="display:none">'
				.'<div class="heading small" style="width:100%">
					<div class="detail-column col-1 align-center">
					</div>
					<div class="detail-column col-2 align-center">
						<b>Дата транзакции</b>
					</div>
					<div class="detail-column col-3 align-center">
						<b>Кол-во бонусов</b>
					</div>
					<div class="detail-column col-4 align-center">
						<b>Статус</b>
					</div>
					<div class="detail-column col-5 align-center">
						<b>Вид</b>
					</div>
					<div class="detail-column col-6 align-center">
						<b>Дата сгорания</b>
					</div>
				</div>';
	    $i = 0;
	    foreach ($arr as $row) {
		    $i++;
		    $html.= '<div class="single-bonus-row">'
		    	.'<div class="detail-column col-1 align-center">' .$i .'</div>'
		    	.'<div class="detail-column col-2 align-center">' .waDateTime::format('humandate', strtotime($row['action_date'])) .'</div>'
		    	.'<div class="detail-column col-3 align-center">' .$row['points_delta'] .'</div>'
		    	.'<div class="detail-column col-4 align-center"></div>'
		    	.'<div class="detail-column col-5 align-center"></div>'
		    	.'</div>';
		    	
	    }
	    $html .= '</div></div>';
	    return $html;
    }
	
	/*
	* возвращает человекопонятные названия типов бонусов
	*/
	private function getSpKeyName($key) {
		switch ($key) {
			case 'p_offline': return 'Бонусы за покупки оффлайн';
			case 'p_online': return 'Бонусы за покупки онлайн';
			case 'social': return 'Бонусы за активность в соцсетях';
			case 'spent': return 'Потраченные бонусы';
			case 'welcome': return 'Приветственные бонусы';
			case 'birthday': return 'Бонусы в честь дня рождения';
			case 'other': return 'Другое';
			default: return 'x';
		}
	}
}

