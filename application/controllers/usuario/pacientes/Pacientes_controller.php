<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pacientes_controller extends Sistema_Controller
{

    public function index()
    {
        $this->usuario_view('Pacientes_view', array());
    }
}
