<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Viagens_controller extends Sistema_Controller
{

    /**
     * GET: v2/transporte/veiculos
     */
    public function index(): void
    {
        $data['title'] = 'Veículos cadastrados';
        $data['pacientes'] = $this->Viagens->getAll();
        $this->view('transporte/Veiculos_view', $data);
    }

    /**
     * GET: v2/transporte/viagens/agendadas
     */
    public function viagens_agendadas(): void
    {
        $data['title'] = 'Viagens agendadas';
        $data['viagens'] = $this->Viagens->getAll(['viagem_realizada' => NULL, 'deleted_at' => NULL]);
        $this->view('transporte/Viagens_agendadas_view', $data);
    }

    /**
     * GET: v2/transporte/viagens/realizadas
     */
    public function viagens_realizadas(): void
    {
        $data['title'] = 'Viagens realizadas';
        $data['viagens'] = $this->Viagens->getAll(['viagem_realizada !='=>NULL, 'deleted_at'=>NULL]);
        $this->view('transporte/Viagens_realizadas_view', $data);
    }

    /**
     * GET: v2/transporte/viagens/canceladas
     */
    public function viagens_canceladas(): void
    {
        $data['title'] = 'Viagens canceladas';
        $data['viagens'] = $this->Viagens->getAll(['deleted_at !=' => NULL]);
        $this->view('transporte/Viagens_canceladas_view', $data);
    }


    public function novo(): void
    {
        $viagem = $this->input->post();

        $viagem_id = $this->Viagens->insert($viagem);
        
        //CRIA UM PASSAGEIRO PARA CADA VAGA NO VEÍCULO
        $veiculo = $this->Veiculos->getAll(['veiculo_id'=>$viagem['viagem_veiculo_id']]);
        for ($i=0; $i < $veiculo[0]['veiculo_vagas']; $i++) { 
            $this->db->insert(
                'passageiros', 
                ['passageiro_viagem_id'=>$viagem_id]
            );
        }

        $this->session->set_flashdata('success', 'VIAGEM CRIADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }


    public function editar(): void
    {
        $viagem = $this->input->post();
        $this->Viagens->update(
            ['viagem_id'=>$viagem['viagem_id']],
            $viagem
        );

        $this->session->set_flashdata('success', 'VIAGEM EDITADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }

    /**
     * GET: 
     */
    public function cancelar(int $viagem_id): void
    {
        $this->Viagens->update(
            ['viagem_id' => $viagem_id],
            ['deleted_at'=>date('Y-m-d H:i:s')]
        );
        //FOREACH PARA CANCELAR PACIENTES DESTA VIAGEM
        $this->session->set_flashdata('success', 'VIAGEM CANCELADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }

    /**
     * GET: 
     */
    public function finalizar(int $viagem_id): void
    {
        $this->Viagens->update(
            ['viagem_id' => $viagem_id],
            ['viagem_realizada'=> date('Y-m-d H:i:s')]
        );

        $this->session->set_flashdata('success', 'VIAGEM FINALIZADA COM SUCESSO.');
        redirect($this->agent->referrer());
    }


    /**
     * GET: v2/transportes/viagem(:num)
     */
    public function print(int $viagem_id): void
    {

        $this->db->select('viagens.*, veiculos.*, m1.nome_municipio as origem, m2.nome_municipio as destino');
        $this->db->join('veiculos', 'veiculos.veiculo_id = viagens.viagem_veiculo_id');
        $this->db->join('municipios_ibge m1', 'viagens.viagem_origem = m1.municipio_id');
        $this->db->join('municipios_ibge m2', 'viagens.viagem_destino = m2.municipio_id');
        $resultado['viagem'] = $this->db->get_where('viagens', ['viagem_id' => $viagem_id])->row_array();

        $this->db->join('pacientes', 'pacientes.paciente_id = passageiros.passageiro_paciente_id', 'left');
        $this->db->join('viagens', 'viagens.viagem_id = passageiros.passageiro_viagem_id');
        $resultado['passageiros'] = $this->db->get_where('passageiros', ['passageiro_viagem_id' => $viagem_id])->result_array();
        
        $this->load->view('v2/transporte/Impressao_view', $resultado);

    }
    
}
