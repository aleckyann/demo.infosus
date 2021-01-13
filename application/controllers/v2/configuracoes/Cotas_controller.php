<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cotas_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'Configurar cotas';
        $data['cotas'] = $this->Cotas->getAll();
        $this->view('configuracoes/Cotas_view', $data);
    }

    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Cotas->insert($dados);

        $this->session->set_flashdata('success', 'COTA ADICIONADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
