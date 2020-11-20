<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Finalizarviagem_controller extends Sistema_Controller
{

    public function index()
    {
        $this->Dashboard_model->finalizar_viagem();
        $this->session->set_flashdata('viagem-finalizar', 'Viagem realizada com sucesso!');
        redirect('usuario/transportes/viagens');
    }
}
