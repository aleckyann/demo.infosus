<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Criarviagem_controller extends Sistema_Controller
{

    /**
     * Exibe as viagens
     * GET: usuario/transportes/criar-viagem/(:num)
     */
    public function index(int $veiculo_id): void
    {
        $data['especialidades'] = $this->Especialidades->getAll();
        $data['veiculo'] = $this->Veiculos->getAll(['veiculo_id' => $veiculo_id])[0];
        $this->usuario_view('Criarviagem_view', $data);
    }

    /**
     * Cria uma nova viagem
     * POST: usuario/transportes/criar-viagem/(:num)
     */
    public function criar(): void
    {
        $dados = $this->input->post(['data', 'veiculo_id', 'poltronas_json', 'realizada', 'percurso']);
        $dados['poltrona_json'] = json_encode($dados['poltrona_json']);

        if ($dados['percurso'] == 'Ida' || $dados['percurso'] == 'Volta') {
            $this->Viagens->insert($dados);
        } else {
            $dados['percurso'] = 'Ida';
            $this->Viagens->insert($dados);
            $dados['percurso'] = 'Volta';
            $this->Viagens->insert($dados);
        }

        $this->session->set_flashdata('success', 'Viagem cadastrada com sucesso!');
        redirect('usuario/transportes/viagens');
    }
}
