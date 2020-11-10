<?php

/**
 * Classe para manipulação da tabela especialidades
 */
class Especialidades extends CI_model
{
    /**
     * Busca todas as especialidades
     * Recebe um array(opcional)
     */
    public function getAll(Array $where =[]) :Array
    {
        return $this->db->get_where('especialidades', $where)->result_array();
    }

}

