<?php

/**
 * Classe para manipulação da tabela casa_de_apoio
 */
class Casa_de_apoio extends CI_model
{

    protected $table = 'casa_de_apoio';

    /**
     * Busca todas os casa_de_apoio
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um casa_de_apoio
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em casa_de_apoio
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }
}
