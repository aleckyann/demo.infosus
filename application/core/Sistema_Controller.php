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

    public function usuario_view(string $view, array $data): void
    {
        if($this->input->get('v2')){
            $this->load->view('v2/app/'.$this->uri->segment(1) . '/includes/Header_view', $data);
            $this->load->view('v2/app/'.$this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $view, $data);
            $this->load->view('v2/app/'.$this->uri->segment(1) . '/includes/Footer_view', $data);
        } else {
            $this->load->view($this->uri->segment(1) . '/includes/Header_view', $data);
            $this->load->view($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $view, $data);
            $this->load->view($this->uri->segment(1) . '/includes/Footer_view', $data);
        }

    }

}
