<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tfd_controller extends Sistema_Controller
{

    /**
     * GET: v2/regulacao/tfd/fila
     * DB: tfd.realizado = '' 
     */
    public function fila(): void
    {
        $dados['title'] = 'Tfd na fila';
        $dados['tfd'] = $this->Tfd->porPaciente(['realizado' => '', 'data' => NULL]);

        $this->view('regulacao/tfd/Fila_view', $dados);
    }


    /**
     * POST: v2/regulacao/tfd/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Tfd->insert($dados);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento adicionado À fila com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/tfd/agendar
     */
    public function agendar(): void
    {
        $dados = $this->input->post();
        $this->Tfd->update(
            [
                'tfd_id' => $dados['tfd_id']
            ],
            $dados
        );

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento agendado com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/tfd/reprimir
     */
    public function reprimir(): void
    {
        $dados = $this->input->post();
        $this->Tfd->update(
            [
                'tfd_id' => $dados['tfd_id']
            ],
            [
                'realizado' => 'nao',
                'reprimido_por' => $dados['reprimido_por']
            ],
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento reprimido com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/tfd/concluir/(:num)
     */
    public function concluir(int $procedimento_id): void
    {
        $this->Tfd->update(
            [
                'tfd_id' => $procedimento_id
            ],
            [
                'realizado' => 'sim'
            ],
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento concluido com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/tfd/editar/
     */
    public function editar(): void
    {
        $dados = $this->input->post();
        $dados['procedimento_risco'] = $dados['editar_procedimento_risco'];
        unset($dados['editar_procedimento_risco']);

        $this->Tfd->update(
            [
                'tfd_id' => $dados['tfd_id']
            ],
            $dados
        );

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Procedimento atualizado com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * GET: v2/regulacao/tfd/agendados
     * DB: tfd.realizado = 'sim'
     */
    public function agendados(): void
    {
        $dados['title'] = 'Tfd agendados';
        $dados['tfd'] = $this->Tfd->porPaciente(['realizado' => '', 'data !=' => NULL]);

        $this->view('regulacao/tfd/Agendados_view', $dados);
    }


    /**
     * GET: v2/regulacao/tfd/reprimidos
     * DB: tfd.realizado = 'nao'
     */
    public function reprimidos(): void
    {
        $dados['title'] = 'Tfd reprimidos';
        $dados['tfd'] = $this->Tfd->porPaciente(['realizado' => 'nao']);

        $this->view('regulacao/tfd/Reprimidos_view', $dados);
    }


    /**
     * GET: v2/regulacao/tfd/realizados
     * DB: tfd.estabelecimento_prestados =! ''
     */
    public function realizados(): void
    {
        $dados['title'] = 'Tfd realizados';
        $dados['tfd'] = $this->Tfd->porPaciente(['estabelecimento_prestador !=' => '']);

        $this->view('regulacao/tfd/Realizados_view', $dados);
    }

    public function jsonOne(int $tfd_id): void
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Tfd->porPaciente(['tfd_id' => $tfd_id])[0]));
    }
}
