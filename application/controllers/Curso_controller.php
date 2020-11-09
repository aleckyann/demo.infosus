<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Curso_controller extends CI_Controller {


    public function index()
    {
    	$data['title'] = 'Plataforma treinamento - Cursos';
		$data['curso'] = $this->Site_model->curso();

        $this->load->view('includes/Header_view');
        $this->load->view('Curso_view', $data);
        $this->load->view('includes/Footer_view');


    }

}