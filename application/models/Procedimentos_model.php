<?php

/**
 * Classe para manipulação da tabela procedimentos
 */
class Procedimentos_model extends CI_model
{
    protected $table = 'procedimentos';

    /**
     * Busca todas os procedimentos
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->order_by('procedimento_risco', 'DESC')->get_where($this->table, $where)->result_array();
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
     * Nega um procedimento
     * Recebe o id do procedimento e o motivo
     */
    public function negar(int $procedimento_id, string $negado_por): void
    {
        $this->db->update(
            $this->table,
            ['negado_por' => $negado_por],
            ['procedimentos_id' => $procedimento_id]
        );
    }

    /**
     * Insere um registro em procedimentos
     * Recebe um array
     */
    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }

    /**
     * 
     */
    public function porPaciente(array $where = []): array
    {
        $this->db->join('pacientes', 'procedimentos.paciente_id =  pacientes.paciente_id');
        return $this->db->order_by('procedimento_risco', 'DESC')->get_where('procedimentos', $where)->result_array();
    }

    /**
     * Agenda
     */
    public function agenda(array $where = []): array
    {
        $this->db->join('pacientes', 'procedimentos.paciente_id =  pacientes.paciente_id');
        return $this->db->get_where($this->table, $where)->result_array();
    }
}
