<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Matricula_controller extends CI_Controller {


    public function index()
    {   
        $dados = $this->input->post();
        $this->Dashboard_model->matricula($dados['usuario_id'], $dados['treinamento_id']);
        $treinamento_id = $dados['treinamento_id'];

        redirect('usuario/aula/'.$treinamento_id);

    }


}