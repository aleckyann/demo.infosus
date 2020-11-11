<?php


class Sistema_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->usuario_email == '') {
            $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
            redirect();
        }
    }

    public function usuario_view($view, $data)
    {
        $this->load->view($this->uri->segment(1) . '/includes/Header_view', $data);
        $this->load->view($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $view, $data);
        $this->load->view($this->uri->segment(1) . '/includes/Footer_view', $data);
    }
}
