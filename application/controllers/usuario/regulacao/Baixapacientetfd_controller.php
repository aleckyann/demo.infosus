<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Baixapacientetfd_controller extends Sistema_Controller
{

    public function index()
    {
        $this->Tfd->update(
            [
                'tfd_id' => segment('5')
            ],
            [
                'realizado' => $this->input->get('realizado')
            ]
        );
        $this->session->set_flashdata('success', 'Baixa realizada com sucesso.');
        redirect('usuario/regulacao/fila-tfd');
    }
}
