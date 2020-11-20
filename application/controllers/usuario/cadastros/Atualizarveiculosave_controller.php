<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Atualizarveiculosave_controller extends Sistema_Controller
{

    public function index()
    {
        $dados = $this->input->post();
        $this->Dashboard_model->atualiza_veiculo($dados);

        $this->session->set_flashdata('veiculo-edita', 'Dados do veículo atualizados com sucesso!');
        redirect('usuario/transportes/veiculos');
    }
}
