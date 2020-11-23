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
        $paciente = $this->input->post();
        $this->Pacientes->insert($paciente);

        $this->session->set_flashdata('success', 'Paciente cadastrado com sucesso!');
        redirect('v2/pacientes');
    }
}
