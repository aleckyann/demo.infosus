<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estoques_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'Estoques';
        $data['estoques'] = $this->Estoques->getAll();
        $this->view('almoxarifado/Estoques_view', $data);
    }

    public function novo(): void
    {
        $estoque = $this->input->post();
        $this->Estoques->insert($estoque);

        $this->session->set_flashdata('success', 'ESTOQUE ADICIONADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
