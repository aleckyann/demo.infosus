<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login_controller extends CI_Controller {


    public function index()
    {
        /**
         * GET cidade.infosus.net.br
         */
        $this->load->view('usuario/includes/Data_view');
        $this->load->view('Login_view');
    }

    /**
     * POST: cidade.infosus.net.br/login
     */
	public function login()
	{
		$dados = $this->input->post();
		$this->session->set_userdata($this->Login_model->login($dados));
        redirect('usuario/dashboard');
	}

    /**
     * GET: cidade.infosus.net.br/logout
     */
    public function logout()
    {
        session_destroy();
        session_start();
        $this->session->set_flashdata('info', 'Logout realizado com sucesso.');
        redirect();
    }

    public function error_404()
    {
        $this->output->set_status_header(404);
        $this->load->view('error_404');
    }

}
