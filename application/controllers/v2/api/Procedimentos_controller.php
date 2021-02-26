<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Procedimentos_controller extends Sistema_Controller
{

    /**
     * POST: v2/api/tfd/json
     */
    public function json(): void
    {

        $where = $this->input->post();

        $this->db->join('pacientes', 'procedimentos.paciente_id =  pacientes.paciente_id');
        $this->db->join('estabelecimentos', 'procedimentos.estabelecimento_solicitante =  estabelecimentos.estabelecimento_id');
        $this->db->join('profissionais', 'procedimentos.profissional_solicitante =  profissionais.profissional_id');
        $this->db->join('tabela_proced', 'procedimentos.tabela_proced_id = tabela_proced.id');
        $this->db->join('especialidades', 'procedimentos.especialidade =  especialidades.especialidades_id', 'left');

        $resultado = $this->db->get_where('procedimentos', $where)->row_array();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($resultado));
        
    }
}
