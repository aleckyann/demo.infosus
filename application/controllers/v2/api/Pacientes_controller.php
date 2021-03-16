<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pacientes_controller extends Sistema_Controller
{

    /**
     * POST: v2/api/pacientes/json
     */
    public function json()
    {
        $resultado = $this->db->get_where('pacientes', $this->input->post())->result_array();

        if (count($resultado) == 1) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($resultado[0]));
        } elseif (count($resultado) > 1) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($resultado));
        } else {
            show_404();
        }
    }


    public function select2(): void
    {
        $nome = $this->input->post('nome_paciente');
        $resultado = $this->db->select('paciente_id id, nome_paciente text, cpf, nascimento')->like(['nome_paciente' => $nome])->get('pacientes')->result_array();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($resultado));
    }
}
