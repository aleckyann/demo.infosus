<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard_controller extends Sistema_Controller
{


    public function index(): void
    {
        $dados['procedimentos'] =
        [
            'fila' => $this->db->get_where('procedimentos', ['realizado' => '', 'data' => NULL])->num_rows(),
            'agendados' =>$this->db->get_where('procedimentos', ['realizado'=>'', 'data !='=>NULL])->num_rows(),
            'realizados' =>$this->db->get_where('procedimentos', ['realizado !='=> ''])->num_rows(),
            'negados' =>$this->db->get_where('procedimentos', ['negado_por !='=>''])->num_rows()
        ];

        $dados['tfd'] =
        [
            'fila' => $this->db->get_where('tfd', ['tfd_realizado' => NULL, 'tfd_data_atendimento' => NULL])->num_rows(),
            'agendados' => $this->db->get_where('tfd', ['tfd_realizado' => NULL, 'tfd_data_atendimento !=' => NULL])->num_rows(),
            'realizados' => $this->db->get_where('tfd', ['tfd_realizado !=' => ''])->num_rows(),
            'negados' => $this->db->get_where('tfd', ['tfd_negado_por !=' => ''])->num_rows()
        ];

        $dados['viagens'] =
        [
            'agendadas' => $this->db->get_where('viagens', ['viagem_realizada' => NULL, 'deleted_at' => NULL])->num_rows(),
            'realizadas' => $this->db->get_where('viagens', ['viagem_realizada !=' => NULL])->num_rows(),
            'canceladas' => $this->db->get_where('viagens', ['deleted_at' => NULL])->num_rows(),
        ];
        $this->view('dashboard/Dashboard_view', $dados);
    }
}
