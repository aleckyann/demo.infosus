<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Historico_controller extends Sistema_Controller
{

    /**
     * GET: v2/almoxarifado/historico
     */
    public function index(): void
    {
        $data['title'] = 'Histórico de almoxarifado';
        $data['historico'] = $this->Historico_almoxarifado->getAll();
        $this->view('almoxarifado/Historico_view', $data);
    }

}
