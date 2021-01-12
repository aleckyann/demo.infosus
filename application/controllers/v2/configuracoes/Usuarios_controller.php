<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Usuarios_controller extends Sistema_Controller
{

    /**
     * POTS: v2/configuracoes/usuarios
     */
    public function index(): void
    {
        $data['title'] = 'Configurar usuarios';
        $data['usuarios'] = $this->Usuarios->getAll();

        $this->view('configuracoes/Usuarios_view', $data);
    }

    /**
     * POTS: v2/configuracoes/usuarios/novo
     */
    public function novo(): void
    {
        $dados = $this->input->post();
        $this->Usuarios->insert($dados);

        $this->session->set_flashdata('success', 'Usuario adicionado ao sistema com sucesso.');
        redirect($this->agent->referrer());
    }

    /**
     * POTS: v2/configuracoes/usuarios/editar
     */
    public function editar(): void
    {
        $dados = $this->input->post();
        $this->Usuarios->update($dados);

        $this->session->set_flashdata('success', 'Usuario adicionado ao sistema com sucesso.');
        redirect($this->agent->referrer());
    }
}
