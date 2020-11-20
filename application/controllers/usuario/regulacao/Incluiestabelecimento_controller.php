<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Incluiestabelecimento_controller extends Sistema_Controller
{

    public function index()
    {
        //Montagem da nova viagem
        $dados = [
            'paciente' => $this->input->post('paciente_id'),
            'numero' => $this->input->post('poltrona')['numero'],
            'ocupado' => 'sim',
            'ponto_partida' => $this->input->post('ponto_partida'),
            'hora_viagem' => $this->input->post('hora_viagem'),
        ];

        //Busca as poltronas da viagem
        $poltronas = $this->Viagens->poltronasPorViagem($this->input->post('viagem_id'));
        $poltronas = json_decode($poltronas, true);

        //Substituindo as poltronas da viagem
        $poltronas[$dados['numero']] = $dados;

        //Formata as poltronas
        $viagemupdated = json_encode($poltronas);

        //Atualiza as poltronas
        $this->Viagens->update(
            [
                'viagem_id' => $this->input->post('viagem_id')
            ],
            [
                'poltronas_json' => $viagemupdated
            ]
        );

        $this->Procedimentos->update(
            [
                'procedimentos_id' => $this->input->post('procedimentos_id')
            ],
            [
                'estabelecimento_prestador' => $this->input->post('estabelecimento_prestador'),
                'cidade_prestador' => $this->input->post('cidade_prestador'),
                'cota' => $this->input->post('cota'),
                'profissional_agendamento' => $this->input->post('profissional_agendamento'),
                'data' => $this->input->post('data'),
                'ponto_partida' => $this->input->post('ponto_partida'),
                'ponto_partida' => $this->input->post('ponto_partida'),
                'hora_vidagem' => $this->input->post('hora_vidagem'),
            ]
        );
        $this->session->set_flashdata('success', 'Solicitação atualizada com sucesso');
        redirect('usuario/regulacao/fila');
    }
}
