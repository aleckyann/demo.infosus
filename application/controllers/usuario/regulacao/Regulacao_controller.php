<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Regulacao_controller extends Sistema_Controller
{

    public function index()
    {
        $this->usuario_view('Regulacao_view', array());
    }
}
