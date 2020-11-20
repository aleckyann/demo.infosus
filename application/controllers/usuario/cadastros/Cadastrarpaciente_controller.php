<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cadastrarpaciente_controller extends Sistema_Controller
{

    /**
     * GET: usuario/cadastros/cadastrar-paciente
     */
    public function index()
    {
        $this->usuario_view('Pacientes_view');
    }
}
