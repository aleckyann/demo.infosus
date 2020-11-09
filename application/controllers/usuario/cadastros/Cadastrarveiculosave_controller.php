<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cadastrarveiculosave_controller extends Sistema_Controller {

    public function index(){
        $dados = $this->input->post();
        $this->Dashboard_model->cadastra_veiculo($dados);
        $this->session->set_flashdata('veiculo-cadastra', 'Veículo cadastrado com sucesso!');
        redirect('usuario/transportes/veiculos');
    }
}