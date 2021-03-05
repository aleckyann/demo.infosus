<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tabela_proced_controller extends Sistema_Controller
{

    public function select2(): void
    {
        $nome = $this->input->post('procedimento_nome');
        $resultado = $this->db->select('id id, nome text')->like(['procedimento_nome' => $nome])->get('tabela_proced')->result_array();

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($resultado));
    }
}
