<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Veiculos_controller extends Sistema_Controller
{

    /**
     * GET: usuario/transportes/veiculos
     */
    public function index()
    {
        $data['veiculos'] = $this->Veiculos->getAll();
        $this->usuario_view('Veiculos_view', $data);
    }
}
