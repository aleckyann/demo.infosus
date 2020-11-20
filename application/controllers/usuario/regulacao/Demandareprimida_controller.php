<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Demandareprimida_controller extends Sistema_Controller
{

    /**
     * GET: usuario/regulacao/lista-demanda-reprimida
     */
    public function index()
    {
        $dados = $this->input->post();
        $data['demanda_reprimida'] = $this->Procedimentos->porPaciente([
            'data<='    => $dados['data_inicio'] ?? '0001-01-01',
            'data>='    => $dados['data_fim'] ?? '3000-01-01',
            'realizado' => 'nao'
        ]);
        $this->usuario_view('Demandareprimida_view', $data);
    }
}
