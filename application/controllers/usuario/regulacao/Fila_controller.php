<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Fila_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Fila_view', array());
    }

}
