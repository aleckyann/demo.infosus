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

        //LOG PARA TODAS AS REQUISIÇÕES POST
        if($this->input->post() AND $this->uri->segment(2) != 'api'){
            $json = [
                'log_tipo' => 'automatic log',
                'log_desc' => json_encode([
                    'referrer' => $this->agent->referrer(),
                    'current' => current_url(),
                    'get' => $this->input->get(),
                    'post' => $this->input->post(),
                    'user' => $this->session->usuario_id
                ])
            ];
            $this->db->insert('logs', $json);
        }
    }

    public function usuario_view(string $view, array $data = []): void
    {
        $data['csrf_input'] = '<input type="hidden" name="' . $this->security->get_csrf_token_name() . '" value="' . $this->security->get_csrf_hash() . '">';
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_value'] = $this->security->get_csrf_hash();

        if ($this->input->get('v2')) {
            redirect('v2/pacientes/listagem');
        } else {
            $this->load->view($this->uri->segment(1) . '/includes/Header_view', $data);
            $this->load->view($this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $view, $data);
            $this->load->view($this->uri->segment(1) . '/includes/Footer_view', $data);
        }
    }

    /**
     * Função que monta as views da v2
     */
    public function view(string $view, array $data = []): void
    {
        $data['csrf_input'] = '<input type="hidden" name="' . $this->security->get_csrf_token_name() . '" value="' . $this->security->get_csrf_hash() . '">';
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $data['csrf_value'] = $this->security->get_csrf_hash();

        $this->load->view('v2/includes/Header_view', $data);
        $this->load->view('v2/' . $view, $data);
        $this->load->view('v2/includes/Footer_view', $data);
    }
}
