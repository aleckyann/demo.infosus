<?php

/**
 * Classe para manipulação da tabela pacientes
 */
class Pacientes extends CI_model
{
    /**
     * Busca todas os pacientes
     * Recebe um array(opcional)
     */
    public function getAll(Array $where =[]) :Array
    {
        return $this->db->get_where('pacientes', $where)->result_array();
    }

}

