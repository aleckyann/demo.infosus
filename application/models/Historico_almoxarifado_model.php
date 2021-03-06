<?php

/**
 * Classe para manipulação da tabela procedimentos
 */
class Historico_almoxarifado_model extends CI_model
{
    protected $table = 'historico_almoxarifado';

    /**
     * Busca todas os procedimentos
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db
        ->join('produtos', 'produtos.produto_id = historico_almoxarifado.h_a_produto_id')
        ->join('estoques', 'estoques.estoque_id = historico_almoxarifado.h_a_estoque_id')
        ->join('usuarios', 'usuarios.usuario_id = historico_almoxarifado.h_a_usuario_id')
        ->get_where($this->table, $where)->result_array();
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
