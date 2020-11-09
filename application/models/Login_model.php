<?php

class Login_model extends CI_model
{

    public function login($dados)
    {
        $dados['usuario_password'] = criptografia($dados['usuario_password']);
        if($this->db->where($dados)->get('usuarios')->result_array()){
        	return $this->db->where($dados)->get('usuarios')->result_array()[0];
        }else{
        	return false;
        }
    }


    public function usuarios()
    {
    	return $this->db->select('*')->get('usuarios')->result_array();
    }

}
