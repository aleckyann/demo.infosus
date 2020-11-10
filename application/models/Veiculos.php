<?php

/**
 * Classe para manipulação da tabela veiculos
 */
class Veiculos extends CI_model
{

    /**
     * Busca todas os veiculos
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where('veiculos', $where)->result_array();
    }
}
