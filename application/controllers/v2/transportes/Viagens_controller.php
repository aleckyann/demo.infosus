<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Viagens_controller extends Sistema_Controller
{

    /**
     * GET: v2/transporte/veiculos
     */
    public function index(): void
    {
        $data['title'] = 'Veículos cadastrados';
        $data['pacientes'] = $this->Viagens->getAll();
        $this->view('transporte/Veiculos_view', $data);
    }

    /**
     * GET: v2/transporte/viagens/agendadas
     */
    public function viagens_agendadas(): void
    {
        $data['title'] = 'Viagens agendadas';
        $data['viagens'] = $this->Viagens->getAll(['viagem_realizada' => NULL]);
        $this->view('transporte/Viagens_agendadas_view', $data);
    }

    /**
     * GET: v2/transporte/viagens/realizadas
     */
    public function viagens_realizadas(): void
    {
        $data['title'] = 'Viagens realizadas';
        $data['viagens'] = $this->Viagens->getAll(['viagem_realizada !='=>NULL]);
        $this->view('transporte/Viagens_realizadas_view', $data);
    }


    public function nova_viagem(): void
    {
        $veiculo = $this->input->post();
        $this->Veiculos->insert($veiculo);

        $this->session->set_flashdata('success', 'Veículos cadastrado com sucesso!');
        redirect($this->agent->referrer());
    }

}
