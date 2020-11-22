<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pacientes_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['pacientes'] = $this->Pacientes->getAll();
        $this->view('pacientes/Pacientes_view', $data);
    }

    public function edit(int $paciente_id): void
    {
    }

    public function new(): void
    {
    }
}
