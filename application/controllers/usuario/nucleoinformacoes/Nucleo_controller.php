<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Nucleo_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Nucleoinformacoes_view', array());
    }

}
