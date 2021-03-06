<?php

/**
 * Classe para manipulação da tabela usuarios
 */
class Usuarios_model extends CI_model
{
    protected $table = 'usuarios';

    /**
     * Busca todas os usuarios
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um usuarios
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em usuarios
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }
}
