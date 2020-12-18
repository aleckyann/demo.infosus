<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Especialidades_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'Configurar Especialidades';
        $data['especialidades'] = $this->Especialidades->getAll();
        $this->view('configuracoes/Especialidades_view', $data);
    }
}
