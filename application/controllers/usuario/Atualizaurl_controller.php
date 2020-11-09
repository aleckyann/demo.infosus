<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Atualizaurl_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->atualiza_url($dados);

        redirect('usuario/url');
    }
}