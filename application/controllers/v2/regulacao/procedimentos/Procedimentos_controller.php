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
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => '', 'data' => NULL, 'negado_por' => NULL]);

        $this->view('regulacao/procedimentos/Fila_view', $dados);
    }


    /**
     * POST: v2/regulacao/procedimentos/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Procedimentos->insert($dados);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento adicionado À fila com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/procedimentos/agendar
     */
    public function agendar(): void
    {
        $dados = $this->input->post();
        $this->Procedimentos->update(
            [
                'procedimentos_id' => $dados['procedimentos_id']
            ],
            $dados
        );

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento agendado com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/procedimentos/negar
     */
    public function negar(): void
    {
        $dados = $this->input->post();
        $this->Procedimentos->negar($dados['procedimentos_id'], $dados['negado_por']);
        
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento negado com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/procedimentos/concluir/(:num)
     */
    public function concluir(int $procedimento_id): void
    {
        $this->Procedimentos->update(
            [
                'procedimentos_id' => $procedimento_id
            ],
            [
                'realizado' => 'sim'
            ],
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento concluido com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/procedimentos/editar/
     */
    public function editar(): void
    {
        $dados = $this->input->post();
        $dados['procedimento_risco'] = $dados['editar_procedimento_risco'];
        unset($dados['editar_procedimento_risco']);

        $this->Procedimentos->update(
            [
                'procedimentos_id' => $dados['procedimentos_id']
            ],
            $dados
        );

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento atualizado com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * GET: v2/regulacao/procedimentos/agendados
     * DB: procedimentos.realizado = 'sim'
     */
    public function agendados(): void
    {
        $dados['title'] = 'Procedimentos agendados';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => '', 'data !=' => NULL, 'negado_por'=>NULL]);

        $this->view('regulacao/procedimentos/Agendados_view', $dados);
    }


    /**
     * GET: v2/regulacao/procedimentos/negados
     * DB: procedimentos.realizado = 'nao'
     */
    public function negados(): void
    {
        $dados['title'] = 'Procedimentos negados';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['negado_por !=' => NULL]);

        $this->view('regulacao/procedimentos/Negados_view', $dados);
    }


    /**
     * GET: v2/regulacao/procedimentos/realizados
     * DB: procedimentos.estabelecimento_prestados =! ''
     */
    public function realizados(): void
    {
        $dados['title'] = 'Procedimentos realizados';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => 'sim']);

        $this->view('regulacao/procedimentos/Realizados_view', $dados);
    }

    public function jsonOne(int $procedimentos_id): void
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Procedimentos->porPaciente(['procedimentos_id' => $procedimentos_id])[0]));
    }
}
