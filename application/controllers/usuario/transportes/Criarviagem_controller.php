<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Criarviagem_controller extends Sistema_Controller
{

    /**
     * GET: usuario/transportes/criar-viagem/(:num)
     */
    public function index(int $veiculo_id): void
    {
        $data['especialidades'] = $this->Especialidades->getAll();
        $data['veiculo'] = $this->Veiculos->getAll(['veiculo_id' => $veiculo_id])[0];
        $this->usuario_view('Criarviagem_view', $data);
    }

    /**
     * POST: usuario/transportes/criar-viagem/(:num)
     */
    public function criar()
    {

        pre($this->input->post());
        if ($this->input->post('percurso') == 'Ida' || $this->input->post('percurso') == 'Volta') {
            $dados_poltrona = json_encode($this->input->post('poltronas_json'));
            $veiculo_id = $this->input->post('veiculo_id');
            $data = $this->input->post('data');
            $realizada = $this->input->post('realizada');
            $percurso = $this->input->post('percurso');



            $this->Dashboard_model->criar_viagem($veiculo_id, $dados_poltrona, $data, $realizada, $percurso);

            $this->session->set_flashdata('success', 'Viagem cadastrada com sucesso!');
            // redirect('usuario/transportes/viagens');
        }

        if ($this->input->post('percurso') == 'Ida e Volta') {
            $dados_poltrona = json_encode($this->input->post('poltronas_json'));
            $veiculo_id = $this->input->post('veiculo_id');
            $data = $this->input->post('data');
            $realizada = $this->input->post('realizada');
            $percurso = $this->input->post('percurso');



            $this->Dashboard_model->criar_viagem($veiculo_id, $dados_poltrona, $data, $realizada, 'Ida');
            $this->Dashboard_model->criar_viagem($veiculo_id, $dados_poltrona, $data, $realizada, 'Volta');

            $this->session->set_flashdata('success', 'Viagem cadastrada com sucesso!');
            // redirect('usuario/transportes/viagens');
        }
    }
}
