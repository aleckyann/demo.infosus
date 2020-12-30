<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estabelecimentos_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'Configurar estabelecimentos';
        $data['estabelecimentos'] = $this->Estabelecimentos->getAll();
        $this->view('configuracoes/Estabelecimentos_view', $data);
    }

    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Estabelecimentos->insert($dados);

        $this->session->set_flashdata('success', 'Especialidade adicionada ao sistema com sucesso.');
        redirect($this->agent->referrer());
    }
}
