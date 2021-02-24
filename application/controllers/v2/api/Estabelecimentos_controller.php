<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estabelecimentos_controller extends Sistema_Controller
{

    public function solicitantes(): void
    {
        $estabelecimento = $this->input->post('estabelecimento');
        $resultado = $this->db->select('estabelecimento_id id, estabelecimento_nome text')->like(['estabelecimento_nome' => $estabelecimento])->get_where('estabelecimentos',['estabelecimento_tipo'=>'SOLICITANTE'])->result_array();

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

    public function prestadores(): void
    {
        $estabelecimento = $this->input->post('estabelecimento');
        $resultado = $this->db->select('estabelecimento_id id, estabelecimento_nome text')->like(['estabelecimento_nome' => $estabelecimento])->get_where('estabelecimentos', ['estabelecimento_tipo' => 'PRESTADOR'])->result_array();

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
