<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Procedimentos_controller extends Sistema_Controller
{

    /**
     * GET: v2/regulacao/procedimentos/fila
     * DB: procedimentos.realizado = '' 
     */
    public function fila(): void
    {
        $dados['title'] = 'Procedimentos na fila';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => '']);

        $this->view('regulacao/procedimentos_diversos/Fila_view', $dados);
    }


    /**
     * POST: v2/regulacao/procedimentos/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        pre($dados);
        $this->Procedimentos->insert($dados);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento adicionado À fila com sucesso');
        redirect('v2/regulacao/procedimentos/fila');
    }


    /**
     * POST: v2/regulacao/procedimentos/agendar
     */
    public function agendar(): void
    {
        $dados = $this->input->post();
        pre($dados);
        // $this->Procedimentos->insert($dados);

        // $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento agendado com sucesso');
        // redirect('v2/regulacao/procedimentos/fila');
    }


    /**
     * GET: v2/regulacao/procedimentos/reprimir/(:num)
     */
    public function reprimir(int $procedimento_id): void
    {
        $this->Procedimentos->update(
            [
                'procedimentos_id' => $procedimento_id
            ],
            [
                'realizado'=>'nao'
            ],
        );

        $this->session->set_flashdata('danger', '<i class="far fa-check-circle"></i> Procedimento reprimido com sucesso');
        redirect('v2/regulacao/procedimentos/fila');
    }
    

    /**
     * GET: v2/regulacao/procedimentos/agendados
     * DB: procedimentos.realizado = 'sim'
     */
    public function agendados(): void
    {
        $dados['title'] = 'Procedimentos agendados';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => 'sim']);

        $this->view('regulacao/procedimentos_diversos/Agendados_view', $dados);
    }


    /**
     * GET: v2/regulacao/procedimentos/reprimidos
     * DB: procedimentos.realizado = 'nao'
     */
    public function reprimidos(): void
    {
        $dados['title'] = 'Procedimentos reprimidos';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => 'nao']);

        $this->view('regulacao/procedimentos_diversos/Reprimidos_view', $dados);
    }


    /**
     * GET: v2/regulacao/procedimentos/realizados
     * DB: procedimentos.estabelecimento_prestados =! ''
     */
    public function realizados(): void
    {
        $dados['title'] = 'Procedimentos realizados';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['estabelecimento_prestador !=' => '']);

        $this->view('regulacao/procedimentos_diversos/Realizados_view', $dados);
    }

    
}
