<?php

/**
 * Classe para manipulação da tabela tfd
 */
class Tfd_model extends CI_model
{
    protected $table = 'tfd';

    /**
     * Busca todas os Tfd
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um tfd
     * Recebe um array
     */
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }


    /**
     * negar um tfd
     * Recebe um id do tfd e motivo
     */
    public function negar(int $tfd_id, string $tfd_negado_por): void
    {
        $this->db->update($this->table, ['tfd_negado_por'=>$tfd_negado_por], ['tfd_id'=>$tfd_id]);
    }

    /**
     * Insere um registro em tfd
     * Recebe um array
     */
    public function insert(array $dados): int
    {
        $this->db->insert($this->table, $dados);
        return $this->db->insert_id();
    }

    /**
     * 
     */
    public function porPaciente(array $where = []): array
    {
        $this->db->join('pacientes', 'tfd.paciente_id =  pacientes.paciente_id');
        return $this->db->get_where('tfd', $where)->result_array();
    }
}
