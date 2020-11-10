<?php

/**
 * Classe para manipulação da tabela tabela_proced
 */
class Tabela_proced extends CI_model
{

    /**
     * Busca todas os tabela_proced
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where('tabela_proced', $where)->result_array();
    }
}
