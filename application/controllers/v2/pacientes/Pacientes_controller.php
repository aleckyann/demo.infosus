<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pacientes_controller extends Sistema_Controller
{


    public function listagem(): void
    {
        $data['title'] = 'Lista com todos os pacientes'; 
        $data['pacientes'] = $this->Pacientes->getAll();
        $this->view('pacientes/Listagem_view', $data);
    }
    

    public function edit(): void
    {
        $dados = $this->input->post();
        $this->Pacientes->update(
            ['paciente_id' => $dados['paciente_id']],
            $dados
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Paciente atualizado com sucesso.');
        redirect('v2/pacientes/listagem');
    }

    public function new(): void
    {
        $paciente = $this->input->post();
        $this->Pacientes->insert($paciente);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Paciente cadastrado com sucesso!');
        redirect('v2/pacientes/listagem');
    }


    public function jsonAll()
    {
        $dados = $this->input->post();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($dados));
    }

    public function jsonOne()
    {
        $paciente_id = $this->input->post('paciente_id');
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Pacientes->getAll(['paciente_id' => $paciente_id])[0]));
    }

    /**
     * POST: v2/pacientes/json/select2
     * Retorna pacientes para o plugin select2
     */
    public function select2()
    {
        $dados = $this->input->post();
        $resultado = $this->Pacientes->getJsonSelect2($dados);
        $this->output
            ->set_content_type('application/json')
            ->set_output($resultado);
    }
}
