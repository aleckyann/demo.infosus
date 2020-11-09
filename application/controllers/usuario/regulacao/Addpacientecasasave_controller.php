<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Addpacientecasasave_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->add_casa_de_apoio($dados);

        redirect('usuario/regulacao/casa-de-apoio');
    }
}