<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Consulta_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Consulta_view', array());
    }

}
