<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Atualizardatascasa_controller extends Sistema_Controller
{
    /**
     * GET: usuario/regulacao/atualizar-datas-casa/(:num)/(:num)
     */
    public function index(int $paciente_id, int $apoio_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id' => $paciente_id])[0];
        $data['dados_casa'] = $this->Casa_de_apoio->porPaciente(['apoio_id' => $apoio_id])[0];
        $this->usuario_view('Atualizardatascasa_view', $data);
    }

    /**
     * POST: usuario/regulacao/atualizar-datas-casa-save/(:num)
     */
    public function update(int $apoio_id): void
    {
        $dados = $this->input->post();
        $this->Casa_de_apoio->update(['apoio_id' => $apoio_id], $dados);
        $this->session->set_flashdata('success', 'Atualizado com sucesso');
        redirect('usuario/regulacao/casa-de-apoio');
    }
}
