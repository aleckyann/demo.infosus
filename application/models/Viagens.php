<?php

/**
 * Classe para manipulação da tabela viagens
 */
class Viagens extends CI_model
{
    protected $table = 'viagens';

    /**
     * Busca todas os viagens
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um viagens
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    /**
     * Insere um registro em viagens
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }

    /**
     * 
     */
    public function porVeiculo(array $where = []): array
    {
        $this->db->join('veiculos', 'veiculos.veiculo_id =  viagens.veiculo_id');
        $this->db->order_by('data', 'asc');
        return $this->db->get_where('viagens', $where)->result_array();
    }

    /**
     * 
     */
    public function poltronasPorViagem(int $viagem_id)
    {
        $this->db->select('poltronas_json');
        $query = $this->db->get_where('viagens', ['viagem_id' => $viagem_id]);
        return $query->result_array()[0]['poltronas_json'];
    }
}
