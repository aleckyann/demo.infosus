<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SolicitarProcedimento_controller extends Sistema_Controller {

    /**
     * GET: usuario/regulacao/solicitar-procedimento/(:num)
     */
    public function index(int $paciente_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id'=>$paciente_id])[0];
        $this->usuario_view('SolicitarProcedimento_view', $data);
    }

    /**
     * POST: usuario/regulacao/salvar-procedimento
     */
    public function salvar()
    {
        $dados = $this->input->post();
        $dados['profissional_regulacao'] = $this->session->nome;

        $this->Procedimentos->insert($dados);
        $this->session->set_flashdata('success', 'Procedimento criado com sucesso.');
        redirect('usuario/regulacao/fila');
    }
}
