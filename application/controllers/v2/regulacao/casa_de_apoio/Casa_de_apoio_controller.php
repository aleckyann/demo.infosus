<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Casa_de_apoio_controller extends Sistema_Controller
{

    /**
     * GET: v2/regulacao/casa-de-apoio/agendados
     */
    public function agendados(): void
    {
        $data['title'] = 'Agendados'; 
        $dados['apoio'] = $this->Casa_de_apoio->porPaciente(['saiu'=>0]);
        $this->view('regulacao/casa_de_apoio/Agendados_view', $dados);
    }

    /**
     * GET: v2/
     */
    public function historico(): void
    {
        $data['title'] = 'Histórico'; 
        $dados['apoio'] = $this->Casa_de_apoio->porPaciente(['saiu'=>1]);
        $this->view('regulacao/casa_de_apoio/Historico_view', $dados);
    }

    /**
     * GET: v2/regulacao/casa-de-apoio/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Casa_de_apoio->insert($dados);

        $this->session->set_flashdata('success', 'PACIENTE ADICIONADO A CASA DE APOIO.');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/casa-de-apoio/
     */
    public function editar_registro(): void
    {
        $dados = $this->input->post();
        $this->Casa_de_apoio->update(
            [
                'apoio_id' => $dados['apoio_id']
            ],
            $dados
        );

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Registro de casa de apoio editado com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/casa-de-apoio/novo
     */
    public function update_status(int $apoio_id): void
    {
        $this->Casa_de_apoio->update(
            ['apoio_id'=>$apoio_id],
            ['saiu'=>1]
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Registro alterado com sucesso');
        redirect($this->agent->referrer());
    }

    /**
     * GET: v2/regulacao/casa-de-apoio/novo
     */
    public function jsonOne(int $apoio_id): void
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Casa_de_apoio->porPaciente(['apoio_id'=>$apoio_id])[0]));
    }

    
}
