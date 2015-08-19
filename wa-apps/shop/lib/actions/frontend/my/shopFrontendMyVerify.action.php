<?php
/**
 * User subscriptions in customer account, and submit controller for it.
 */
class shopFrontendMyVerifyAction extends waMyProfileAction
{
    public function execute()
    {
        parent::execute();

        $this->view->assign('my_nav_selected', 'profile');

        // Set up layout and template from theme
        $this->setThemeTemplate('my.verify.html');
        if (!waRequest::isXMLHttpRequest()) {
            $this->setLayout(new shopFrontendLayout());
            $this->getResponse()->setTitle('Управление рассылками');
            $this->view->assign('breadcrumbs', self::getBreadcrumbs());
            $this->layout->assign('nofollow', true);
        }
		
        $contact = new waContact(wa()->getUser()->getId());
		$verified = $contact->get('phone_verified');
		$show_code_field = false;
		$changed_phone = false; //не использую
		$sp_error = false;
		
        $sp_user_info = new shopSailplayUserInfo();
        if (waRequest::method() == 'post') {
	        $request = waRequest::post();
	        if (!isset($request['sms_code']) && isset($request['user_phone'])) { //тут надо запустить отправку кода
		        $req_phone = preg_replace("/\D/", "", $request['user_phone']);
		        if ( $req_phone != $contact->get('phone', 'default')) {
			        $contact->set('phone_verified', false);
			        $contact->set('phone', $req_phone);
					$contact->save();
					$changed_phone = true;
		        }
				$sp_user_info = new shopSailplayUserInfo();
				$sp_code = $sp_user_info->sendSMSMessage('Код подтверждения SELA.RU $[sms_code].');
				$show_code_field = true;
				if (isset($sp_code['sms_code'])) {
			        $contact->set('sp_sms_code', $sp_code['sms_code']);
					$contact->save();
				} else {
					$show_code_field = false;
					$sp_error = isset($sp_code['message']) ? $sp_code['message'] : false;
				}
	        }
	        if (isset($request['sms_code'])) {
		        if (($request['sms_code'] == $contact->get('sp_sms_code', 'default')) && !($contact->get('phone_verified'))) {
			        $contact->set('sp_sms_code', false); //удаляем
			        $contact->set('phone_verified', true);
			        $contact->save();
		        } else {
			        $show_code_field = true;
			        $sp_error = 'Код неверный.';
		        }
	        }
        }

//        $saved = waRequest::post() && $this->saveFromPost($this->form, $this->contact);

        $this->view->assign('verified', $contact->get('phone_verified'));
        $this->view->assign('show_code_field', $show_code_field);
        $this->view->assign('sp_error', $sp_error);
        $this->view->assign('sp_user_info', print_r($sp_user_info, true));
        $this->view->assign('user_subscriptions', $sp_user_info->getUserSubscriptions());

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

