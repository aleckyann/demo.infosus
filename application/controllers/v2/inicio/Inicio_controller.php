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

        // $dados['viagens'] =
        // [
        //     'agendadas' => $this->db->get_where('viagens', ['viagem_realizada' => NULL, 'deleted_at' => NULL])->num_rows(),
        //     'realizadas' => $this->db->get_where('viagens', ['viagem_realizada !=' => NULL])->num_rows(),
        //     'canceladas' => $this->db->get_where('viagens', ['deleted_at !=' => NULL])->num_rows(),
        // ];
        $this->view('inicio/Inicio_view', $dados);
    }
}
