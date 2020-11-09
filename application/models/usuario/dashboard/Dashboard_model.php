<?php

class Dashboard_model extends CI_model
{


    public function login($dados){
        $dados['usuario_password'] = criptografia($dados['usuario_password']);
        return $this->db->where($dados)->get('usuarios')->result_array()[0];
    }
    
    public function inclui_comentario($dados){

            $this->db->insert('comentarios', $dados);
        }

    public function curso(){

            $this->db->select('*');            
            $query = $this->db->get_where('videos', array('treinamento_id' => segment('3')));
            //echo $this->db->last_query();
            return @$query->result_array()[0];
        }

    public function videos(){

            $this->db->select('*');
            $this->db->order_by('treinamento_nome', 'ASC');
            $query = $this->db->get('videos');
            //echo $this->db->last_query();
            return $query->result_array();
        }

       
    public function comentarios(){

            $this->db->select('*');            
            $this->db->order_by('comentario_id', 'ASC');
            $query = $this->db->get_where('comentarios', array('video_id' => segment('3')));
            //echo $this->db->last_query();
            return @$query->result_array();
        }

    public function meus_videos(){
            $this->db->where('meus_videos.usuario_id', $_SESSION['usuario_id']);
            $this->db->join('meus_videos', 'videos.treinamento_id =  meus_videos.treinamento_id');
            $this->db->order_by('treinamento_nome', 'ASC');
            $query = $this->db->get('videos');
            //echo $this->db->last_query();

            return $query->result_array();
        }



   public function matricula($usuario_id, $treinamento_id){

            $dados_usuario = array ('usuario_id' => $usuario_id, 'treinamento_id' => $treinamento_id);
            $this->db->insert('meus_videos', $dados_usuario);

        }

        
    public function verifica_matricula(){

            
            $this->db->where('meus_videos.usuario_id', $_SESSION['usuario_id']);
            $this->db->where('meus_videos.treinamento_id', segment('3'));

            $this->db->join('meus_videos', 'videos.treinamento_id =  meus_videos.treinamento_id');
            $query = $this->db->get('videos');

            //echo $this->db->last_query();
            return @$query->result_array()[0];
            
        }


      
}
