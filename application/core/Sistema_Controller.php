<?php
/*
CONTROLLERS DO SISTEMA QUE PRECISAM ESTAR AUTENTICADOS DEVEM DEIXAR DE
EXTENDER CI_Controller, EXTENDENDO ESTE CONTROLLER.
*/
class Sistema_Controller extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if($this->session->usuario_email == ''){
            $this->session->set_flashdata('login', 'Faça login corretamente para acessar ao curso.');
            redirect('login');
        } else {
            $this->session->set_flashdata('login', 'Você está logado, para sair <a href="'.base_url('logout').'">clique aqui.</a>');
            return true;
        }

    }

    public function usuario_view($view, $data)
    {
        $data['curso'] = $this->Dashboard_model->curso();
        $data['videos'] = $this->Dashboard_model->videos();
        $data['meus_videos'] = $this->Dashboard_model->meus_videos();
        $data['verifica_matricula'] = $this->Dashboard_model->verifica_matricula();
        $data['comentarios'] = $this->Dashboard_model->comentarios();

        
        $this->load->view('usuario/includes/Header_view', $data);
        $this->load->view('usuario/'.'/'.$view, $data);
        $this->load->view('usuario/includes/Footer_view', $data);

    }

}

?>
