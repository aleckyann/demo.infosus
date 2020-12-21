<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whatsapp
{

    var $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    public function enviar($telefone, $mensagem)
    {
        $url = 'https://api.z-api.io/instances/3925DD69D64E8060021E0616E050C6B6/token/498C159C42414B2377E8AE2D/send-messages';
        $ch = curl_init($url);

        $data = array(
            'phone' => '55'.$telefone,
            'message' => $mensagem
        );

        $body = json_encode($data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, false);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json; charset=utf-8'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        $result = curl_exec($ch);
        print_r($result);
        curl_close($ch);
    }
}
