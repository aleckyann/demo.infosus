<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Aula_controller extends Sistema_Controller {



    public function index()
    {	
        $this->usuario_view('Aula_view', array());
    }

}
