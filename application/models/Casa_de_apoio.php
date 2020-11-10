<?php

/**
 * Classe para manipulação da tabela casa_de_apoio
 */
class Casa_de_apoio extends CI_model
{

    /**
     * Busca todas os casa_de_apoio
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where('casa_de_apoio', $where)->result_array();
    }
}
