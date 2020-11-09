<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Editarpaciente_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Editarpaciente_view', array());
    }

}
