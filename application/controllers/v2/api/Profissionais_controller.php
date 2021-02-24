<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Profissionais_controller extends Sistema_Controller
{

    public function json(): void
    {
        $profissional_nome = $this->input->post('profissional_nome');
        $resultado = $this->db->select('profissional_id id, profissional_nome text')->like(['profissional_nome' => $profissional_nome])->get('profissionais')->result_array();

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
}
