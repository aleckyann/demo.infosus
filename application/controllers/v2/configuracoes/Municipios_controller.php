<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Municipios_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'Configurar Municipios';
        $data['municipios'] = $this->Municipios->getAll();
        $this->view('configuracoes/Municipios_view', $data);
    }
}
