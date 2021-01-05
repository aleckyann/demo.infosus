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


    public function novo(): void
    {
        $viagem = $this->input->post();
        $this->Viagens->insert($viagem);

        $this->session->set_flashdata('success', 'Viagem criada com sucesso!');
        redirect($this->agent->referrer());
    }


    public function editar(): void
    {
        $viagem = $this->input->post();
        $this->Viagens->update(
            ['viagem_id'=>$viagem['viagem_id']],
            $viagem
        );

        $this->session->set_flashdata('success', 'Viagem criada com sucesso!');
        redirect($this->agent->referrer());
    }

}
