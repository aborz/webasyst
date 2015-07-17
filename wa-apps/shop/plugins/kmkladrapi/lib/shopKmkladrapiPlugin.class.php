<?php

class shopKmkladrapiPlugin extends shopPlugin
{
    private $use;
    private $view;

    private function getAllSettings()
    {
        if (!extension_loaded('curl')) {
            throw new waException('Не загружено расширение PHP cURL');
        }

        $this->use = $this->getSettings('use');

        $this->view = wa()->getView();
        $this->view->assign('region_error_msg', $this->getSettings('region_error_msg'));
        $this->view->assign('hint_msg', $this->getSettings('hint_msg'));
    }

    public function frontendCheckoutHandler()
    {
        $this->getAllSettings();

        if ($this->use) {
            $this->addJs('js/kmkladrapi.min.js', true);
//            $this->addJs('js/kmkladrapi.js', true);
            $this->addCss('css/jquery.kladr.min.css', true);

            return $this->view->fetch($this->path . '/templates/frontendCheckout.html');
        } else {
            return '';
        }
    }
}
