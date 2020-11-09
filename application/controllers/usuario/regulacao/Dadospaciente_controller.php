<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dadospaciente_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Dadospaciente_view', array());
    }

}
