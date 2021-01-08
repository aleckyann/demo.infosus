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
        $data['viagens'] = $this->Viagens->getAll(['viagem_realizada' => NULL, 'deleted_at' => NULL]);
        $this->view('transporte/Viagens_agendadas_view', $data);
    }

    /**
     * GET: v2/transporte/viagens/realizadas
     */
    public function viagens_realizadas(): void
    {
        $data['title'] = 'Viagens realizadas';
        $data['viagens'] = $this->Viagens->getAll(['viagem_realizada !='=>NULL, 'deleted_at'=>NULL]);
        $this->view('transporte/Viagens_realizadas_view', $data);
    }


    public function novo(): void
    {
        $viagem = $this->input->post();
        $this->Viagens->insert($viagem);

        $this->session->set_flashdata('success', 'VIAGEM CRIADA COM SUCESSO.    ');
        redirect($this->agent->referrer());
    }


    public function editar(): void
    {
        $viagem = $this->input->post();
        $this->Viagens->update(
            ['viagem_id'=>$viagem['viagem_id']],
            $viagem
        );

        $this->session->set_flashdata('success', 'VIAGEM EDITADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }

    /**
     * GET: 
     */
    public function cancelar(int $viagem_id): void
    {
        $this->Viagens->update(
            ['viagem_id' => $viagem_id],
            ['deleted_at'=>date('Y-m-d H:i:s')]
        );
        //FOREACH PARA CANCELAR PACIENTES DESTA VIAGEM
        $this->session->set_flashdata('success', 'VIAGEM CANCELADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }

    /**
     * GET: 
     */
    public function finalizar(int $viagem_id): void
    {
        $this->Viagens->update(
            ['viagem_id' => $viagem_id],
            ['viagem_realizada'=> date('Y-m-d H:i:s')]
        );

        $this->session->set_flashdata('success', 'VIAGEM FINALIZADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }

}
