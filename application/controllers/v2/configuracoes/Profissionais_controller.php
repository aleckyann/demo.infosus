<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profissionais_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Configurar profissionais';
        $data['profissionais'] = $this->Profissionais->getAll();
        $this->view('configuracoes/Profissionais_view', $data);
    }

    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Profissionais->insert($dados);

        $this->session->set_flashdata('success', 'PROFISSIONAL ADICIONADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
