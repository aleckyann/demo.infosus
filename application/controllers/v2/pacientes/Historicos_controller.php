<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Historicos_controller extends Sistema_Controller
{

   
    /**
     * GET: v2/pacientes/historicos/(num)
     */
    public function index(int $paciente_id): void
    {
        $data['title'] = 'Histórico do paciente';
        $data['procedimentos'] = $this->db->get_where('procedimentos', ['paciente_id'=>$paciente_id])->result_array();
        $data['tfd'] = $this->db->get_where('tfd', ['paciente_id' => $paciente_id])->result_array();
        $data['viagens'] = $this->db->get_where('transporte', ['paciente_id' => $paciente_id])->result_array();
        $data['casa'] = $this->db->get_where('casa_de_apoio', ['paciente_id' => $paciente_id])->result_array();

        $this->view('pacientes/Historicos_view', $data);
    }

}
