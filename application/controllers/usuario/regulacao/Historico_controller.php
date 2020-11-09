<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Historico_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Historico_view', array());
    }

}
