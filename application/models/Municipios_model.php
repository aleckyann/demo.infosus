<?php

/**
 * Classe para manipulação da tabela estabelecimentos_solicitantes
 */
class Municipios_model extends CI_model
{
    protected $table = 'municipios_ibge';

    /**
     * Busca todas os estabelecimentos_solicitantes
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um estabelecimentos_solicitantes
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em estabelecimentos_solicitantes
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }
}
