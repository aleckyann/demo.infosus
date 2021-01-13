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
        $usuario = $this->input->post();
        $usuario['usuario_password'] = hash('whirlpool', $usuario['usuario_password']);

        $this->Usuarios->insert($usuario);

        $this->session->set_flashdata('success', 'USUÁRIO CRIADO COM SUCESSO.');
        redirect($this->agent->referrer());
    }

    /**
     * POTS: v2/configuracoes/usuarios/editar
     */
    public function editar(): void
    {
        $usuario = $this->input->post();
        if($usuario['usuario_password']){
            $usuario['usuario_password'] = hash('whirlpool', $usuario['usuario_password']);
        }
        $this->Usuarios->update(
            ['usuario_id'=>$usuario['usuario_id']],
            $usuario
        );

        $this->session->set_flashdata('success', 'USUÁRIO EDITADO COM SUCESSO');
        redirect($this->agent->referrer());
    }
}
