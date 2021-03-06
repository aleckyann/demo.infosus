<?php

/**
 * Classe para manipulação da tabela especialidades
 */
class Especialidades_model extends CI_model
{
    protected $table = 'especialidades';

    /**
     * Busca todas as especialidades
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }


    /**
     * Atualiza uma especialidades
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em especialidades
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }
}
