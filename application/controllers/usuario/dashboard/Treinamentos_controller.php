<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Treinamentos_controller extends Sistema_Controller {



    public function index()
    {	
        $this->usuario_view('Treinamentos_view', array());
    }

}
