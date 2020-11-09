<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cadastratfdmanga_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->cadastra_tfd_manga($dados);

        redirect('usuario/regulacao/fila-tfd');
    }
}