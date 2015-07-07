<?php
/**
 * User account form in customer account, and submit controller for it.
 */
class shopFrontendMyAccountAction extends waMyProfileAction
{
    public function execute()
    {
        parent::execute();

        $this->view->assign('my_nav_selected', 'account');

        // Set up layout and template from theme
        $this->setThemeTemplate('my.account.html');
        if (!waRequest::isXMLHttpRequest()) {
            $this->setLayout(new shopFrontendLayout());
            $this->getResponse()->setTitle(_w('Account'));
            $this->view->assign('breadcrumbs', self::getBreadcrumbs());
            $this->layout->assign('nofollow', true);
        }

        $params['token'] = shopSailplayHelper::getToken();
        $phone = wa()->getUser()->get('phone')[0]['value'];
        
        $params['user_phone'] = $phone;
        $sp_user_info = shopSailplayHelper::usersInfo($params);
        //$sp_user_info = wa()->getUser()->get('phone');
        $this->view->assign('sp_user_info', print_r($sp_user_info, true));
        $this->view->assign('purchases_progressbar', $this->getPurchasesProgressbarHtml ($price = 13580));
        
/*
        print_r('<pre>');
        print_r();
        print_r('</pre>');
*/

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
    
    private function getPurchasesProgressbarHtml ($price = 1000) {
	    $delimeters = array(500,10000,25000,50000,75000);
	    $html = '<p class="large"><strong>Накопительная сумма покупок:</strong></p><div class="purchase-progressbar"><div class="pp-heading">';
	    foreach ($delimeters as $d) {
		    $html .= '<div class="sector">'.$this->formatPrice($d).' руб</div>';
	    }
	    $html .= '</div><div style="clear:both"></div>';
	    for ($i = 1; $i<count($delimeters); $i++) {
		    $html .= '<div class="sector">';
		    $html .= '<div class="sector-cell"><div class="filling"><div class="filled" style="width:';
		    if ($price < $delimeters[$i-1]) {
			    $html .= '0';
		    } else if ($price > $delimeters[$i]) {
			    $html .= '100';
		    } else {
			    $html .= intval(100*($price - $delimeters[$i-1]) / ($delimeters[$i] - $delimeters[$i-11]));
		    }
		    $html .= '%">&nbsp;</div></div></div></div>';
	    }
	    $html .= '</div>';
	    return $html;
    }
    
    private function formatPrice($price = 0) {
	    return number_format($price,0,'',' ');
    }
}

