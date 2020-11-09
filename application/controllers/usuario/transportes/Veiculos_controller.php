<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Veiculos_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Veiculos_view', array());
    }

}