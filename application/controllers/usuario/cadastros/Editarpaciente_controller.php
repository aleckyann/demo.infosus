<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Editarpaciente_controller extends Sistema_Controller
{

    /**
     * GET: usuario/cadastros/editar-paciente/(:num)
     */
    public function index(int $paciente_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id' => $paciente_id])[0];
        $this->usuario_view('Editarpaciente_view', $data);
    }
}
