<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Viagens_controller extends Sistema_Controller
{

    public function json(): void
    {
        $viagem_id = $this->input->post('viagem_id');
        
        $this->db->select('viagens.*, veiculos.*, m1.nome_municipio as origem, m2.nome_municipio as destino');
        $this->db->join('veiculos', 'veiculos.veiculo_id = viagens.viagem_veiculo_id');
        $this->db->join('municipios_ibge m1', 'viagens.viagem_origem = m1.municipio_id');
        $this->db->join('municipios_ibge m2', 'viagens.viagem_destino = m2.municipio_id');
        $resultado = $this->db
        // ->join('veiculo', ['pacientes.paciente_id = '])
        ->get_where('viagens', ['viagem_id'=>$viagem_id])->row_array();
        $this->output
            ->set_content_type('application/json')
            ->set_output(
                json_encode(
                    $resultado
                )
            );
    }
}
