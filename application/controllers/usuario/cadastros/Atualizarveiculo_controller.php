<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Atualizarveiculo_controller extends Sistema_Controller
{

    public function index(int $veiculo_id): void
    {
        $data['veiculo'] = $this->Veiculos->getAll(['veiculo_id' => $veiculo_id])[0];
        $this->usuario_view('Atualizarveiculo_view', $data);
    }
}
