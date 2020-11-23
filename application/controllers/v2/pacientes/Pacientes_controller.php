<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pacientes_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['pacientes'] = $this->Pacientes->getAll();
        $this->view('pacientes/Pacientes_view', $data);
    }

    public function edit(): void
    {
        $dados = $this->input->post();
        $this->Pacientes->update(
            ['paciente_id'=>$dados['paciente_id']],
            $dados
        );
        $this->session->set_flashdata('warning', '<i class="far fa-check-circle"></i> Paciente atualizado com sucesso.');
        redirect('v2/pacientes');
    }

    public function new(): void
    {
        $paciente = $this->input->post();
        $this->Pacientes->insert($paciente);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Paciente cadastrado com sucesso!');
        redirect('v2/pacientes');
    }


    public function jsonAll()
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->Pacientes->getAll()));
    }

    public function jsonOne(int $paciente_id)
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->Pacientes->getAll(['paciente_id' => $paciente_id])[0]));
    }
}
