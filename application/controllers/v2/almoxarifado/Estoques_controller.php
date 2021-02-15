<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estoques_controller extends Sistema_Controller
{

    /**
    * GET: v2/almoxarifado/estoque/(:num)
     */
    public function index(int $estoque_id): void
    {
        $data['title'] = 'Produtos';
        $data['estoque'] = $this->Estoques->getAll(['estoque_id' => $estoque_id])[0];
        $data['produtos'] = $this->db->get_where('produtos', ['produto_estoque_id' => $estoque_id])->result_array();

        $this->view('almoxarifado/Estoques_view', $data);
    }
    
    /**
     * POST: v2/almoxarifado/estoque/
     */
    public function novo(int $estoque_id): void
    {
        $produto = $this->input->post();
        $produto['produto_estoque_id'] = $estoque_id;
        $this->Produtos->insert($produto);

        $this->session->set_flashdata('success', 'PRODUTO ADICIONADO AO ESTOQUE.');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/almoxarifado/estoque/novo
     */
    public function novo_estoque(): void
    {
        $estoque = $this->input->post();
        $this->Estoques->insert($estoque);

        $this->session->set_flashdata('success', 'ESTOQUE CRIADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }
}
