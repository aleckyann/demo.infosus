<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Baixapacientetfdmanga_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->get();
        $this->Dashboard_model->baixa_paciente_tfd_manga($dados['realizado']);

        redirect('usuario/regulacao/fila-tfd');
    }
}