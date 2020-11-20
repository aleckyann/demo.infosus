<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Casaapoio_controller extends Sistema_Controller
{

    public function index()
    {
        $data['casadeapoio'] = $this->Casa_de_apoio->porPaciente(['saiu' => 0]);
        $this->usuario_view('Casaapoio_view', $data);
    }
}
