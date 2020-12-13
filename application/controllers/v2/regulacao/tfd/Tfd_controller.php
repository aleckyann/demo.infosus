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
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por'=>NULL]);

        $this->view('regulacao/tfd/Fila_view', $dados);
    }


    /**
     * POST: v2/regulacao/tfd/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();

        $tfd_id = $this->Tfd->insert($dados);

        $config['upload_path']          = realpath(APPPATH . '../public/v2/anexos/tfd');
        $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx';
        $config['file_name']            = $tfd_id;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('tfd_anexo')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('danger', 'Não foi salvar o anexo deste TFD, envie arquivos: .jpeg .jpg .png .pdf .doc ou .docx');
        } else {
            $data = $this->upload->data();
            $this->Tfd->update(
                ['tfd_anexo' => $data['orig_name']],
                ['tfd_id' => $tfd_id]
            );
        }

        $this->session->set_flashdata('success', 'TFD criado com sucesso');
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

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> TFD agendado com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/tfd/negar
     */
    public function negar(): void
    {
        $dados = $this->input->post();
        $this->Tfd->negar($dados['tfd_id'], $dados['tfd_negado_por']);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> TFD negado com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/tfd/concluir/(:num)
     */
    public function concluir(int $tfd_id): void
    {
        $this->Tfd->update(
            [
                'tfd_id' => $tfd_id
            ],
            [
                'tfd_realizado' => 'sim'
            ],
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> TFD concluido com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/tfd/editar/
     */
    public function editar(): void
    {
        $dados = $this->input->post();
        $dados['tfd_risco'] = $dados['editar_tfd_risco'];
        unset($dados['editar_tfd_risco']);

        $this->Tfd->update(
            [
                'tfd_id' => $dados['tfd_id']
            ],
            $dados
        );

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> TFD atualizado com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * GET: v2/regulacao/tfd/agendados
     * DB: tfd.realizado = 'sim'
     */
    public function agendados(): void
    {
        $dados['title'] = 'Tfd agendados';
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL]);

        $this->view('regulacao/tfd/Agendados_view', $dados);
    }


    /**
     * GET: v2/regulacao/tfd/negados
     * DB: tfd.realizado = 'nao'
     */
    public function negados(): void
    {
        $dados['title'] = 'Tfd negados';
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_negado_por !=' => NULL]);

        $this->view('regulacao/tfd/Negados_view', $dados);
    }


    /**
     * GET: v2/regulacao/tfd/realizados
     * DB: tfd.estabelecimento_prestados =! ''
     */
    public function realizados(): void
    {
        $dados['title'] = 'Tfd realizados';
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_realizado' => 'sim']);

        $this->view('regulacao/tfd/Realizados_view', $dados);
    }

    public function jsonOne(int $tfd_id): void
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Tfd->porPaciente(['tfd_id' => $tfd_id])[0]));
    }
}
