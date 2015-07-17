<?php

class shopKmkladrapiPluginFrontendKmkladrapiController extends waJsonController
{
    public function execute()
    {
        $query = waRequest::post();
        unset($query['_']);
        $this->response = shopKmkladrapiPluginKladrApi::queryKladrApi($query);
    }
    public function display()
    {
        $this->getResponse()->sendHeaders();
        if (!$this->errors) {
            echo $this->response;
        }
    }
}
