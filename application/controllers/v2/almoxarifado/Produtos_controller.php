<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Produtos_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'produtos';
        $data['produtos'] = $this->Produtos->getAll();
        $this->view('almoxarifado/Produtos_view', $data);
    }

    public function novo(): void
    {
        $produto = $this->input->post();
        $this->Produtos->insert($produto);

        $this->session->set_flashdata('success', 'PRODUTO ADICIONADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
