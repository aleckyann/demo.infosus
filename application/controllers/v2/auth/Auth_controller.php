<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Auth_controller extends CI_Controller
{


    /**
     * GET: cidade.infosus.net.br/auth
     */
    public function index(): void 
    {
        $this->load->view('v2/auth/Auth_view');
    }

    /**
     * POST: cidade.infosus.net.br/auth
     */
    public function auth(): void
    {
        $dados = $this->input->post(['usuario_email', 'usuario_password']);

        $usuario_autenticado = $this->Auth->login($dados);

        if (!empty($usuario_autenticado)) {
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
    public function logout(): void
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('warning', 'Logout realizado.');
        redirect('auth');
    }

}