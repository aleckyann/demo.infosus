<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Procedimentosdiversos_controller extends Sistema_Controller
{

    public function index()
    {
        $this->usuario_view('Procedimentosdiversos_view', array());
    }
}
