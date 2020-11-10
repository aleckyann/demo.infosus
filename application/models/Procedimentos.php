<?php

/**
 * Classe para manipulação da tabela procedimentos
 */
class Procedimentos extends CI_model
{

    /**
     * Busca todas os procedimentos
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where('especialidades', $where)->result_array();
    }
}
