<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Procedimentos_controller extends Sistema_Controller
{

    /**
     * GET: v2/configuracoes/procedimentos
     */
    public function index(): void
    {
        $data['title'] = 'Configurar procedimentos';
        $data['procedimentos'] = $this->Tabela_proced->getAll();
        $this->view('configuracoes/Procedimentos_view', $data);
    }

    /**
     * POST: v2/configuracoes/procedimentos/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Tabela_proced->insert($dados);

        $this->session->set_flashdata('success', 'Procedimento adicionado ao sistema com sucesso.');
        redirect($this->agent->referrer());
    }
}
