<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Municipios_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'Configurar Municipios';
        $data['municipios'] = $this->Municipios->getAll();
        $this->view('configuracoes/Municipios_view', $data);
    }

    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Municipios->insert($dados);

        $this->session->set_flashdata('success', 'Municipio adicionado ao sistema com sucesso.');
        redirect($this->agent->referrer());
    }

}
