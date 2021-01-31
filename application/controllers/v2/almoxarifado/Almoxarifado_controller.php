<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Almoxarifado_controller extends Sistema_Controller
{

    public function novo(): void
    {
        $estoque = $this->input->post();
        $this->Almoxarifados->insert($estoque);

        $this->session->set_flashdata('success', 'ESTOQUE ADICIONADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
