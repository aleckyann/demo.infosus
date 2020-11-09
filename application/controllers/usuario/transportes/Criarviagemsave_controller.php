<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Criarviagemsave_controller extends Sistema_Controller {

    public function index(){


    	if ($this->input->post('percurso') == 'Ida' || $this->input->post('percurso') == 'Volta') {
	        $dados_poltrona = json_encode($this->input->post('poltronas_json'));
	        $veiculo_id = $this->input->post('veiculo_id');
	        $data = $this->input->post('data');
	        $realizada = $this->input->post('realizada');
	        $percurso = $this->input->post('percurso');



	        $this->Dashboard_model->criar_viagem($veiculo_id, $dados_poltrona, $data, $realizada, $percurso);

	        $this->session->set_flashdata('viagem-criar', 'Viagem cadastrada com sucesso!');
	        redirect('usuario/transportes/viagens');
        }

        if ($this->input->post('percurso') == 'Ida e Volta') {
	        $dados_poltrona = json_encode($this->input->post('poltronas_json'));
	        $veiculo_id = $this->input->post('veiculo_id');
	        $data = $this->input->post('data');
	        $realizada = $this->input->post('realizada');
	        $percurso = $this->input->post('percurso');



	        $this->Dashboard_model->criar_viagem($veiculo_id, $dados_poltrona, $data, $realizada, 'Ida');
	        $this->Dashboard_model->criar_viagem($veiculo_id, $dados_poltrona, $data, $realizada, 'Volta');

	        $this->session->set_flashdata('viagem-criar', 'Viagem cadastrada com sucesso!');
	        redirect('usuario/transportes/viagens');
        }

    }
}