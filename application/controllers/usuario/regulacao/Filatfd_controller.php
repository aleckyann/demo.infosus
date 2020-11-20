<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Filatfd_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['procedimentos_tfd'] = $this->Tfd->porPaciente(['realizado' => '']);
        $this->usuario_view('Filatfd_view', $data);
    }
}
