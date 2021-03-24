<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Veiculos_controller extends Sistema_Controller
{

    /**
     * GET: v2/transporte/veiculos
     */
    public function index(): void
    {
        $data['title'] = 'Veículos cadastrados';
        $data['veiculos'] = $this->Veiculos->getAll();
        $this->view('transportes/Veiculos_view', $data);
    }

    /**
     * POST: v2/transporte/veiculos/novo
     */
    public function novo(): void
    {
        $veiculo = $this->input->post();
        $this->Veiculos->insert($veiculo);

        $this->session->set_flashdata('success', 'VEÍCULO CADASTRADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/transporte/veiculos/editar
     */
    public function editar(): void
    {
        $veiculo = $this->input->post();
        $this->Veiculos->update(
            ['veiculo_id'=>$veiculo['veiculo_id']],
            $veiculo
        );

        $this->session->set_flashdata('success', 'VEÍCULO ATUALIZADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }

}
