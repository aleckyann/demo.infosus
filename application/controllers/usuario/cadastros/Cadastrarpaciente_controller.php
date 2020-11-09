<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cadastrarpaciente_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Pacientes_view', array());
    }

}
