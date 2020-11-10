<?php

/**
 * Classe para manipulação da tabela veiculos
 */
class Veiculos extends CI_model
{
    protected $table = 'veiculos';

    /**
     * Busca todas os veiculos
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um veiculos
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em veiculos
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }
}
