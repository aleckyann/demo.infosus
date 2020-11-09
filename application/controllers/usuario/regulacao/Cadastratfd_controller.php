<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cadastratfd_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->cadastra_tfd($dados);

        redirect('usuario/regulacao/fila-tfd');
    }
}