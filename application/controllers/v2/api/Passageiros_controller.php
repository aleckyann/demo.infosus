<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Passageiros_controller extends Sistema_Controller
{

    public function json(): void
    {
        $viagem_id = $this->input->post('viagem_id');
        
        $resultado['viagem'] = $this->db
        ->join('veiculos', 'veiculos.veiculo_id = viagens.viagem_veiculo_id')
        ->get_where('viagens', ['viagem_id'=>$viagem_id])->row_array();

        $this->db->join('pacientes', 'pacientes.paciente_id = passageiros.passageiro_paciente_id', 'left');
        $this->db->join('viagens', 'viagens.viagem_id = passageiros.passageiro_viagem_id');
        $resultado['passageiros'] = $this->db
        ->get_where('passageiros', ['passageiro_viagem_id'=>$viagem_id])->result_array();
        $this->output
            ->set_content_type('application/json')
            ->set_output(
                json_encode(
                    $resultado
                )
            );
    }
}
