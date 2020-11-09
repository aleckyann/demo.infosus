<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Editapaciente_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->edita_paciente($dados);

        redirect('usuario/regulacao/lista-pacientes');
    }
}