<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_controller extends Sistema_Controller
{

    public function json(): void
    {

        $where = $this->input->post() ?? [];
        
        $resultado = $this->db->join('estoques', 'produtos.produto_estoque_id = estoques.estoque_id')->get_where('produtos', $where)->result_array();
        
        if (count($resultado) == 1) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($resultado[0]));
        } elseif (count($resultado) > 1) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($resultado));
        } else {
            show_404();
        }
    }

}
