<?php

class shopKmkladrapiPluginKladrApi
{
    const TOKEN = '5577e0990a69de386a8b461e';

    public static function queryKladrApi($query)
    {
        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_HTTPGET => true,
            CURLOPT_ENCODING => 'gzip',
            CURLOPT_SSL_VERIFYPEER => false
        );

        $url = (wa()->getRequest()->isHttps() ? 'https' : 'http').'://kladr-api.com/api.php?'.http_build_query($query + array('token' => self::TOKEN));
        $ch = curl_init($url);

        if (!$ch) {
            throw new waException('cURL init error');
        }

        if (!curl_setopt_array($ch, $options)) {
            throw new waException('Ошибка установки параметров запроса cURL');
        }

        $response = curl_exec($ch);
        if ($response === false) {
            throw new waException(sprintf("Ошибка cURL: [%d] %s", curl_errno($ch), curl_error($ch)));
        }
        curl_close($ch);

        return $response;
    }
}