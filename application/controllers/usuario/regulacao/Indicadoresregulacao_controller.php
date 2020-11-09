<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Indicadoresregulacao_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Indicadoresregulacao_view', array());
    }

}
