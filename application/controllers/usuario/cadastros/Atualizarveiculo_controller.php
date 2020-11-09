<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Atualizarveiculo_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Atualizarveiculo_view', array());
    }

}
