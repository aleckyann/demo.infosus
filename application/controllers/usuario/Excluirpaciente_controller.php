<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Excluirpaciente_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->get();
        $this->Dashboard_model->excluir_paciente($dados['id']);

        redirect('usuario/regulacao/lista-pacientes');
    }
}