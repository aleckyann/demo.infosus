<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Casa_de_apoio_controller extends Sistema_Controller
{


    public function agendados(): void
    {
        $dados['apoio'] = $this->Casa_de_apoio->porPaciente(['saiu'=>0]);
        $this->view('regulacao/casa_de_apoio/Agendados_view', $dados);
    }

    
    public function historico(): void
    {
        $dados['apoio'] = $this->Casa_de_apoio->porPaciente(['saiu'=>1]);
        $this->view('regulacao/casa_de_apoio/Historico_view', $dados);
    }

    public function new(): void
    {
        $dados = $this->input->post();
        $this->Casa_de_apoio->insert($dados);

        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Paciente adicionado à casa de apoio com sucesso');
        redirect('v2/regulacao/casa-de-apoio/listagem');
    }


    public function editar_registro(): void
    {
        $dados = $this->input->post();
        $this->Casa_de_apoio->update(
            [
                'apoio_id' => $dados['apoio_id']
            ],
            $dados
        );

        $this->session->set_flashdata('warning', '<i class="far fa-check-circle"></i> Registro de casa de apoio editado com sucesso');
        redirect('v2/regulacao/casa-de-apoio/listagem');
    }


    public function update_status(int $apoio_id): void
    {
        $this->Casa_de_apoio->update(
            ['apoio_id'=>$apoio_id],
            ['saiu'=>1]
        );
        $this->session->set_flashdata('success', '<i class="far fa-check-circle"></i> Registro alterado com sucesso');
        redirect('v2/regulacao/casa-de-apoio/agendados');
    }


    public function jsonOne(int $apoio_id): void
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Casa_de_apoio->porPaciente(['apoio_id'=>$apoio_id])[0]));
    }

    
}
