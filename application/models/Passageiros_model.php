<?php

/**
 * Classe para manipulação da tabela passageiros
 */
class Passageiros_model extends CI_model
{
    protected $table = 'passageiros';

    /**
     * Busca todas os passageiros
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        $this->db->select('passageiros.*, viagens.*, m1.nome_municipio as origem, m2.nome_municipio as destino');
        $this->db->join('viagens', 'viagens.viagem_id = passageiros.passageiro_viagem_id');
        $this->db->join('municipios_ibge m1', 'viagens.viagem_origem = m1.municipio_id');
        $this->db->join('municipios_ibge m2', 'viagens.viagem_destino = m2.municipio_id');
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um passageiro
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em passageiro
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }
}
