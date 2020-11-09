<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cursos_controller extends CI_Controller {


    public function index()
    {
    	$data['title'] = 'Plataforma treinamento - Cursos';
		$data['videos'] = $this->Site_model->videos();

        $this->load->view('includes/Header_view');
        $this->load->view('Cursos_view', $data);
        $this->load->view('includes/Footer_view');


    }

}