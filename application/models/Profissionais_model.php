<?php

/**
 * Classe para manipulação da tabela procedimentos
 */
class Profissionais_model extends CI_model
{
    protected $table = 'profissionais';

    /**
     * Busca todas os procedimentos
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um procedimento
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }


    /**
     * Insere um registro em procedimentos
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }

}
