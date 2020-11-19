<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cadastratfd_controller extends Sistema_Controller {

    /**
     * POST: /usuario/regulacao/cadastra-tfd
     */
    public function index(){
        $dados = $this->input->post();
        $this->Tfd->insert($dados);
        $this->session->set_flashdata('success', 'TFT cadastrado com sucesso.');
        redirect('usuario/regulacao/fila-tfd');
    }
}