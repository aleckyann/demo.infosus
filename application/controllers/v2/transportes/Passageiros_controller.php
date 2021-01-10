<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Passageiros_controller extends Sistema_Controller
{

    /**
     * POST: v2/
     */
    public function update_passageiros(): void
    {
        $passageiros = $this->input->post('passageiro');
        $passageiro_viagem_id = $this->input->post('passageiro_viagem_id');

        foreach ($passageiros as $passageiro) {
            $passageiro_id = array_search($passageiro, $passageiros);
            $this->Passageiros->update(
                [
                    'passageiro_viagem_id' => $passageiro_viagem_id,
                    'passageiro_id' => $passageiro_id
                ],
                ['passageiro_paciente_id' => $passageiro]
            );
        }
        
        $this->session->set_flashdata('success', 'PASSAGEIROS ATUALIZADO NA VIAGEM.');
        redirect($this->agent->referrer());
    }
}
