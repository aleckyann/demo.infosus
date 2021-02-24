<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cotas_controller extends Sistema_Controller
{

    public function json(): void
    {
        $cota_nome = $this->input->post('cota_nome');
        $resultado = $this->db->select('cota_id id, cota_nome text')->like(['cota_nome' => $cota_nome])->get('cotas')->result_array();

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
