<?php

/**
 * Classe para manipulação da tabela viagens
 */
class Viagens extends CI_model
{

    /**
     * Busca todas os viagens
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where('viagens', $where)->result_array();
    }
}
