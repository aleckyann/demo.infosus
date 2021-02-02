<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estoques_controller extends Sistema_Controller
{


    public function index(int $almoxarifado_id): void
    {
        $data['title'] = 'Estoques';
        $data['almoxarifado'] = $this->Almoxarifados->getAll(['almoxarifado_id' => $almoxarifado_id])[0];
        $data['estoques'] = $this->db->join('produtos', 'produtos.produto_id = estoques.estoque_produto_id')->get_where('estoques', ['estoque_almoxarifado_id' => $almoxarifado_id])->result_array();

        $this->view('almoxarifado/Estoques_view', $data);
    }

    public function novo(int $almoxarifado_id): void
    {
        $estoque = $this->input->post();
        $estoque['estoque_almoxarifado_id'] = $almoxarifado_id;
        $this->Estoques->insert($estoque);

        $this->session->set_flashdata('success', 'PRODUTO ADICIONADO AO ESTOQUE.');
        redirect($this->agent->referrer());
    }
}
