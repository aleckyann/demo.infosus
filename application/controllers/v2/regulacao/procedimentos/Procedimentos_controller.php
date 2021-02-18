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

        $notificar_whatsapp = $dados['notificar_whatsapp'];
        unset($dados['notificar_whatsapp']);

        $this->Procedimentos->insert($dados);
        
        $geral = $this->db->get('geral')->row_array();
        $procedimento = $this->db->get_where('tabela_proced',['id'=>$dados['tabela_proced_id']])->row_array();
        $paciente = $this->Pacientes->getAll(['paciente_id'=>$dados['paciente_id']])[0];
        $paciente_nome = explode(' ', $paciente['nome_paciente'])[0] .' '.explode(' ', $paciente['nome_paciente'])[1];

        //NOTIFICAÇÃO NO WHATSAPP
        if($notificar_whatsapp){
        $this->whatsapp->enviar(
            $paciente['telefone_paciente'],
            'Olá ' .$paciente_nome. ', 
Já cadastramos sua solicitação do procedimento *'.$procedimento['nome'].'* em nosso sistema. Retornaremos assim que a a nossa equipe encontrar uma data disponível.

*Secretaria Municipal de Saúde de '.$geral['geral_cidade'].'*
_Administração: '.$geral['geral_slogan'].'_'
);
        }

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> PROCEDIMENTO ADICIONADO A FILA COM SUCESSO.');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/procedimentos/agendar
     */
    public function agendar(): void
    {
        $dados = $this->input->post();
        
        $notificar_whatsapp = $dados['notificar_whatsapp'];
        unset($dados['notificar_whatsapp']);


        $this->Procedimentos->update(
            [
                'procedimentos_id' => $dados['procedimentos_id']
            ],
            $dados
        );

        $geral = $this->db->get('geral')->row_array();
        // $procedimento = $this->db->get_where('tabela_proced', ['id' => $dados['tabela_proced_id']])->row_array();
        $paciente_id = $this->db->get_where('procedimentos', ['procedimentos_id'=>$dados['procedimentos_id']])->row_array()['paciente_id'];
        $paciente = $this->Pacientes->getAll(['paciente_id' => $paciente_id])[0];
        $paciente_nome = explode(' ', $paciente['nome_paciente'])[0] . ' ' . explode(' ', $paciente['nome_paciente'])[1];

        //NOTIFICAÇÃO NO WHATSAPP
        if($notificar_whatsapp){
            $this->whatsapp->enviar(
                $paciente['telefone_paciente'],
                'Olá ' . $paciente_nome . ', 
Nossa equipe encontrou um horário disponível para a sua solicitação do seu procedimento e ele foi agendado para o dia *'.date_format(date_create($dados['data']),'d/m/Y').'*.
    
*Secretaria Municipal de Saúde de ' . $geral['geral_cidade'] . '*
_Administração: ' . $geral['geral_slogan'] . '_'
            );

        }

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

    /**
     * GET: v2/regulacao/procedimentos/print/(:num)
     */
    public function print(int $procedimento_id) :void
    {
        $data['title'] = 'Procedimento completo';

        $data['procedimento'] = $this->db
        ->join('especialidades', 'procedimentos.especialidade = especialidades.especialidades_id')
        ->join('pacientes', 'pacientes.paciente_id = procedimentos.paciente_id')
        ->join('tabela_proced', 'tabela_proced.id = procedimentos.tabela_proced_id')
        ->join('profissionais', 'profissionais.profissional_id = procedimentos.profissional_solicitante')
        ->get_where('procedimentos', ['procedimentos_id'=>$procedimento_id])->row_array();
        
        $this->load->view('v2/regulacao/procedimentos/Print_view', $data);
    }

}
