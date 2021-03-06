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

        $data['paciente'] = $this->db->get_where('pacientes', ['paciente_id'=>$paciente_id])->row_array();
        $data['procedimentos'] = $this->db
            ->join('tabela_proced', 'tabela_proced.id = procedimentos.tabela_proced_id', 'left')
            ->join('estabelecimentos', 'estabelecimentos.estabelecimento_id = procedimentos.estabelecimento_prestador', 'left')
            ->join('municipios_ibge', 'municipios_ibge.municipio_id = procedimentos.cidade_prestador', 'left')
            ->join('cotas', 'procedimentos.cota = cotas.cota_id', 'left')
            ->get_where('procedimentos', ['paciente_id'=>$paciente_id, 'realizado =' => 'sim'])->result_array();
        
        $data['tfd'] = 
        $this->db->join('estabelecimentos', 'estabelecimentos.estabelecimento_id = tfd.tfd_estabelecimento_prestador')->join('municipios_ibge', 'municipios_ibge.municipio_id = tfd.tfd_cidade_destino')->join('cotas', 'cotas.cota_id = tfd.tfd_cota')->get_where('tfd', ['paciente_id' => $paciente_id])->result_array();
        $data['passageiros'] = $this->Passageiros->getAll(['passageiro_paciente_id' => $paciente_id]);
        $data['casa'] = $this->db->get_where('casa_de_apoio', ['paciente_id' => $paciente_id])->result_array();

        $this->view('pacientes/Historicos_view', $data);
    }

}
