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

        $paciente = $this->Pacientes->getAll(['paciente_id'=>$dados['paciente_id']])[0];
        $this->sms->enviar(
            $paciente['telefone_paciente'], 
            'SECRETARIA DE SAUDE: '. explode(' ', $paciente['nome_paciente'])[0] .', ACABAMOS DE ADICIONAR A SUA SOLICITACAO DE PROCEDIMENTO EM NOSSA FILA.'
        );
        $this->whatsapp->enviar(
            $paciente['telefone_paciente'],
            'Olá ' . explode(' ', $paciente['nome_paciente'])[0] . '. n A nossa equipe da secretaria de saúde acabou de adicionar a sua solicitação de procedimento em nossa fila. \n\n Estamos trabalhando para que possamos agendar o seu procedimento o mais rápido possível! *A GENTE VAI TE AVISAR POR AQUI ASSIM QUE O SEU PROCEDIMENTO FOR AGENDADO!*'
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> PROCEDIMENTO ADICIONADO A FILA COM SUCESSO.');
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
        
        $paciente_id = $this->db->get_where('procedimentos', ['procedimentos_id'=>$dados['procedimentos_id']])->row_array()['paciente_id'];
        $paciente = $this->Pacientes->getAll(['paciente_id' => $paciente_id])[0];
        $this->sms->enviar(
            $paciente['telefone_paciente'],
            'SECRETARIA DE SAUDE: ' . explode(' ', $paciente['nome_paciente'])[0] . ', ACABAMOS DE AGENDAR O SEU PROCEDIMENTO PARA O DIA: '. date_format(date_create($dados['data']), 'd/m/Y')
        );
        $this->whatsapp->enviar(
            $paciente['telefone_paciente'],
            'Olá ' . explode(' ', $paciente['nome_paciente'])[0] . '. O seu procedimento foi agendado para o dia: '. date_format(date_create($dados['data']), 'd/m/Y')
        );

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> PROCEDIMENTO AGENDADO COM SUCESSO');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/procedimentos/negar
     */
    public function negar(): void
    {
        $dados = $this->input->post();
        $this->Procedimentos->negar($dados['procedimentos_id'], $dados['negado_por']);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> PROCEDIMENTO NEGADO COM SUCESSO.');
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
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> PROCEDIMENTO CONCLUÍDO COM SUCESSO.');
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

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> PROCEDIMENTO ATUALIZADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }


    /**
     * GET: v2/regulacao/procedimentos/agendados
     * DB: procedimentos.realizado = 'sim'
     */
    public function agendados(): void
    {
        $dados['title'] = 'Procedimentos agendados';
        $dados['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL]);

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
