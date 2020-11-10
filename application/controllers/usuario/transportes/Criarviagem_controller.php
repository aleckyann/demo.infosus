<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Criarviagem_controller extends Sistema_Controller
{

    /**
     * GET: usuario/transportes/criar-viagem/(:num)
     */
    public function index(int $veiculo_id): void
    {
        $data['especialidades'] = $this->Especialidades->getAll();
        $data['veiculo'] = $this->Veiculos->getAll(['veiculo_id' => $veiculo_id])[0];
        $this->usuario_view('Criarviagem_view', $data);
    }
}
