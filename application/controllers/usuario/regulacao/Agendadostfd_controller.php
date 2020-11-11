<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Agendadostfd_controller extends Sistema_Controller {

    public function index()
    {
        $data_inicio = $this->input->post('data_inicio') ?? '0001-01-01';
        $data_fim = $this->input->post('data_fim') ?? '3000-01-01';
        $data['procedimentos_realizados_tfd'] = $this->Tfd->porPaciente([
            'data<='    => $data_fim,
            'data>='    => $data_inicio,
            'realizado' => 'sim'
            ]);
        $this->usuario_view('Agendadostfd_view', $data);
    }

}
