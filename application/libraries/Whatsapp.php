<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Whatsapp
{

    var $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    /**
     * API Z-API.IO
     */
    public function enviar($telefone, $mensagem)
    {
        $url = 'https://api.z-api.io/instances/392D8E79328F703BF4FDC28CC8B3DA05/token/895B9EBF4E8F9BDCE69D95E0/send-messages';
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

    /**
     * API UTALK.UMBLER
     */
    public function enviar2($telefone, $mensagem)
    {
        $link = 'https://v1.utalk.chat/send/ozqzh9p/?cmd=chat&to=55' . urlencode($telefone) . '@c.us&msg=' . urlencode($mensagem);

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, $link);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($cURLConnection);
        curl_close($cURLConnection);



        return $res;

    }
}