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
            $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
            redirect();
        } else {
            $this->session->set_flashdata('warning', 'Você está logado, para sair <a href="'.base_url('logout').'">clique aqui.</a>');
        }
    }

    public function usuario_view($view, $data)
    {
        $data['especialidades'] = $this->Dashboard_model->especialidades();
        $data['tabela_proced'] = $this->Dashboard_model->tabela_proced();
        $data['agenda_consulta'] = $this->Dashboard_model->agenda_consulta();
        $data['nome_paciente'] = $this->Dashboard_model->nome_paciente();
        $data['procedimentos'] = $this->Dashboard_model->procedimentos();
        $data['procedimentos_tfd'] = $this->Dashboard_model->procedimentos_tfd();

        $data['procedimentos_i'] = $this->Dashboard_model->procedimentos_i();
        $data['tfd_i'] = $this->Dashboard_model->tfd_i();
        $data['procedimentos_i_tfd'] = $this->Dashboard_model->procedimentos_i_tfd();
        $data['procedimentos_agenda'] = $this->Dashboard_model->procedimentos_agenda();
        $data['pacientes'] = $this->Dashboard_model->pacientes();

        $data['veiculos'] = $this->Dashboard_model->veiculos();

        
        $data['dados_veiculo'] = $this->Dashboard_model->dados_veiculo();
        

        $data['viagens'] = $this->Dashboard_model->viagens();


        $data['veiculo_dados'] = $this->Dashboard_model->veiculo_dados();


        $data['casadeapoio'] = $this->Dashboard_model->casadeapoio();
        $data['dados_casa'] = $this->Dashboard_model->dados_casa();


        $dados = $this->input->post();
        $data['procedimentos_realizados'] = $this->Dashboard_model->procedimentos_realizados(@$dados['data_inicio'], @$dados['data_fim']);
        $data['demanda_reprimida'] = $this->Dashboard_model->demanda_reprimida(@$dados['data_inicio'], @$dados['data_fim']);

        //tfd

        $data['procedimentos_realizados_tfd'] = $this->Dashboard_model->procedimentos_realizados_tfd(@$dados['data_inicio_tfd'], @$dados['data_fim_tfd']);
        $data['demanda_reprimida_tfd'] = $this->Dashboard_model->demanda_reprimida_tfd(@$dados['data_inicio_tfd'], @$dados['data_fim_tfd']);


        $this->load->view('usuario/includes/Header_view', $data);
        $this->load->view('usuario/'.segment(3).'/'.$view, $data);
        $this->load->view('usuario/includes/Footer_view');
    }

}

?>
