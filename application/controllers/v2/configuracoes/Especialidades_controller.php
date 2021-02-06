<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Especialidades_controller extends Sistema_Controller
{

    /**
     * GET: v2/configuracoes/especialidades
     */
    public function index(): void
    {
        $data['title'] = 'Configurar Especialidades';
        $data['especialidades'] = $this->Especialidades->getAll();
        $this->view('configuracoes/Especialidades_view', $data);
    }

    /**
     * POST: v2/configuracoes/especialidades/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Especialidades->insert($dados);

        $this->session->set_flashdata('success', 'Especialidade adicionada ao sistema com sucesso.');
        redirect($this->agent->referrer());
    }
}
