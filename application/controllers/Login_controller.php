<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_controller extends CI_Controller {


    public function index()
    {
        $this->load->view('usuario/includes/Data_view');
        $this->load->view('Login_view');
    }

	public function login()
	{
		$dados = $this->input->post();
		$this->session->set_userdata($this->Login_model->login($dados));
        redirect('usuario/dashboard');
	}

    public function logout()
    {
        session_destroy();
        redirect();
    }

}
