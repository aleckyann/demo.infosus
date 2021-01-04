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
        $this->view('transporte/Veiculos_view', $data);
    }

    /**
     * POST: v2/transporte/veiculos/novo
     */
    public function novo(): void
    {
        $veiculo = $this->input->post();
        $this->Veiculos->insert($veiculo);

        $this->session->set_flashdata('success', 'Veículo cadastrado com sucesso!');
        redirect($this->agent->referrer());
    }

}
