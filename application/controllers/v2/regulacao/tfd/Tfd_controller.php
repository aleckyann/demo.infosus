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
        $dados['title'] = 'Fila de TFD';
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL]);

        $this->view('regulacao/tfd/Fila_view', $dados);
    }


    /**
     * POST: v2/regulacao/tfd/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();

        if($dados['notificar_whatsapp']){
            unset($dados['notificar_whatsapp']);
            
        }

        //Salva o TFD
        $tfd_id = $this->Tfd->insert($dados);

        //Verifica se há upload e faz as configurações do upload
        if ($_FILES['tfd_anexo']) {
            $config['upload_path']          = realpath(APPPATH . '../public/v2/anexos/tfd');
            $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx';
            $config['file_name']            = $tfd_id;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            //Se upload der certo, atualiza no DB
            if (!$this->upload->do_upload('tfd_anexo')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = $this->upload->data();
                $this->Tfd->update(
                    ['tfd_anexo' => $data['orig_name']],
                    ['tfd_id' => $tfd_id]
                );
            }
        }

        $this->session->set_flashdata('success', 'TFD criado com sucesso');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/tfd/reagendar
     */
    public function reagendar(): void
    {
        $dados = $this->input->post();

        //Vê se houve atualização do anexo
        if ($_FILES['tfd_anexo']['error'] != 0) {
            $dados['tfd_anexo'] = $dados['novo_tfd_anexo'];
        }
        unset($dados['novo_tfd_anexo']);

        // Salva o TFD
        $tfd_id = $this->Tfd->insert($dados);

        //Verifica se há upload e faz as configurações do upload
        if ($_FILES['tfd_anexo']['error'] == 0) {
            $config['upload_path']          = realpath(APPPATH . '../public/v2/anexos/tfd');
            $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx';
            $config['file_name']            = $tfd_id;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            //Se upload der certo, atualiza no DB
            if (!$this->upload->do_upload('tfd_anexo')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = $this->upload->data();
                $this->Tfd->update(
                    ['tfd_anexo' => $data['orig_name']],
                    ['tfd_id' => $tfd_id]
                );
            }
        }

        $this->session->set_flashdata('success', 'TFD REAGENDADO COM SUCESSO!');
        redirect($this->agent->referrer());
    }


    /**
     * POST: v2/regulacao/tfd/agendar
     */
    public function agendar(): void
    {
        $dados = $this->input->post();
        $this->Tfd->update(
            $dados,
            [
                'tfd_id' => $dados['tfd_id']
            ]
        );

        //Verifica se há upload e faz as configurações do upload
        if ($_FILES['tfd_anexo']['error'] != 0) {
            $config['upload_path']          = realpath(APPPATH . '../public/v2/anexos/tfd');
            $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx';
            $config['file_name']            = $dados['tfd_id'];
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            //Se upload der certo, atualiza no DB
            if (!$this->upload->do_upload('tfd_anexo')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = $this->upload->data();
                $this->Tfd->update(
                    ['tfd_anexo' => $data['orig_name']],
                    ['dados_tfd_id' => $dados['tfd_id']]
                );
            }
        }

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
                'tfd_realizado' => 'sim'
            ],
            [
                'tfd_id' => $tfd_id
            ]
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

        //RECEBE O NOVO VALOR DE RISCO DO TFD
        $dados['tfd_risco'] = $dados['editar_tfd_risco'];
        unset($dados['editar_tfd_risco']);

        //VERIFICA SE HOUVE ATUALIZAÇÃO DO ANEXO
        if ($_FILES['tfd_anexo']['error'] != 0) {
            $dados['tfd_anexo'] = $dados['editar_tfd_anexo'];
        }
        unset($dados['editar_tfd_anexo']);

        // ATUALIZA AS INFORMAÇÕES DO TFD
        $this->Tfd->update($dados, ['tfd_id' => $dados['tfd_id']]);

        //VERIFICA SE HÁ ARQUIVO E FAZ UPLOAD
        if ($_FILES['tfd_anexo']['error'] == 0) {
            $config['upload_path']          = realpath(APPPATH . '../public/v2/anexos/tfd');
            $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx';
            $config['file_name']            = $dados['tfd_id'];
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            //Se upload der certo, atualiza no DB
            if (!$this->upload->do_upload('tfd_anexo')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = $this->upload->data();
                $this->Tfd->update(
                    ['tfd_anexo' => $data['orig_name']],
                    ['tfd_id' => $dados['tfd_id']]
                );
            }
        }

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> TFD ATUALIZADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }


    /**
     * GET: v2/regulacao/tfd/agendados
     * DB: tfd.realizado = 'sim'
     */
    public function agendados(): void
    {
        $dados['title'] = 'TFD agendados';
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL]);

        $this->view('regulacao/tfd/Agendados_view', $dados);
    }


    /**
     * GET: v2/regulacao/tfd/negados
     * DB: tfd.realizado = 'nao'
     */
    public function negados(): void
    {
        $dados['title'] = 'TFD negados';
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_negado_por !=' => NULL]);

        $this->view('regulacao/tfd/Negados_view', $dados);
    }


    /**
     * GET: v2/regulacao/tfd/realizados
     * DB: tfd.estabelecimento_prestados =! ''
     */
    public function realizados(): void
    {
        $dados['title'] = 'TFD realizados';
        $dados['tfd'] = $this->Tfd->porPaciente(['tfd_realizado' => 'sim']);

        $this->view('regulacao/tfd/Realizados_view', $dados);
    }

    public function jsonOne(int $tfd_id): void
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Tfd->porPaciente(['tfd_id' => $tfd_id])[0]));
    }

    /**
     * GET: v2/regulacao/tfd/print/(:num)
     */
    public function print(int $tfd_id): void
    {
        $data['title'] = 'TFD completo';

        $data['tfd'] = $this->db
        ->join('pacientes', 'pacientes.paciente_id = tfd.paciente_id')
        ->join('estabelecimentos', 'estabelecimentos.estabelecimento_id = tfd.tfd_estabelecimento_solicitante')
        ->join('municipios_ibge', 'municipios_ibge.municipio_id = tfd.tfd_cidade_destino', 'left')
        ->get_where('tfd', ['tfd_id' => $tfd_id])->row_array();
        
        $this->view('regulacao/tfd/Print_view', $data);
    }
}
