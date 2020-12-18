<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Procedimentos_controller extends Sistema_Controller
{


    public function index(): void
    {
        $data['title'] = 'Configurar procedimentos';
        $data['procedimentos'] = $this->Tabela_proced->getAll();
        $this->view('configuracoes/Procedimentos_view', $data);
    }
}
