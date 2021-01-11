<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Veiculos_controller extends Sistema_Controller
{

    public function json(): void
    {
        $veiculo_id = $this->input->post('veiculo_id');
        
        $resultado = $this->db
        ->get_where('veiculos', ['veiculo_id'=>$veiculo_id])->row_array();
        $this->output
            ->set_content_type('application/json')
            ->set_output(
                json_encode(
                    $resultado
                )
            );
    }
}
