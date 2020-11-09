<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dados_controller extends Sistema_Controller {



    public function index()
    {	
        $this->usuario_view('Dados_view', array());
    }

}
