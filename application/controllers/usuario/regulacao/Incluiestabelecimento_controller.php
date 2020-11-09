<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Incluiestabelecimento_controller extends Sistema_Controller {

    public function index(){

        $estabelecimento_prestador = $this->input->post('estabelecimento_prestador');
        $cidade_prestador = $this->input->post('cidade_prestador');
        $cota = $this->input->post('cota');
        $profissional_agendamento = $this->input->post('profissional_agendamento');
        $data = $this->input->post('data');
        $ponto_partida = $this->input->post('ponto_partida');
        $hora_viagem = $this->input->post('hora_viagem');
        $procedimentos_id= $this->input->post('procedimentos_id');
    	//Montagem da nova viagem
    	$dados = [
    		'paciente' => $this->input->post('paciente_id'),
    		'numero' => $this->input->post('poltrona')['numero'],
    		'ocupado' => 'sim',
            'ponto_partida' => $this->input->post('ponto_partida'),
            'hora_viagem' => $this->input->post('hora_viagem'),


    	];


    	/**
    		if(sizeof($this->input->post('')) > 1){
				//Esta enviando 2 poltronas
				$this->session->set_flashdata('', '');				
				redirect();
    		}
    	**/


    	//Busca as poltronas da viagem
        $poltronas = json_decode($this->db->select('poltronas_json')->get_where('viagens', ['viagem_id'=>$this->input->post('viagem_id')])->row_array()['poltronas_json'], true);

        //Substituindo as poltronas da viagem
        $poltronas[$dados['numero']] = $dados;

        //Formata as poltronas
        $viagemupdated = json_encode($poltronas);

        //Atualiza as poltronas
		$this->db->update('viagens', ['poltronas_json'=>$viagemupdated], ['viagem_id'=>$this->input->post('viagem_id')]);
 
        $this->Dashboard_model->atualiza_solicitacao($estabelecimento_prestador, $cidade_prestador, $cota, $profissional_agendamento, $data, $ponto_partida, $hora_viagem, $procedimentos_id);

        redirect('usuario/regulacao/fila');
    }
}