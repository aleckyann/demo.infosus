<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Addpacientecasa_controller extends Sistema_Controller
{

    /**
     * GET: usuario/regulacao/add-paciente-casa/(:num)
     */
    public function index(int $paciente_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id' => $paciente_id])[0];
        $this->usuario_view('Addpacientecasa_view', $data);
    }

    /**
     * POST: regulacao/add-paciente-casa-save/add-paciente-casa
     */
    public function save(): void
    {
        $dados = $this->input->post();
        $this->Casa_de_apoio->insert($dados);

        $this->session->set_flashdata('success', 'Paciente adicionado à casa de apoio.');
        redirect('usuario/regulacao/casa-de-apoio');
    }
}
