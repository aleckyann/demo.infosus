<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Verificacao_controller extends Sistema_Controller {



    public function index()
    {	
        $this->usuario_view('Verificacao_view', array());
    }

}
