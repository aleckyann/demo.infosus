<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Baixapaciente_controller extends Sistema_Controller
{

    /**
     * GET: usuario/regulacao/concluir-paciente/(:num)?
     */
    public function index()
    {
        $this->Procedimentos->update(
            [
                'procedimentos_id' => segment(5)
            ],
            [
                'realizado' => $this->input->get('realizado')
            ]
        );

        $this->session->set_flashdata('success', 'Baixa realizada com sucess');
        redirect('usuario/regulacao/fila');
    }
}
