<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Agendados_controller extends Sistema_Controller {

    /**
     * GET: usuario/regulacao/agendados
     */
    public function index()
    {
        $dados = $this->input->post();
        $data['procedimentos_realizados'] = $this->Procedimentos->porPaciente([
            'data<='    => $dados['data_inicio'] ?? '0001-01-01',
            'data>='    => $dados['data_fim'] ?? '3000-01-01',
            'realizado' => 'sim'
        ]);
        $this->usuario_view('Agendados_view', $data);
    }
}
