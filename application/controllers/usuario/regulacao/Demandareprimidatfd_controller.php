<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Demandareprimidatfd_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data_inicio = $this->input->post('data_inicio') ?? '0001-01-01';
        $data_fim = $this->input->post('data_fim') ?? '3000-01-01';
        $data['demanda_reprimida_tfd'] = $this->Tfd->porPaciente([
            'data<='    => $data_fim,
            'data>='    => $data_inicio,
            'realizado' => ' '
        ]);
        $this->usuario_view('Demandareprimidatfd_view', $data);
    }
}
