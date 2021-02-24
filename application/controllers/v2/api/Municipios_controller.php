<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Municipios_controller extends Sistema_Controller
{

    public function select2(): void
    {
        $nome = $this->input->post('nome_municipio');
        $resultado = $this->db->select('municipio_id id, nome_municipio text')->like(['nome_municipio' => $nome])->get('municipios_ibge')->result_array();

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


    public function json(): void
    {
        $nome = $this->input->post('nome_municipio');
        $resultado = $this->db->select('municipio_id id, nome_municipio text')->like(['nome_municipio' => $nome])->get('municipios_ibge')->result_array();

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
