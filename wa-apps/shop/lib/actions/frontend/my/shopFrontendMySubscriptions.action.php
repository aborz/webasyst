<?php
/**
 * User subscriptions in customer account, and submit controller for it.
 */
class shopFrontendMySubscriptionsAction extends waMyProfileAction
{
    public function execute()
    {
        parent::execute();

        $this->view->assign('my_nav_selected', 'earn');

        // Set up layout and template from theme
        $this->setThemeTemplate('my.subscriptions.html');
        if (!waRequest::isXMLHttpRequest()) {
            $this->setLayout(new shopFrontendLayout());
            $this->getResponse()->setTitle(_w('Earn'));
            $this->view->assign('breadcrumbs', self::getBreadcrumbs());
            $this->layout->assign('nofollow', true);
        }

        $params['token'] = shopSailplayHelper::getToken();
        $sp_user_info = '';shopSailplayHelper::getUserAuthHash();
        //$sp_user_info = wa()->getUser()->get('phone');
        $this->view->assign('sp_user_info', print_r($sp_user_info, true));
        $this->view->assign('sp_user_auth_hash', shopSailplayHelper::getUserAuthHash());

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

