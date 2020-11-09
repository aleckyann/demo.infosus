<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Baixapaciente_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->get();
        $this->Dashboard_model->baixa_paciente($dados['realizado']);

        redirect('usuario/regulacao/fila');
    }
}