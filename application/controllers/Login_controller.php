<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_controller extends CI_Controller {


    public function index()
    {
        
        $this->load->view('Login_view');
        $this->load->view('includes/Footer_view');


    }

    public function login()
	{
		$dados = $this->input->post();
		@$this->session->set_userdata($this->Login_model->login($dados));
        @redirect('usuario/meus-treinamentos');
	}

    public function recovery()
    {
        //
    }

    public function logout()
    {
        session_destroy();
        redirect();
    }

}