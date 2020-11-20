<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Passageiros_controller extends Sistema_Controller
{

    public function index(int $viagem_id): void
    {
        $data['poltronas'] = $this->Viagens->getAll(['viagem_id' => $viagem_id])[0]['poltronas_json'];
        $this->usuario_view('Passageiros_view', $data);
    }
}
