<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sms
{

    var $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    public function enviar($telefone, $mensagem)
    {
        $telefone = '55' . $telefone;
        $pacote = array('user' => 'infosus', 'password' => 'jf91500290', 'type' => '0', 'number' => $telefone, 'content' => $mensagem);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://api.smsmarket.com.br/webservice-rest/send-single?');

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $pacote);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res    = curl_exec($ch);
        $err    = curl_errno($ch);
        $errmsg = curl_error($ch);
        $header = curl_getinfo($ch);
        curl_close($ch);

        $callback = json_decode($res);

        return $callback->success;
    }
}
