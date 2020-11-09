<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sihsus_controller extends Sistema_Controller {

    public function index()
    {	
        $dados = $this->input->post();

    	$dados_sih['municipio_sih'] = $this->Dashboard_model->municipio_sih($dados);
    	$dados_sih['sih'] = $this->Dashboard_model->dados_sih($dados);
        $this->usuario_view('Sihsus_view', $dados_sih);
    }

}
