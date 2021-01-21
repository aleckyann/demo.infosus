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
        $data['paciente'] = $this->db->get_where('pacientes',['paciente_id'=>$paciente_id])->row_array();
        $data['procedimentos'] = $this->db->get_where('procedimentos', ['paciente_id'=>$paciente_id])->result_array();
        $data['tfd'] = $this->db->get_where('tfd', ['paciente_id' => $paciente_id])->result_array();
        $data['passageiros'] = $this->Passageiros->getAll(['passageiro_paciente_id' => $paciente_id]);
        $data['casa'] = $this->db->get_where('casa_de_apoio', ['paciente_id' => $paciente_id])->result_array();
        $this->view('pacientes/Historicos_view', $data);
    }

}
