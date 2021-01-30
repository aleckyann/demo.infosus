<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tfd_controller extends Sistema_Controller
{

    /**
     * POST: v2/api/tfd/json
     */
    public function json(): void
    {
        $tfd_id = $this->input->post('tfd_id');

        $this->db->join('pacientes', 'tfd.paciente_id =  pacientes.paciente_id');
        $this->db->join('estabelecimentos', 'estabelecimentos.estabelecimento_id =  tfd.tfd_estabelecimento_solicitante');
        $this->db->join('municipios_ibge', 'municipios_ibge.municipio_id =  tfd.tfd_cidade_destino');
        $resultado = $this->db
            ->get_where('tfd', ['tfd_id' => $tfd_id])->row_array();
        $this->output
            ->set_content_type('application/json')
            ->set_output(
                json_encode(
                    $resultado
                )
            );
    }
}
