<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Viagens_controller extends Sistema_Controller
{

    /**
     * GET: usuario/transportes/viagens
     */
    public function index()
    {
        $data['viagens'] = $this->Viagens->porVeiculo(['realizada' => 'nao']);
        $this->usuario_view('Viagens_view', $data);
    }
}
