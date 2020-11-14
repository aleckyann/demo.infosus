<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Excluirpaciente_controller extends Sistema_Controller
{

    public function index(int $paciente_id): void
    {
        $this->Dashboard_model->excluir_paciente($paciente_id);
        $this->session->set_flashdata('success', 'Paciente removido com sucesso.');
        redirect('usuario/regulacao/lista-pacientes');
    }
}
