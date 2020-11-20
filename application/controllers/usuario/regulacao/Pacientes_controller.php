<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pacientes_controller extends Sistema_Controller
{

    /**
     * GET usuario/regulacao/lista-pacientes
     */
    public function index(): void
    {
        $data['pacientes'] = $this->Pacientes->getAll();
        $this->usuario_view('Pacientes_view', $data);
    }
}
