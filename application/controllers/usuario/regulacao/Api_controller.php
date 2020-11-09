<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Api_controller extends Sistema_controller {

    

    #GET: /admin/servicos/clientes/id
    public function index()
    {
        header('Content-Type: application/json');
        
        $pacientes = $this->Dashboard_model->pacientes();
        echo '{"data":'.(json_encode($pacientes)).'}';
    }
  
  
}