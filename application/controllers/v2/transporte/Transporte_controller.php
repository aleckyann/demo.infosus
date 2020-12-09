<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Transporte_controller extends Sistema_Controller
{

    /**
     * GET: v2/transporte/veiculos
     */
    public function veiculos(): void
    {
        $data['title'] = 'Veículos cadastrados';
        $data['pacientes'] = $this->Pacientes->getAll();
        $this->view('transporte/Veiculos_view', $data);
    }
    /**
     * GET: v2/transporte/viagens
     */
    public function viagens(): void
    {
        $data['title'] = 'Viagens cadastradas';
        $data['pacientes'] = $this->Pacientes->getAll();
        $this->view('transporte/Viagens_view', $data);
    }


    public function nova_viagem(): void
    {
    }

}
