<?php

/**
 * Classe para manipulação da tabela tfd
 */
class Tfd extends CI_model
{

    /**
     * Busca todas os Tfd
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where('especialidades', $where)->result_array();
    }
}
