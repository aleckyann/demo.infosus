<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Salvaprocedimento_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->salva_procedimentos($dados['nome_procedimento'], $dados['especialidade'], $dados['estabelecimento_solicitante'], $dados['profissional_solicitante'], $dados['sintomas'], $dados['paciente_id'], $dados['data_solicitacao']);

        redirect('usuario/regulacao/fila');
    }
}