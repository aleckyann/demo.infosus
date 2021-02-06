<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profissionais_controller extends Sistema_Controller
{

    /**
     * GET: v2/configuracoes/profissionais
     */
    public function index(): void
    {
        $data['title'] = 'Configurar profissionais';
        $data['profissionais'] = $this->Profissionais->getAll();
        $this->view('configuracoes/Profissionais_view', $data);
    }

    /**
     * POST: v2/configuracoes/profissionais/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Profissionais->insert($dados);

        $this->session->set_flashdata('success', 'PROFISSIONAL ADICIONADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
