<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Produtos_controller extends Sistema_Controller
{

    public function json(): void
    {
        $nome = $this->input->post('produto_nome');
        $resultado = $this->db->select('produto_id id, produto_nome text')->like(['produto_nome' => $nome])->get('produtos')->result_array();
        $this->output
            ->set_content_type('application/json')
            ->set_output(
                json_encode(
                    $resultado
                )
            );
    }

}
