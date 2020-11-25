<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Casa_de_apoio_controller extends Sistema_Controller
{


    public function listagem(): void
    {
        $dados['pacientes'] = $this->Casa_de_apoio->porPaciente();
        $this->view('regulacao/casa_de_apoio/Listagem_view', $dados);
    }


    public function new(): void
    {
        pre($this->input->post());
    }

    
}
