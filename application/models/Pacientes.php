<?php

/**
 * Classe para manipulação da tabela pacientes
 */
class Pacientes extends CI_model
{
    protected $table = 'pacientes';

    /**
     * Busca todas os pacientes
     * Recebe um array(opcional)
     */
    public function getAll(Array $where =[]) :Array
    {
        return $this->db->order_by('nome_paciente', 'asc')->get_where($this->table, $where)->result_array();
    }

    /**
     * Atualiza um paciente
     * Recebe um array
     */
    public function update(array $where, array $dados) :void
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


    public function getAllApi(array $where = []): array
    {
        return $this->db->like($where)->select('paciente_id id, nome_paciente text')->get_where($this->table)->result_array();
    }

    public function getJsonDatatable(array $where = [])
    {
        $dados['results'] = $this->db->like($where)->select('paciente_id id, nome_paciente text')->get($this->table)->result_array();

        return json_encode($dados);
    }

}

