<?php
/**
 * User profile form in customer account, and submit controller for it.
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
/*
        $sp_creditentials = [
	        'store_department_key' => 59074706,
	        'store_department_id' => 1408,
	        'pin_code' => 9671
        ];
        
        $responce = file_get_contents('https://sailplay.ru/api/v1/login/?'.http_build_query($sp_creditentials));
        if ($responce) {
	        $result = json_decode($responce);
	        $sp_token = isset($result->token) ? $result->token : '';
        }
        
        $sp_creditentials = [
	        'store_department_id' => 1408,
	        'token' => $sp_token,
	        'user_phone' => 79265935591,
	        'history' => 1
        ];
        $responce = file_get_contents('https://sailplay.ru/api/v2/users/info/?'.http_build_query($sp_creditentials));

        
        print_r('<pre>');
        print_r(json_decode($responce));
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
}

