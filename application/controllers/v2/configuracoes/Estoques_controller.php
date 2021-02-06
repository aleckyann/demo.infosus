<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estoques_controller extends Sistema_Controller
{

    /**
     * GET: v2/
     */
    public function index(): void
    {
        $data['title'] = 'Configurar estoques';
        $data['estoques'] = $this->Estoques->getAll();
        $this->view('configuracoes/Estoques_view', $data);
    }

    /**
     * GET: v2/
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Estoques->insert($dados);

        $this->session->set_flashdata('success', 'ESTOQUE ADICIONADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
