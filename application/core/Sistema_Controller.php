<?php


class Sistema_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();


        /**
         * ACS - ACCESS CONTROL SESSION
         *  Controla o acesso do sistema de acordo a existencia da sessão autenticada
         */
        if (!$this->session->usuario_email) {
            $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
            redirect('auth');
        }



        /**
         * ACL - ACCESS CONTROL LIST
         * Controla o acesso dos recursos de acordo o segmneto 2 de url
         */
        $acess_control_list = [
            'gestão' => ['api', 'dashboard', 'pacientes', 'regulacao', 'transportes', 'almoxarifado', 'configuracoes'],
            'regulação' => ['api', 'configuracoes', 'dashboard', 'pacientes', 'regulacao', 'transportes'],
            'transportes' => ['api', 'dashboard', 'pacientes', 'transportes'],
            'almoxarifado' => ['api', 'dashboard', 'almoxarifado']
        ];
        if( !in_array($this->uri->segment(2), $acess_control_list[$this->session->usuario_nivel]) ){
            $this->session->set_flashdata('danger', '<i class="fas fa-hand-paper"></i> VOCÊ NÃO TEM PERMISSÃO PARA ESTA PÁGINA OU FUNCIONALIDADE.');
            redirect($this->agent->referrer());
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
