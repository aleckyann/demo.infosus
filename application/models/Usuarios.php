<?php

/**
 * Classe para manipulação da tabela usuarios
 */
class Usuarios extends CI_model
{

    /**
     * Busca todas os usuarios
     * Recebe um array(opcional)
     */
    public function getAll(array $where = []): array
    {
        return $this->db->get_where('especialidades', $where)->result_array();
    }
}
