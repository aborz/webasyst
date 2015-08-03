<?php

class cloudpaymentsPayment extends waPayment
{
    public function allowedCurrency()
    {
        return array(
            'RUB', //Russian Ruble
        );
    }
    
    public function payment($payment_form_data, $order_data, $auto_submit = false)
    {
        if (!in_array($order_data['currency_id'], $this->allowedCurrency())) {
            throw new waException('Unsupported currency');
        }
        if (empty($order_data['description_en'])) {
            $order_data['description_en'] = 'Order '.$order_data['order_id'];
        }
        $order_data['description_en'] = str_replace(array('“', '”', '«', '»'), '"', $order_data['description_en']);
        $hidden_fields = array(
            'cmd'           => '_xclick',
            'business'      => $this->email,
            'client_email'  => (new waContact($order_data['contact_id']))->get('email', 'default'),
            'item_name'     => str_replace(array('«', '»'), '"', $order_data['description']),
            'item_number'   => $order_data['order_id_str'],//$this->app_id.'_'.$this->merchant_id.'_'.$order_data['order_id_str'],
            'description'   => 'SelaShop.ru ' .$order_data['description'],
            'no_shipping'   => 1,
            'amount'        => number_format($order_data['amount'], 2, '.', ''),
            'charset'       => 'utf-8',
        );
        $view = wa()->getView();
        $view->assign('url', wa()->getRootUrl());
        $view->assign('hidden_fields', $hidden_fields);
        //$view->assign('form_url', $this->getEndpointUrl());
        $view->assign('auto_submit', $auto_submit);

        return $view->fetch($this->path.'/templates/payment.html');
    }

}
