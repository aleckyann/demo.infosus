<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Baixapacientecasa_controller extends Sistema_Controller
{

    /**
     * GET: usuario/regulacao/baixa-paciente-casa/(:num)
     */
    public function index()
    {
        $this->Casa_de_apoio->update(
            [
                'apoio_id' => segment(5)
            ],
            [
                'saiu' => 1
            ]
        );
        $this->session->set_flashdata('success', 'Baixa realizada com sucesso');
        redirect('usuario/regulacao/casa-de-apoio');
    }
}
