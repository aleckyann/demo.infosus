<?php

/**
 * Classe para manipulação da tabela tabela_proced
 */
class Tabela_proced extends CI_model
{
    protected $table = 'tabela_proced';

    /**
     * Busca todas os tabela_proced
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um tabela_proced
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em tabela_proced
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }
}
