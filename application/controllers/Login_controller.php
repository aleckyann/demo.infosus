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
        $dados = $this->input->post(['usuario_email', 'usuario_password']);
        
        $usuario_autenticado = $this->Auth->login($dados);
        
        if(!empty($usuario_autenticado)) {
            $this->session->set_userdata($usuario_autenticado);
            $this->session->set_flashdata('success', 'Seja bem vindo.');
            redirect('usuario/dashboard');
        } else {
            $this->session->set_flashdata('danger', 'Login ou senha incorretos.');
            redirect();
        }
        
	}

    /**
     * GET: cidade.infosus.net.br/logout
     */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect();
    }

    public function error_404()
    {
        $this->output->set_status_header(404);
        $this->load->view('error_404');
    }

}
