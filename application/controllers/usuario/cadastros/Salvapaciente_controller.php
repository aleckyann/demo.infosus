<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Salvapaciente_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->salva_paciente($dados);

        redirect('usuario/regulacao/lista-pacientes');
    }
}