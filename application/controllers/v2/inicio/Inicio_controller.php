<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Inicio_controller extends Sistema_Controller
{

    /**
     * GET: v2/dashboard
     */
    public function index(): void
    {

        $dados['title'] = 'Página inicial!';

        $dados['procedimentos'] =
        [
            'fila' => $this->db->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' =>$this->db->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' =>$this->db->get_where('procedimentos', ['realizado'=> 'sim'])->num_rows(),
            'negados' =>$this->db->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];

        $dados['tfd'] =
        [
            'fila' => $this->db->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $dados['viagens'] =
        [
            'agendadas' => $this->db->get_where('viagens', ['viagem_realizada' => NULL, 'deleted_at' => NULL])->num_rows(),
            'realizadas' => $this->db->get_where('viagens', ['viagem_realizada !=' => NULL])->num_rows(),
            'canceladas' => $this->db->get_where('viagens', ['deleted_at !=' => NULL])->num_rows(),
        ];
        $this->view('inicio/Inicio_view', $dados);
    }
}
