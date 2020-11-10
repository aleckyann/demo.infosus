<?php

/**
 * Classe para autenticação de usuario
 */
class Auth extends CI_model
{

    /**
     * Verifica se credenciais existem no DB
     */
    public function login(array $dados): array
    {
        $dados['usuario_password'] = criptografia($dados['usuario_password']);
        if ($this->db->where($dados)->get('usuarios')->result_array()) {
            return $this->db->where($dados)->get('usuarios')->result_array()[0];
        } else {
            return [];
        }
    }
}
