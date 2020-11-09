<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Atualizardatascasasave_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->atualizar_datas_casa($dados);

        redirect('usuario/regulacao/casa-de-apoio');
    }
}