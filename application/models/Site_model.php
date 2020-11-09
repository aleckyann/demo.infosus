<?php

class Site_model extends CI_model
{

    public function videos(){

            $this->db->select('*');
            $this->db->order_by('treinamento_nome', 'ASC');
            $query = $this->db->get('videos');
            //echo $this->db->last_query();
            return $query->result_array();
        }


 	public function curso(){

            $this->db->select('*');            
            $query = $this->db->get_where('videos', array('treinamento_id' => segment('3')));
            echo $this->db->last_query();
            return $query->result_array()[0];
        }








}
